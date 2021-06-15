const form = document.querySelector('.wpcf7-form');

function finishSendingEmail(html) {
  $('.form__message__content').html(html);
  $('.form__message__loader').fadeOut(function () {
    $('.form__message__content').fadeIn();
  });
}

if (form) {
  form.addEventListener(
    'wpcf7submit',
    function (ev) {
      if (ev.target.dataset.status !== 'invalid') {
        $('.form__message').fadeIn().addClass('form__message--active');
      }
    },
    false
  );

  form.addEventListener(
    'wpcf7mailsent',
    function () {
      setTimeout(() => {
        finishSendingEmail(
          '<h2>Thank you for contacting Summerhill!</h2><p>We will get back to you as soon as possible!</p>'
        );
      }, 1000);
    },
    false
  );

  form.addEventListener(
    'wpcf7mailfailed',
    function () {
      setTimeout(() => {
        finishSendingEmail(
          '<h2>Something went wrong..</h2><p>Unfortunatelly we have not received your message. Please try again later.</p>'
        );
      }, 1000);
    },
    false
  );
}
