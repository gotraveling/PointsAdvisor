// import $ from 'jquery';
// import 'select2';
// clear

// $('.select2').select2();
// $('.select2-tags').select2({tags: true});
// $('#flash-overlay-modal').modal();

// var laravel = {
//    initialize: function() {
//      this.methodLinks = $('a[data-method]');
//      this.token = $('a[data-token]');
//      this.registerEvents();
//    },

//    registerEvents: function() {
//      this.methodLinks.on('click', this.handleMethod);
//    },

//    handleMethod: function(e) {
//      var link = $(this);
//      var httpMethod = link.data('method').toUpperCase();
//      var form;

//      // If the data-method attribute is not PUT or DELETE,
//      // then we don't know what to do. Just ignore.
//      if ( $.inArray(httpMethod, ['PUT', 'DELETE']) === - 1 ) {
//        return;
//      }

//      // Allow user to optionally provide data-confirm="Are you sure?"
//      if ( link.data('confirm') ) {
//        if ( ! laravel.verifyConfirm(link) ) {
//          return false;
//        }
//      }

//      form = laravel.createForm(link);
//      form.submit();

//      e.preventDefault();
//    },

//    verifyConfirm: function(link) {
//      return confirm(link.data('confirm'));
//    },

//    createForm: function(link) {
//      var form =
//      $('<form>', {
//        'method': 'POST',
//        'action': link.attr('href')
//      });

//      var token =
//      $('<input>', {
//        'type': 'hidden',
//        'name': '_token',
//        'value': link.data('token')
//        });

//      var hiddenInput =
//      $('<input>', {
//        'name': '_method',
//        'type': 'hidden',
//        'value': link.data('method')
//      });

//      return form.append(token, hiddenInput)
//                 .appendTo('body');
//    }
//  };

//  laravel.initialize();
 
// function convertToSlug(Text)
// {
//     return Text
//         .toLowerCase()
//         .replace(/ /g,'-')
//         .replace(/[^\w-]+/g,'')
//         ;
// }

// $("input.form-control.post-title").blur(() => {
//     if($("input.form-control.post-slug").val() == "") $("input.form-control.post-slug").val(convertToSlug($("input.form-control.post-title").val()));
// });

//Ben//

// window.Vue = require('vue');

import VueMaterial from 'vue-material' 
import 'vue-material/dist/vue-material.min.css'
Vue.use(VueMaterial);

// import fileinput from 'bootstrap-fileinput'

//Backend

Vue.component('adminimages', require('./components/admin/adminimages.vue'));

const app = new Vue({
  el: '#app',
});