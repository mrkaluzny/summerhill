/* eslint-disable */

var droppedFiles = false;

if (jQuery.contains(document, $('.upload')[0])) {
  var $upload = $('.upload');
  var $input = $upload.find('input[type="file"]');

  $upload
    .on(
      'drag dragstart dragend dragover dragenter dragleave drop',
      function (e) {
        e.preventDefault();
        e.stopPropagation();
      }
    )
    .on('dragover dragenter', function () {
      $(this).addClass('upload--is-dragover');
    })
    .on('dragleave dragend drop', function () {
      $(this).removeClass('upload--is-dragover');
    })
    .on('drop', function (e) {
      droppedFiles = e.originalEvent.dataTransfer.files;
      var $form = $(this);
      $(this).find('.upload__success span').html(droppedFiles[0].name);
      $(this).addClass('upload--is-uploaded');
      $(this)
        .find('.upload__content')
        .fadeOut(function () {
          $form.find('.upload__message').fadeIn();
        });
    });

  $input.on('change', function (e) {
    droppedFiles = e.target.files;
    $form = $input.parents().find('.upload');
    $form.find('.upload__success span').html(droppedFiles[0].name);
    $form.addClass('upload--is-uploaded');
    $form.find('.upload__content').fadeOut(function () {
      $form.find('.upload__message').fadeIn();
    });
  });
}

if (jQuery.contains(document, $('.form__message')[0])) {
  $('.form__message').fadeOut();
}

$(document).on('submit', 'form', function (e) {
  e.preventDefault();
  handleFormSubmit($(this));
});

var formData = [];
var formURL;
var attachement;

if (droppedFiles) {
  attachement = droppedFiles;
}

function handleFormSubmit(form) {
  $('.form__message').fadeIn().addClass('form__message--active');
  var formName = form.attr('form-name');
  formURL = form.attr('action');
  var $input = form.find('input');
  var $textarea = form.find('textarea');
  var $select = form.find('select');

  formData.push(formName);

  $input.each(function () {
    if ($(this).attr('type') == 'file') {
      attachement = $(this)[0].files[0];
      if (droppedFiles) {
        attachement = droppedFiles;
      }
    } else {
      getFieldData($(this));
    }
  });

  $textarea.each(function () {
    getFieldData($(this));
  });

  $select.each(function () {
    getFieldData($(this));
  });

  sendEmail(formData, attachement, form);
}

function getFieldData(field) {
  if (field.attr('type') == 'checkbox') {
    if (field.is(':checked')) {
      var name = returnFieldName(field);
      var value = field.val();
      var newData = {
        name: name,
        value: value,
      };
      formData.push(newData);
    }
  } else {
    var name = returnFieldName(field);
    if (name !== false) {
      var value = field.val();
      var newData = {
        name: name,
        value: value,
      };
      formData.push(newData);
    }
  }
}

function returnFieldName(el) {
  if (el.attr('name')) {
    return el
      .attr('name')
      .replace('-', ' ')
      .replace(/\b\w/g, function (l) {
        return l.toUpperCase();
      });
  } else {
    return false;
  }
}

function sendEmail(data, file, form) {
  var formDataData = new FormData(form[0]);
  formDataData.append('content', JSON.stringify(data));
  $.ajax({
    type: 'POST',
    url: formURL,
    processData: false,
    contentType: false,
    data: formDataData,
    cache: false,
    complete: function (res) {
      console.log(res);
      if (res.status == 200) {
        finishSendingEmail(
          "<h2>Thank you for contacting Summerhill!</h2><p>We'll get back to you as soon as possible!</p>",
          form
        );
      } else {
        finishSendingEmail(
          "<h2>Something went wrong..</h2><p>Unfortunatelly we haven't received your message. Please try again later.</p>",
          form
        );
      }
    },
  });
}

function finishSendingEmail(html, form) {
  $('.form__message__content').html(html);
  $('.form__message__loader').fadeOut(function () {
    $('.form__message__content').fadeIn();
  });

  if (form.parents('.form-addon').length) {
    setTimeout(function () {
      $('.form-addon__form').removeClass('form-addon__form--active');
      setTimeout(function () {
        $('.form-addon__button').addClass('form-addon__button--active');
        $('input, textarea').val('');
        $('.form__message').fadeOut().removeClass('form__message--active');
      }, 300);
    }, 2000);
  }
}
