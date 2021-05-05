<div class="form-addon">
  <button class="form-addon__button">
    <span class="form-addon__button__icon"></span>
  </button>
  <div class="form-addon__form">
    <header class="form-addon__header">
      <h2 class="form-addon__header__title">{{ the_field('instamessage_title', 'option') }}</h2>
      @include('icons.chevron')
    </header>
    <div class="form-addon__content">
      <form action="{{ get_template_directory_uri() }}/mailer/wp-mailer.php" class="form form-addon__formfield"
        form-name="Form Addon">
        @include('components.FormMessage')
        <p>{{ the_field('instamessage_content', 'option') }}</p>
        <div class="form__group">
          <label for="full-name" class="form__label">Name and surname</label>
          <input type="text" name="full-name" placeholder="Your name and surname"
            class="input input--text input--required" required>
        </div>
        <div class="form__group">
          <label for="email" class="form__label">Email address</label>
          <input type="email" name="email" placeholder="Your email address" class="input input--email input--required"
            required>
        </div>
        <div class="form__group">
          <label for="message" class="form__label">Your Message</label>
          <textarea name="message" rows="8" cols="80" placeholder="Your message"
            class="input input--textarea"></textarea>
        </div>

        <div class="form__button">
          <button role="submit" class="btn btn--primary">Send message</button>
        </div>
      </form>
    </div>
  </div>
</div>
