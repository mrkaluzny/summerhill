var ChildToAdd = 2;
if (
  jQuery.contains(document, $('.input--date')[0]) ||
  jQuery.contains(document, $('.input--birthday')[0])
) {
  initiatePicker();
}

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
}
