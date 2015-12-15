/**
 * Created by Jimmy on 10/12/2015.
 */

var Vue = require('vue');

Vue.use(require('vue-resource'));

Vue.component('menu', require("./components/menu/menu"));

Vue.component('item', require("./components/item/item"));

Vue.component('product-form', require("./components/product-form/product-form"));

new Vue({

  el: "#app",

  data: {
    menu: {}
  },

  ready: function()
  {
    this.$http.get('/api/menu', function(response, status, request)
    {
      this.menu = response.data;
    });
  }

});