<form action="{{ get_template_directory_uri() }}/mailer/wp-mailer.php" class="form contact-form__form"
  form-name="Contact Form">
  <div class="form__wrapper">
    {{-- <h2 class="form__title">Get in touch!</h2> --}}
    <div class="form__group form__group--half">
      <div class="form__half">
        <label for="full-name" class="form__label">Name and surname</label>
        <input type="text" placeholder="Your name and surname" name="full-name"
          class="input input--text input--required" required>
      </div>
      <div class="form__half">
        <label for="email" class="form__label">Email address</label>
        <input type="email" placeholder="Your email address" name="email" class="input input--email input--required"
          required>
      </div>
    </div>
    <div class="form__group">
      <label for="message" class="form__label">Your Message</label>
      <textarea name="message" placeholder="Your message" rows="8" cols="80" class="input input--textarea"></textarea>
    </div>

    <label for="showMore" class="showMoreooo">
      <input type="checkbox" id="showMoreooo" name="schedule-a-visit">
      <span>Would you like to tell us more about your needs?</span>
    </label>


    <div class="showMore__contentooo">
      <div class="form__wrapper">
        <h2 class="form__title">Tell us about yourself</h2>
        <div class="form__group form__group--half">
          <div class="form__half">
            <label for="address" class="form__label">Full Address</label>
            <input type="text" placeholder="Your full address" name="address" class="input input--text">
          </div>
          <div class="form__half">
            <label for="contact-phone" class="form__label">Contact Phone</label>
            <input type="tel" placeholder="613-555-01x84" name="contact-phone" class="input input--tel">
          </div>
        </div>
      </div>

      <div class="form__wrapper">
        <h2 class="form__title">Tell us about your child</h2>
        <div class="form__children">
          <div class="form__child form__child--first">

            <div class="form__group form__group--half">
              <div class="form__half">
                <label for="child-name" class="form__label">Your child's name</label>
                <input type="text" placeholder="Your child's name" name="child-name"
                  class="input input--text input--required">
              </div>
              <div class="form__half">
                <label for="child-birthday" class="form__label">Your child's birthday</label>
                <input type="text" placeholder="Your child's birthday" name="child-birthday"
                  class="input input--birthday input--arrow">
              </div>
            </div>
            <div class="form__group form__group--half">
              <div class="form__half">
                <label for="child-start-date" class="form__label">Preffered start date</label>
                <input type="text" placeholder="Select preffered starting date" name="child-start-date"
                  class="input input--date input--arrow">
              </div>
            </div>

            <div class="form__group">
              <label for="additionalInformation" class="form__label">Which program are you interested in?</label>
              <div class="form__checkboxes">
                <label for="youngToddlers" class="checkbox">
                  <input type="checkbox" value="Young Toddlers" name="intrested-in" id="youngToddlers">
                  <div class="checkbox__control">
                    Young Toddlers
                  </div>
                </label>
                <label for="juniorPreschool" class="checkbox">
                  <input type="checkbox" value="Junior Preschool" name="intrested-in" id="juniorPreschool">
                  <div class="checkbox__control">
                    Junior Preschool
                  </div>
                </label>
                <label for="seniorPreschool" class="checkbox">
                  <input type="checkbox" value="Senior Preschool" name="intrested-in" id="seniorPreschool">
                  <div class="checkbox__control">
                    Senior Preschool
                  </div>
                </label>
                <label for="nurserySchool" class="checkbox">
                  <input type="checkbox" value="Nursery School Program" name="intrested-in" id="nurserySchool">
                  <div class="checkbox__control">
                    Nursery School Program
                  </div>
                </label>
                <label for="summerhillCampPrograms" class="checkbox">
                  <input type="checkbox" value="Summerhill Camp Programs" name="intrested-in"
                    id="summerhillCampPrograms">
                  <div class="checkbox__control">
                    Summerhill Camp Programs
                  </div>
                </label>
                <label for="beforeAfter" class="checkbox">
                  <input type="checkbox" value="Before & After School Program" name="intrested-in" id="beforeAfter">
                  <div class="checkbox__control">
                    Before & After School Program
                  </div>
                </label>
                <label for="notSure" class="checkbox">
                  <input type="checkbox" value="Not Sure" name="intrested-in" id="notSure">
                  <div class="checkbox__control">
                    Not sure
                  </div>
                </label>
              </div>
            </div>

          </div>
        </div>

        <div class="form__group">
          <div class="form__button text-center">
            <button class="btn btn--dark">Add another child</button>
          </div>
        </div>
      </div>

      <!-- <div class="form__wrapper">
                  <h2 class="form__title">Schedule your visit</h2>
                  <div class="form__group form__group--half">
                    <div class="form__half">
                      <label for="visit-preffered-date" class="form__label">Your preffered visit date</label>
                      <input type="text" placeholder="Select preffered visit date" name="visit-preffered-date" class="input input--visit input--arrow">
                    </div>
                    <div class="form__half">
                      <label for="visit-preffered-time" class="form__label">Your preffered visit time</label>
                      <input type="text" placeholder="Select preffered visit time" name="visit-preffered-time" class="input input--time input--arrow">
                    </div>
                  </div>
                </div> -->
    </div>

    <div class="form__button form__button--right">
      <button role="submit" class="btn ">Send message</button>
    </div>
  </div>
