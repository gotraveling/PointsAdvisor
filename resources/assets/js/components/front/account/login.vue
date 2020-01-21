<template>
      <div data-overlay class="min-vh-100 bg-light d-flex flex-column justify-content-md-center">
      <section class="py-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6">
              <div class="card card-body shadow">
                <h1 class="h5 text-center">Sign In</h1>
                <form>
                  <div class="form-group">
                    <input type="email" v-model="credentials.email" class="form-control" name="sign-up-email" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="password" v-model="credentials.password" class="form-control" name="sign-up-password" placeholder="Password">
                    <div class="text-right text-small mt-2">
                      <a href="account-forgot-password.html">Forgot Password?</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox text-small">
                      <input type="checkbox" class="custom-control-input" id="sign-in-remember">
                      <label class="custom-control-label" for="sign-in-remember">Remember me next time</label>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="button" @click="login()">Sign In</button>
                </form>
              </div>
              <div class="text-center text-small mt-3">
                Don't have an account? <a href="/register">Sign up here</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            credentials:{
                email:'',
                login:''
            }
        }
    },

    methods: {
        login() {
            axios.post('/account/login', this.credentials)
            .then(response=>{
                window.location.href = "/";
            })
        }
    }

}
</script>

<style>

</style>