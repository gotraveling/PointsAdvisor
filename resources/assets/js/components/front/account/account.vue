<template>
  <div>


    <section class="pb-5">
      <div class="container">
        <div class="row mb-5">
          <div class="col d-flex align-items-center">
            <div class="d-inline-block p-3 p-md-4 rounded-circle bg-primary-alt">
              <img src="assets/img/icons/theme/general/settings-1.svg" alt="Confirmation Icon" class="icon bg-primary" data-inject-svg="data-inject-svg">
            </div>
            <div class="ml-4">
              <h1 class="mb-2">Account Settings</h1>
              <div class="lead">Manage your profile, billing, and notification preferences.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing" role="tab" aria-controls="billing" aria-selected="false">Billing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false">Notifications</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <section class="bg-light tab-content pt-5">
      <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
        <div class="container">
          <div class="row mb-4 mb-lg-5">
            <div class="col">
              <div class="d-flex align-items-md-center">
                <img src="assets/img/avatars/male-3.jpg" alt="Avatar" class="avatar avatar-lg flex-shrink-0">
                <div class="ml-4">
                  <button class="btn btn-sm btn-primary">Upload Avatar</button>
                  <div class="text-small mt-3">For best results, use an image at least 256px by 256px in either .jpg or .png format</div>
                </div>
              </div>
              <hr class="mt-lg-5">
            </div>
          </div>
          <div class="row mb-4 mb-md-5 align-items-start">
            <div class="col-lg-4 order-lg-2 mb-4 mb-lg-0 sticky-lg-top pl-lg-5">
              <div class="alert alert-primary">Your information is always kept encrypted and can never be accessed by third parties.
                <a href="#">View our Privacy Policy</a>
              </div>
            </div>
            <div class="col-lg-8 border-lg-right pr-lg-5">
              <div class="row mb-lg-5">
                <div class="col">
                  <h3>Account Details</h3>
                </div>
              </div>
              <form>
                <div class="row form-row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="first-name">First Name</label>
                      <input type="text" class="form-control" id="first-name" value="Andrew">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="last-name">Last Name</label>
                      <input type="text" class="form-control" id="last-name" value="Smith">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id="username" class="form-control">
                  <small>This will be displayed on your public profile</small>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email" class="form-control">
                  <small>Used to log in to your account</small>
                </div>
                <button class="btn btn-primary" disabled="disabled" type="submit">Save changes</button>
              </form>
            </div>
          </div>
          <hr class="mb-4 mb-md-5">
          <div class="row mb-4 mb-md-5 align-items-start">
            <div class="col-lg-4 order-lg-2 mb-4 mb-lg-0 sticky-lg-top pl-lg-5">
              <div class="alert alert-primary">Some of this information will appear on your public profile. A detailed public profile helps users with similar professional interests and location to connect with you.
                <a href="#">View your Public Profile</a>
              </div>
            </div>
            <div class="col-lg-8 border-lg-right pr-lg-5">
              <div class="row mb-lg-5">
                <div class="col">
                  <h3>Profile Information</h3>
                </div>
              </div>
              <form>
                <div class="row form-row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" value="Melbourne">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <input type="text" class="form-control" id="country" value="Australia">
                    </div>
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="birthday">Birthday</label>
                      <input type="text" id="birthday" class="form-control" data-flatpickr="data-flatpickr" data-alt-input="true" placeholder="Select a date">
                      <small>This will never be made public</small>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="country">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="username">Twitter Handle</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="bio">Profile Text</label>
                  <textarea id="bio" rows="6" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" disabled="disabled" type="submit">Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
        <div class="container">
          <div class="row justify-content-between align-items-center mb-4 mb-md-5">
            <div class="col-auto">
              <h3 class="mb-sm-0">Payment Methods</h3>
            </div>
            <div class="col-auto">
              <button class="btn btn-success btn-sm">Add Payment Method</button>
            </div>
          </div>
        </div>
        <form class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3 mb-md-4">
              <div class="border rounded bg-white px-4 pb-4 pt-2">
                <div class="d-flex justify-content-between align-items-center mb-5">
                  <img src="assets/img/logos/payment/mastercard.svg" alt="Mastercard">
                  <div class="dropdown">
                    <button class="btn btn-sm btn-primary rounded-circle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="assets/img/icons/interface/icon-more-horizontal.svg" alt="More" class="icon bg-white" data-inject-svg="data-inject-svg">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                  <div>
                    <div class="h6 mb-2">•••• •••• •••• 3928</div>
                    <div class="text-muted">Jonathan Wilson</div>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="radio-1" name="radio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="radio-1"></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3 mb-md-4">
              <div class="border rounded bg-white px-4 pb-4 pt-2">
                <div class="d-flex justify-content-between align-items-center mb-5">
                  <img src="assets/img/logos/payment/visa.svg" alt="Via">
                  <div class="dropdown">
                    <button class="btn btn-sm btn-primary rounded-circle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="assets/img/icons/interface/icon-more-horizontal.svg" alt="More" class="icon bg-white" data-inject-svg="data-inject-svg">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                  <div>
                    <div class="h6 mb-2">•••• •••• •••• 9921</div>
                    <div class="text-muted">Jonathan Wilson</div>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="radio-2" name="radio" class="custom-control-input">
                    <label class="custom-control-label" for="radio-2"></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-3 mb-md-4">
              <div class="border rounded bg-white px-4 pb-4 pt-2">
                <div class="d-flex justify-content-between align-items-center mb-5">
                  <img src="assets/img/logos/payment/paypal.svg" alt="Paypal">
                  <div class="dropdown">
                    <button class="btn btn-sm btn-primary rounded-circle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="assets/img/icons/interface/icon-more-horizontal.svg" alt="More" class="icon bg-white" data-inject-svg="data-inject-svg">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                  <div>
                    <div class="h6 mb-2">jwilson@jumpstart.com</div>
                    <div class="text-muted">Jonathan Wilson</div>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="radio-3" name="radio" class="custom-control-input">
                    <label class="custom-control-label" for="radio-3"></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
        <div class="container">
          <div class="row mb-4 mb-md-5">
            <div class="col-auto">
              <h3>Preferences</h3>
              <div>When would you like to receive notification emails?</div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <form>
                <div class="custom-control custom-switch mb-4">
                  <input type="checkbox" class="custom-control-input" id="switch-1" checked>
                  <label class="custom-control-label" for="switch-1">When someone mentions me</label>
                </div>
                <div class="custom-control custom-switch mb-4">
                  <input type="checkbox" class="custom-control-input" id="switch-2">
                  <label class="custom-control-label" for="switch-2">When someone follows me</label>
                </div>
                <div class="custom-control custom-switch mb-4">
                  <input type="checkbox" class="custom-control-input" id="switch-3">
                  <label class="custom-control-label" for="switch-3">When shares my activirty</label>
                </div>
                <div class="custom-control custom-switch mb-4">
                  <input type="checkbox" class="custom-control-input" id="switch-4" checked>
                  <label class="custom-control-label" for="switch-4">When someone messages me</label>
                </div>
                <div class="custom-control custom-switch mb-4">
                  <input type="checkbox" class="custom-control-input" id="switch-5">
                  <label class="custom-control-label" for="switch-5">There is a sale or promotion</label>
                </div>
                <div class="mt-4 mt-md-5">
                  <button class="btn btn-sm btn-primary" disabled type="submit">Save Preferences</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <a href="#top" class="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img src="assets/img/icons/interface/icon-arrow-up.svg" alt="Icon" class="icon bg-white" data-inject-svg>
    </a>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>