$(document).ready(function() {

  /**
   * Modal backdrop
   */

  $(".modal-fullscreen").on('show.bs.modal', function() {
    setTimeout(function() {
      $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    }, 0);
  });

  $(".modal-fullscreen").on('hidden.bs.modal', function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  });

  /**
   * Form submission
   */

  $('#send').click(function(event) {
    var form = $('#contact-form');
    form.submit();
  })

  $(function() {
    var form = $('#contact-form');
    var formMessages = $('#form-messages');

    $(form).submit(function(event) {
      if ($("input[name=name]").val() == '') {
        event.preventDefault();
        $(formMessages).text('Please fill out all fields.');
        $("input[name=name]").focus();
        return false;
      }
      if ($("input[name=email]").val() == '') {
        event.preventDefault();
        $(formMessages).text('Please fill out all fields.');
        $("input[name=email]").focus();
        return false;
      }
      if ($("textarea[name=message]").val() == '') {
        event.preventDefault();
        $(formMessages).text('Please fill out all fields.');
        $("textarea[name=message]").focus();
        return false;
      }

      var formData = $(form).serialize();
      $(form)[0].submit();
    });
  });
});
