if (jQuery.contains(document, $('.form__message')[0])) {
  $('.form__message').fadeOut();
}

$(document).on('submit', 'form', function (e) {
  e.preventDefault();
  console.log('Form submitted', $(this));
  let $formMessage = $(this).closest('.form-wrapper').find('.form__message');

  $(this).bind('wpcf7submit', function (e) {
    if (e.target.dataset.status !== 'invalid') {
      console.log('Submitted!');
      $formMessage.fadeIn().addClass('form__message--active');
    }
  });

  $(this).bind('wpcf7mailsent', function () {
    console.log('Send!');
    finishSendingEmail(
      '<h2>Thank you for contacting Summerhill!</h2><p>We will get back to you as soon as possible!</p>',
      $formMessage
    );
  });

  $(this).bind('wpcf7mailfailed', function () {
    console.log('Failed!');
    finishSendingEmail(
      '<h2>Something went wrong..</h2><p>Unfortunatelly we have not received your message. Please try again later.</p>',
      $formMessage
    );
  });
});

function finishSendingEmail(html, formMessage) {
  formMessage.find('.form__message__content').html(html);
  formMessage.find('.form__message__loader').fadeOut(function () {
    formMessage.find('.form__message__content').fadeIn();
  });

  if (formMessage.parents('.form-addon').length) {
    setTimeout(function () {
      $('.form-addon__form').removeClass('form-addon__form--active');
      setTimeout(function () {
        $('.form-addon__button').addClass('form-addon__button--active');
        formMessage.find('input, textarea').val('');
        formMessage
          .find('.form__message')
          .fadeOut()
          .removeClass('form__message--active');
      }, 300);
    }, 2000);
  }
}
