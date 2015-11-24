<?php
    require 'vendor/autoload.php';
    header('Access-Control-Allow-Origin: *');  
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name    = strip_tags(trim($_POST["name"]));
		$name    = str_replace(array("\r","\n"),array(" "," "),$name);
        $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone   = $_POST["phone"];
        $budget  = $_POST["budget"];
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            http_redirect("/");
            // echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $recipient = "isaacbell388@gmail.com";
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: \n" . clean_string($name) . "\n\n";
        $email_content .= "Email: \n" . clean_string($email) . "\n\n";
        if($phone != ''){
            $email_content .= "Phone: \n" . clean_string($phone) . "\n\n";
        }
        if($budget != ''){
            $email_content .= "Budget: \n" . clean_string($budget) . "\n\n";
        }
        $email_content .= "Message:\n" . clean_string($message) . "\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>" .
            'Reply-To: ' . clean_string($name) . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $sendgrid = new SendGrid('username', 'password');

        $message = new SendGrid\Email();
        $message->addTo('emailRemoved@gmail.com')->
                  setFrom('portfolio.mailer@gmail.com')->
                  setSubject("New contact from $name")->
                  setText($email_content)->
                  setHtml($email_content);
        // $response = $sendgrid->send($message);
        try {
            $sendgrid->send($message);
        } catch(\SendGrid\Exception $e) {
            echo $e->getCode();
            foreach($e->getErrors() as $er) {
                echo $er;
            }
        }
        header( 'Location: index.php?success=0' );

/* Note: can't use php mail() with heroku
 *
        // Send the email.
        if (mail($recipient, $subject, $email_content)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            header('Location: index.php');
            // echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo var_dump($email_content);
            echo "\<br>------------------------------------------------------------";
            // echo var_dump($email_headers);
            // header('Location: index.php');
            // echo "Oops! Something went wrong and we couldn't send your message.";
        }
*/

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        // echo "There was a problem with your submission, please try again.";
    }

?>