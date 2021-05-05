export default function initFormAddon() {
  var isFormAddonActive = false;
  $(window).scroll(function () {
    var doc = document.documentElement;
    var top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);

    if (top > 500 && !isFormAddonActive) {
      isFormAddonActive = true;
      $('.form-addon__button').addClass('form-addon__button--active');
    }
  });

  $('.form-addon__button').on('click', function (e) {
    e.preventDefault();
    handleFormAddonOpen($(this));
  });

  $('.form-addon__header').on('click', function () {
    handleFormAddonClose();
  });
}

function handleFormAddonOpen($button) {
  $button.removeClass('form-addon__button--active');
  setTimeout(function () {
    $('.form-addon__form').addClass('form-addon__form--active');
  }, 300);
}

function handleFormAddonClose() {
  $('.form-addon__form').removeClass('form-addon__form--active');
  setTimeout(function () {
    $('.form-addon__button').addClass('form-addon__button--active');
  }, 300);
}
