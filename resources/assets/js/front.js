require('./bootstrap');

window.Vue = require('vue');

// Frontend
Vue.component('appmenu', require('./components/front/menu.vue').default);
Vue.component('appfooter', require('./components/front/footer.vue').default);
Vue.component('notification', require('./components/front/notification.vue').default);
  // Landing
  Vue.component('gettingstarted', require('./components/front/landing/gettingstarted.vue').default);
  Vue.component('banner', require('./components/front/landing/banner.vue').default);
  
  // Account
  Vue.component('applogin', require('./components/front/account/login.vue').default)
  Vue.component('appaccount', require('./components/front/account/account.vue').default)

  // Blog
  Vue.component('bloglist', require('./components/front/blog/bloglist.vue').default);
  Vue.component('blogarticle', require('./components/front/blog/blogarticle.vue').default);
  Vue.component('subscribebar', require('./components/front/blog/subscribebar.vue').default);


const app = new Vue({
    el: '#front',
});
