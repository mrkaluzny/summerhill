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

const getCharacter = (string, charFromEnd) => {
  return string[string.length - charFromEnd];
};

let childrens = 0;

const incrementedLastChar = (string) => +string[string.length - 1] + 1;

const addButton = (buttonPane, input) => {
  buttonPane
    .find('button:nth-child(2)')
    .text('Clear')
    .unbind('click')
    .bind('click', function () {
      $.datepicker._clearDate(input);
      $.datepicker._showDatepicker(input);
    });

  var btn = $(
    '<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Close</button>'
  );
  btn.unbind('click').bind('click', function () {
    // $.datepicker._clearDate(input);

    $.datepicker._hideDatepicker();
  });

  btn.appendTo(buttonPane);
};

const addCalendars = (formClone = $('body')) => {
  formClone
    .find('.childBirthday, .childStartDate')
    .removeClass('hasDatepicker')
    .removeAttr('id')
    .attr('autocomplete', 'negative')
    .datepicker({
      changeMonth: true,
      changeYear: true,
      showButtonPanel: true,
      onChangeMonthYear: function (year, month, input) {
        setTimeout(() => {
          var buttonPane = $(input)
            .datepicker('widget')
            .find('.ui-datepicker-buttonpane');

          addButton(buttonPane, input);
        }, 1);
      },
      beforeShow: function (input) {
        setTimeout(function () {
          var buttonPane = $(input)
            .datepicker('widget')
            .find('.ui-datepicker-buttonpane');

          buttonPane
            .find('button:first-of-type')
            .text('Today')
            .bind('click', function () {
              $.datepicker._hideDatepicker();
              $.datepicker._setDateDatepicker(input, new Date());
            });

          addButton(buttonPane, input);
        }, 1);
      },
    });
};
const updateLabel = (formClone, name) => {
  const lastChildName = $(name).last().attr('name');

  formClone
    .find(name)
    .attr(
      'name',
      +getCharacter(lastChildName, 1)
        ? lastChildName.slice(0, -1) + incrementedLastChar(lastChildName)
        : lastChildName + '-1'
    );
};

const updateLastPrograms = (formClone) => {
  childrens = childrens + 1;

  formClone
    .find('.form__checkboxes')
    .last()
    .find('input[type="checkbox"]')
    .each((id, el) => {
      el.setAttribute('name', `intrested-in-${childrens}[]`);
    });
};

$('#addChild').on('click', function (e) {
  e.preventDefault();
  const clone = $('.form__children').first().clone();
  updateLabel(clone, '.childName');
  updateLabel(clone, '.childBirthday');
  updateLabel(clone, '.childStartDate');
  addCalendars(clone);
  updateLastPrograms(clone);
  clone.appendTo('#childrenWrapper');
});
addCalendars();

$(window).resize(function () {
  var field = $(document.activeElement);
  if (field.is('.hasDatepicker')) {
    field.datepicker('hide');
  }
});