</form>








// /* eslint-disable */

// var droppedFiles = false;

// if (jQuery.contains(document, $('.upload')[0])) {
// var $upload = $('.upload');
// var $input = $upload.find('input[type="file"]');

// $upload
// .on(
// 'drag dragstart dragend dragover dragenter dragleave drop',
// function (e) {
// e.preventDefault();
// e.stopPropagation();
// }
// )
// .on('dragover dragenter', function () {
// $(this).addClass('upload--is-dragover');
// })
// .on('dragleave dragend drop', function () {
// $(this).removeClass('upload--is-dragover');
// })
// .on('drop', function (e) {
// droppedFiles = e.originalEvent.dataTransfer.files;
// var $form = $(this);
// $(this).find('.upload__success span').html(droppedFiles[0].name);
// $(this).addClass('upload--is-uploaded');
// $(this)
// .find('.upload__content')
// .fadeOut(function () {
// $form.find('.upload__message').fadeIn();
// });
// });

// $input.on('change', function (e) {
// droppedFiles = e.target.files;
// $form = $input.parents().find('.upload');
// $form.find('.upload__success span').html(droppedFiles[0].name);
// $form.addClass('upload--is-uploaded');
// $form.find('.upload__content').fadeOut(function () {
// $form.find('.upload__message').fadeIn();
// });
// });
// }

// if (jQuery.contains(document, $('.form__message')[0])) {
// $('.form__message').fadeOut();
// }

// $(document).on('submit', 'form', function (e) {
// e.preventDefault();
// handleFormSubmit($(this));
// });

// var formData = [];
// var formURL;
// var attachement;

// if (droppedFiles) {
// attachement = droppedFiles;
// }

// function handleFormSubmit(form) {
// if (form.dataset.status !== 'invalid') {
// $('.form__message').fadeIn().addClass('form__message--active');
// }
// var formName = form.attr('form-name');
// formURL = form.attr('action');
// var $input = form.find('input');
// var $textarea = form.find('textarea');
// var $select = form.find('select');

// formData.push(formName);

// $input.each(function () {
// if ($(this).attr('type') == 'file') {
// attachement = $(this)[0].files[0];
// if (droppedFiles) {
// attachement = droppedFiles;
// }
// } else {
// getFieldData($(this));
// }
// });

// $textarea.each(function () {
// getFieldData($(this));
// });

// $select.each(function () {
// getFieldData($(this));
// });

// sendEmail(formData, attachement, form);
// }

// function getFieldData(field) {
// if (field.attr('type') == 'checkbox') {
// if (field.is(':checked')) {
// var name = returnFieldName(field);
// var value = field.val();
// var newData = {
// name: name,
// value: value,
// };
// formData.push(newData);
// }
// } else {
// var name = returnFieldName(field);
// if (name !== false) {
// var value = field.val();
// var newData = {
// name: name,
// value: value,
// };
// formData.push(newData);
// }
// }
// }

// function returnFieldName(el) {
// if (el.attr('name')) {
// return el
// .attr('name')
// .replace('-', ' ')
// .replace(/\b\w/g, function (l) {
// return l.toUpperCase();
// });
// } else {
// return false;
// }
// }

// function sendEmail(data, file, form) {
// var formDataData = new FormData(form[0]);
// formDataData.append('content', JSON.stringify(data));
// $.ajax({
// type: 'POST',
// url: formURL,
// processData: false,
// contentType: false,
// data: formDataData,
// cache: false,
// complete: function (res) {
// console.log(res);
// if (res.status == 200) {
// finishSendingEmail(
// "<h2>Thank you for contacting Summerhill!</h2>
<p>We'll get back to you as soon as possible!</p>",
// form
// );
// } else {
// finishSendingEmail(
// "<h2>Something went wrong..</h2>
<p>Unfortunatelly we haven't received your message. Please try again later.</p>",
// form
// );
// }
// },
// });
// }

// function finishSendingEmail(html, form) {
// form.find('.form__message__content').html(html);
// form.find('.form__message__loader').fadeOut(function () {
// form.find('.form__message__content').fadeIn();
// });

// if (form.parents('.form-addon').length) {
// setTimeout(function () {
// $('.form-addon__form').removeClass('form-addon__form--active');
// setTimeout(function () {
// $('.form-addon__button').addClass('form-addon__button--active');
// form.find('input, textarea').val('');
// form
// .find('.form__message')
// .fadeOut()
// .removeClass('form__message--active');
// }, 300);
// }, 2000);
// }
// }