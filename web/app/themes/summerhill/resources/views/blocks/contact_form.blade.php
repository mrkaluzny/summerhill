<section class="contact-form">
  <div class="container">
    <form action="{{ get_template_directory_uri() }}/mailer/wp-mailer.php" class="form contact-form__form"
      form-name="Contact Form">
      @include('components.FormMessage')
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
          <textarea name="message" placeholder="Your message" rows="8" cols="80"
            class="input input--textarea"></textarea>
        </div>

        <label for="showMore" class="showMore">
          <input type="checkbox" id="showMore" name="schedule-a-visit">
          <span>Would you like to tell us more about your needs?</span>
        </label>


        <div class="showMore__content">
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

  </div>
</section>
