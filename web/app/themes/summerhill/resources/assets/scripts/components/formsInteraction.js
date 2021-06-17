var ChildToAdd = 2;

$(document).on('click', '.button--child', function (e) {
  e.preventDefault();

  console.log('Adding child');

  $('.form__child--first')
    .clone()
    .removeClass('form__child--first')
    .addClass('form__child--' + ChildToAdd)
    .appendTo('.form__children')
    .slideDown()
    .find('input')
    .each(function () {
      $(this).val('').prop('checked', false);
      var newName = ChildToAdd + '-' + $(this).attr('name');
      $(this).attr('name', newName);
    });

  $('.form__child--' + ChildToAdd)
    .find('.checkbox')
    .each(function () {
      var newFor = ChildToAdd + $(this).attr('for');
      $(this).attr('for', newFor);
      $(this).find('input').attr('id', newFor);
    });
  initiatePicker();
  ChildToAdd++;
});

$(document).on('click', '.showMore', function () {
  if ($('#showMore').is(':checked')) {
    $('.showMore__content').slideDown();
  } else {
    $('.showMore__content').slideUp();
  }
});

function initiatePicker() {
  $('.input--date').pickadate();

  $('.input--birthday').pickadate({
    selectMonths: true,
    selectYears: true,
    max: true,
  });

  $('.input--visit').pickadate({
    min: true,
    disable: [1, 7],
  });

  $('.input--time').pickatime({
    clear: 'Clear',
    min: [8, 0],
    max: [15, 0],
    interval: 60,
  });
}
