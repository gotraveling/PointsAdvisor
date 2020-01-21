<template>
     <div class="navbar-container" id="menu">
      <nav class="navbar navbar-expand-lg navbar-light scrolled changeBG" data-sticky="top" >
        <div class="container">
          <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="/">
            <div class="brand">POINTS ADVISOR</div>
          </a>
          <div class="d-flex align-items-center order-lg-3" v-if="accountdata.status == false">
            <a href="#" class="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Join the Club</a>
            <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" type="button">
              <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg src="assets/img/icons/interface/icon-menu.svg">
              <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg src="assets/img/icons/interface/icon-x.svg">
            </button>
          </div>
          <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
            <ul class="navbar-nav my-3 my-lg-0">
     
              <li class="nav-item">
                <div class="dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link nav-item arrow-bottom" data-toggle="dropdown-grid" href="#" role="button">Redeem Points</a>
                  <div class="row dropdown-menu">
                    <div class="col-auto" data-dropdown-content>
                      <div class="dropdown-grid-menu">
                        <a href="style-guide.html" class="dropdown-item fade-page">Redemptions Consultants</a>
                        <a href="navigation-bars.html" class="dropdown-item fade-page">Redemption Guides</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="nav-item">
                <div class="dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link nav-item arrow-bottom" data-toggle="dropdown-grid" href="#" role="button">Earn Points</a>
                  <div class="row dropdown-menu">
                    <div class="col-auto" data-dropdown-content>
                      <div class="dropdown-grid-menu">
                        <a href="documentation/index.html" class="dropdown-item" target="_blank">Earning Consultants</a>
                        <a href="documentation/changelog.html" class="dropdown-item" target="_blank">Points Calculator & Tools</a>
                        <a href="https://mediumrare.ticksy.com/" class="dropdown-item" target="_blank">Earning Guides</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="nav-item" v-if="accountdata.status == false">
                <div class="dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class=" nav-link nav-item arrow-bottom" href="/login" role="button">Login</a>
                </div>
              </li>

              <li class="nav-item" v-if="accountdata.status">
                <div class="dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle nav-link nav-item arrow-bottom" data-toggle="dropdown-grid" href="#" role="button">Hi {{accountdata.data.name}}</a>
                  <div class="row dropdown-menu">
                    <div class="col-auto" data-dropdown-content>
                      <div class="dropdown-grid-menu">
                        <a href="/account" class="dropdown-item" target="_blank">My Account</a>
                        <a href="#" class="dropdown-item" @click="logout()">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
</template>

<script>
export default {
  props:['account'],
  data() {
    return {
      isFixed:false,
      stickyTrigger: 0,
      accountdata:[]

    }
  },

  mounted() {
    this.accountdata = JSON.parse(this.account);
    console.log(this.account)
  },

  methods: {
    logout() {
    axios.post('/account/logout')
    .then(response=>{
      window.location.href = "/";
    })
    }
  }
}
</script>

<style>
.brand {
  font-family: 'Fredoka One', cursive;
  color: #009b72;
}
.changeBG {
  background:#fff;
}
</style>