<template>
    <!-- subscribe bar -->
    <section class="bg-gradient text-white pb-0 o-hidden">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Stay right up to date</h3>
            <div class="lead">Get great content to your inbox every week. No spam.</div>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <form data-form-email novalidate action="/forms/mailchimp.php">
              <div class="d-flex flex-column flex-sm-row form-group">
                <input class="form-control form-control-lg mr-sm-2 mb-2 mb-sm-0 h-100" name="email" placeholder="Email Address" type="email" required>
                <button class="btn btn-lg btn-primary btn-loading" type="submit" data-loading-text="Sending">
                  <!-- Icon for loading animation -->
                  <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Icon For Loading</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g>
                        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                      </g>
                      <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                      fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                    </g>
                  </svg>
                  <span>Subscribe</span>
                </button>
              </div>
              <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE" data-size="invisible" data-badge="bottomleft"></div>
              <div class="d-none alert alert-success w-100" role="alert" data-success-message>
                Thanks, a member of our team will be in touch shortly.
              </div>
              <div class="d-none alert alert-danger w-100" role="alert" data-error-message>
                Please fill all fields correctly.
              </div>
              <div class="text-muted">Only great content, we don’t share your email with third parties.</div>
            </form>
          </div>
        </div>
      </div>
      <div class="h-75 w-50 position-absolute bottom left" data-jarallax-element="-60">
        <div class="blob bottom left w-100 h-100 bg-white opacity-10"></div>
      </div>
      <div class="divider divider-bottom bg-primary-3"></div>
    </section>
</template>

<script>
export default {

}
</script>

<style>

</style>