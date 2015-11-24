<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketing + Design + Web Development | Georgia and Alabama | Isaac Bell</title>
    <meta name="description" content="Isaac Bell is a full-stack marketer and web developer currently operating in the Atlanta area. He increases online visibility for businesses and individuals using whatever tools are necessary to get the job done.">
    <meta name="author" content="Isaac Bell">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/arrow.css">
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
  </head>
  <body>
    <canvas id="myCanvas"></canvas>
    <div class="overlay"></div>
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <!--- Off Canvas Side Menu -->
      <div class="close" data-toggle="offcanvas" data-target=".navmenu">
        <span class="fa fa-close"></span>
      </div>
      <div class="add-margin"></div>
      <ul class="nav navmenu-nav">
        <!--- Menu -->
        <li><a href="#home" class="page-scroll">Top</a></li>
        <li><a href="#meet-us" class="page-scroll">Who I Am</a></li>
        <li><a href="#services" class="page-scroll">What I Do</a></li>
        <li><a href="#works" class="page-scroll">Selected Work</a></li>
        <!-- <li><a href="#about-us" class="page-scroll">About</a></li> -->
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
      <!--- End Menu -->
    </div>
    <!--- End Off Canvas Side Menu -->
    <!-- Home Section -->
    <div id="home">
      <div class="container text-center">
        <!-- Navigation -->
        <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
          <span class="fa fa-bars"></span>
        </nav>
        <div class="content">
          <h1>Isaac Bell</h1>
          <hr>
          <div class="header-text btn">
            <?php
            if (isset($_GET['success'])) {
            echo '<h1>Message Sent!</h1>';
            }
            else {
            echo '<h1>Digital Consultant</h1>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Meet Us Section -->
    <div id="meet-us">
      <!-- Shoutouts to Rob Sawyer for the button CSS -->
      <!-- http://www.robsawyer.me/blog/2013/09/17/scroll-indicator/ -->
      <a class="arrow-wrap page-scroll" href="#meet-us">
        <span class="arrow"></span>
      </a>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-8 col-md-offset-2">
            <div class="section-title">
              <h2>Who I Am</h2>
              <hr>
            </div>
          <blockquote>An artist is not paid for his labor, but for his vision. – James Whistler</blockquote>
          <p class="text-justify">I'm a full-stack digital marketer and full-stack developer. I make digital marketing campaigns by building apps, websites, SEO optimizations, and more. My goal is boosting conversion rates, creating business leads, and creating digital customer bases for my clients. I mainly work with medium-to-large business clients in Georgia and Alabama. I keep a team of business specialists as immediate contacts, which means that I can scale to fit the needs of big projects without my clients ever having to pay for any services they don't need.</p>
          <br><br>
          <h2>
          Got a question? Get in touch!
          <a href="#contact" class="down-btn page-scroll">
            <span class="fa fa-angle-down"></span>
          </a>
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div id="overview-video">
    <div class="overlay">
      <div class="container">
      </div>
    </div>
  </div>
  <!-- Services Section -->
  <div id="services">
    <!-- Shoutouts to Rob Sawyer for the button CSS -->
    <!-- http://www.robsawyer.me/blog/2013/09/17/scroll-indicator/ -->
    <a class="arrow-wrap page-scroll" href="#services">
      <span class="arrow"></span>
    </a>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="section-title">
            <h2>What I Do</h2>
            <hr>
          </div>
          <p></p>
        </div>
      </div>
      <div class="space"></div>
      <div class="row hidden-sm hidden-xs visible-md visible-lg visible-xl">
        <div class="srv-block">
          <div class="srv-block1">
            <h4 class="colored">Creative</h4>
            <p class="italic">Graphic Design | Web Design | Sound Design | Original Scores | Re-scores </p>
            <div class="quartercircletopleft"></div>
          </div>
          <!-- srv-block1 -->
          <div class="srv-block2">
            <h4 class="colored">Technical</h4>
            <p class="italic">Front End | Back End (Rails, PHP, Coffee) | WebGL | Analytics | sass | vvvv | FBP </p>
            <div class="quartercircletopright"></div>
          </div>
          <!-- srv-block2 -->
          <div class="srv-block3">
            <h4 class="colored">Digital</h4>
            <p class="italic">Motion Graphics | Audio Engineering | Mudbox | Maya | Blender | Unreal Engine</p>
            <div class="quartercirclebottomleft"></div>
          </div>
          <!-- srv-block3 -->
          <div class="srv-block4">
            <h4 class="colored">Strategic</h4>
            <p class="italic">Branding | Identity | Business Insights | Content | Concepting | Analytics | Reporting</p>
            <div class="quartercirclebottomright"></div>
          </div>
          <!-- srv-block4 -->
        </div>
      </div>
      <div class="row hidden-md hidden-lg hidden-xl visible-sm visible-xs">
        <div class="col-lg-4">
          <img src="img/icons/tablet.png" alt="">
          <h2>Creative</h2>
          <p class="italic">Graphic Design | Web Design | Sound Design | Original Scores | Re-scores </p>
        </div>
        <div class="col-lg-4">
          <img src="img/icons/macbook.png" alt="">
          <h2>Technical</h2>
          <p class="italic">Front End | Back End (Rails, PHP, Coffee) | WebGL | Analytics | sass | vvvv | FBP </p>
        </div>
        <div class="col-lg-4">
          <img src="img/icons/dslr.png" alt="">
          <h2>Digital</h2>
          <p class="italic">Motion Graphics | Audio Engineering | Mudbox | Maya | Blender | Unreal Engine</p>
        </div>
        <div class="col-lg-4">
          <img src="img/icons/mail.png" alt="">
          <h2>Strategic</h2>
          <p class="italic">Branding | Identity | Business Insights | Content | Concepting | Analytics | Reporting</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Call-to-Action Section -->
  <div id="cta">
    <div class="container text-center">
      <a href="#contact" class="page-scroll btn go-to-btn">Request a Proposal</a>
    </div>
  </div>
  <!-- Portfolio Section -->
  <div id="works">
    <a class="arrow-wrap page-scroll" href="#works">
      <span class="arrow"></span>
    </a>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-8 col-md-offset-2">
          <div class="section-title">
            <h2>Selected Work</h2>
            <hr>
          </div>
          <p></p>
        </div>
      </div>
      <div class="space"></div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6 nopadding">
          <div class="portfolio-item">
            <div class="hover-bg">
              <a id="modalpointer-01" href="#modal-01">
                <div class="hover-text">
                  <h5>Front End</h5>
                  <p class="lead">Advantage</p>
                  <div class="hline"></div>
                </div>
                <img src="img/portfolio/advantage/3.jpg" class="img-responsive" alt="...">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 nopadding">
          <div class="portfolio-item">
            <div class="hover-bg">
              <a id="modalpointer-02" href="#modal-02">
                <div class="hover-text">
                  <h5>Back End + Consulting</h5>
                  <p class="lead">University of Alabama Business School</p>
                  <div class="hline"></div>
                </div>
                <img src="img/portfolio/ua/1.jpg" class="img-responsive" alt="...">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 nopadding">
          <div class="portfolio-item">
            <div class="hover-bg">
              <a id="modalpointer-03" href="#modal-03">
                <div class="hover-text">
                  <h5>Full Service</h5>
                  <p class="lead">Alabama License Law</p>
                  <div class="hline"></div>
                </div>
              </a>
              <img src="img/portfolio/license-law/1.jpg" class="img-responsive" alt="...">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 nopadding">
          <div class="portfolio-item">
            <div class="hover-bg">
              <a id="modalpointer-04" href="#modal-04">
                <div class="hover-text">
                  <h5>Design + Front End</h5>
                  <p class="lead">Alabama Real Estate Comission</p>
                  <div class="hline"></div>
                </div>
              </a>
              <img src="img/portfolio/arec/3.jpg" class="img-responsive" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Section -->
  <div id="contact">
    <div class="container">
      <div class="section-title text-center">
        <h2>Contact Me</h2>
        <hr>
      </div>
      <div class="space"></div>
      <div class="row">
        <div class="col-md-12">
          <form id="contact-form" action="mailer.php" method="post" autocomplete="off">
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
                <input type="tel" class="form-control" name="phone" placeholder="Phone (Optional)">
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <input type="text" class="form-control" name="budget" placeholder="Budget (If Applicable)">
              </div>
            </div>
            <textarea class="form-control" rows="4" name="message" placeholder="Message" required></textarea>
            <div class="text-left" style="float:left;">
              <p id="form-messages"></p>
            </div>
            <div class="text-right">
              <a id="send" class="btn send-btn">Send</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <nav id="footer">
    <div class="container">
      <div class="pull-left">
        <p>2015 © Isaac Bell. Some Rights Reserved. </p>
      </div>
      <div class="pull-right">
        <a href="#home" class="page-scroll"><span class="fa fa-angle-up"></span></a>
      </div>
    </div>
  </nav>
  <div id="modal-01" class="modal-page hide-modal-page">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div id="closebt-container" class="close-modal-01">
      <!-- CLOSE MODAL -->
      <img class="closebt" src="img/closebt.svg">
    </div>
    <div class="modal-content" style="border: 1px solid rgba(255, 255, 255, .2);">
      <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
        <div id="carousel-01" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-01" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-01" data-slide-to="1"></li>
            <li data-target="#carousel-01" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/portfolio/advantage/3.jpg" alt="Advantage">
              <div class="carousel-caption">
                Homepage
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/advantage/2.jpg" alt="Advantage">
              <div class="carousel-caption">
                News
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/advantage/1.jpg" alt="Advantage">
              <div class="carousel-caption">
                Property Search
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/advantage/4.jpg" alt="Advantage">
              <div class="carousel-caption">
                Listings
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-01" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-01" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <p class="text-center text-white">Prototyped in Expression Engine. Final product made using Rails.</p>
      </div>
    </div>
  </div>
  <div id="modal-02" class="modal-page hide-modal-page">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div id="closebt-container" class="close-modal-02">
      <!-- CLOSE MODAL -->
      <img class="closebt" src="img/closebt.svg">
    </div>
    <div class="modal-content" style="border: 1px solid rgba(255, 255, 255, .2);">
      <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
        <div id="carousel-02" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-02" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-02" data-slide-to="1"></li>
            <li data-target="#carousel-02" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/portfolio/ua/1.jpg" alt="University of Alabama">
              <div class="carousel-caption">
                Homepage
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/ua/2.jpg" alt="University of Alabama">
              <div class="carousel-caption">
                Subpage
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/ua/3.jpg" alt="University of Alabama">
              <div class="carousel-caption">
                Information Request
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/ua/4.jpg" alt="University of Alabama">
              <div class="carousel-caption">
                Events
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-02" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-02" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <p class="text-center text-white">Provided consulting on front end, back end, and design needs. Personally worked on the back end.</p>
      </div>
    </div>
  </div>
  <div id="modal-03" class="modal-page hide-modal-page">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div id="closebt-container" class="close-modal-03">
      <!-- CLOSE MODAL -->
      <img class="closebt" src="img/closebt.svg">
    </div>
    <div class="modal-content" style="border: 1px solid rgba(255, 255, 255, .2);">
      <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
        <div id="carousel-03" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-03" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-03" data-slide-to="1"></li>
            <li data-target="#carousel-03" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/portfolio/license-law/1.jpg" alt="License-law">
              <div class="carousel-caption">
                Homepage
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/license-law/2.jpg" alt="License-law">
              <div class="carousel-caption">
                Law
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/license-law/3.jpg" alt="License-law">
              <div class="carousel-caption">
                Registration Form
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/license-law/4.jpg" alt="License-law">
              <div class="carousel-caption">
                Dim Lighting
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-03" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-03" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <p class="text-center text-white">HTML 5, CSS 3, responsive functionality.</p>
      </div>
    </div>
  </div>
  <div id="modal-04" class="modal-page hide-modal-page">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div id="closebt-container" class="close-modal-04">
      <!-- CLOSE MODAL -->
      <img class="closebt" src="img/closebt.svg">
    </div>
    <div class="modal-content" style="border: 1px solid rgba(255, 255, 255, .2);">
      <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">
        <div id="carousel-04" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-04" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-04" data-slide-to="1"></li>
            <li data-target="#carousel-04" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/portfolio/arec/1.jpg" alt="AREC">
              <div class="carousel-caption">
                Homepage
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/arec/2.jpg" alt="AREC">
              <div class="carousel-caption">
                Subpage
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/arec/3.jpg" alt="AREC">
              <div class="carousel-caption">
                Newsletter
              </div>
            </div>
            <div class="item">
              <img src="img/portfolio/arec/4.jpg" alt="AREC">
              <div class="carousel-caption">
                Calendar
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-04" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-04" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <p class="text-center text-white">Subcontractor work: designed and coded sub-pages.</p>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/animatedModal.min.js"></script>
  <script type="text/javascript" src="http://andywer.github.io/jquery-dim-background/jquery.dim-background.min.js"></script>
  
  <script>
  $(function() {
  $("#modalpointer-01").animatedModal({
  modalTarget: 'modal-01',
  animatedIn: 'bounceInUp',
  animatedOut: 'bounceOut',
  animationDuration: '1',
  color: 'none',
  overflow: 'auto',
  beforeOpen: function() {
  $('.modal-page').dimBackground({darkness: 0.8});
  },
  afterOpen: function() {
  $('this').addClass('active');
  },
  beforeClose: function () {
  $('this').removeClass('active');
  $.undim();
  }
  });
  $("#modalpointer-02").animatedModal({
  modalTarget: 'modal-02',
  animatedIn: 'bounceInUp',
  animatedOut: 'bounceOut',
  animationDuration: '1',
  color: 'none',
  overflow: 'auto',
  beforeOpen: function() {
  $('.modal-page').dimBackground({darkness: 0.8});
  },
  afterOpen: function() {
  $('this').addClass('active');
  },
  beforeClose: function () {
  $('this').removeClass('active');
  $.undim();
  }
  });
  $("#modalpointer-03").animatedModal({
  modalTarget: 'modal-03',
  animatedIn: 'bounceInUp',
  animatedOut: 'bounceOut',
  animationDuration: '1',
  color: 'none',
  overflow: 'auto',
  beforeOpen: function() {
  $('.modal-page').dimBackground({darkness: 0.8});
  },
  afterOpen: function() {
  $('this').addClass('active');
  },
  beforeClose: function () {
  $('this').removeClass('active');
  $.undim();
  }
  });
  $("#modalpointer-04").animatedModal({
  modalTarget: 'modal-04',
  animatedIn: 'bounceInUp',
  animatedOut: 'bounceOut',
  animationDuration: '1',
  color: 'none',
  overflow: 'auto',
  beforeOpen: function() {
  $('.modal-page').dimBackground({darkness: 0.8});
  },
  afterOpen: function() {
  $('this').addClass('active');
  },
  beforeClose: function () {
  $('this').removeClass('active');
  $.undim();
  }
  });
  })
  </script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script>
  $(function() {
  $('.carousel').carousel();
  });
  </script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/canvas.js"></script>
</body>
</html>