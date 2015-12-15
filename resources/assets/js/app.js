/**
 * Created by Jimmy on 10/12/2015.
 */

var Vue = require('vue');

Vue.use(require('vue-resource'));

Vue.component('menu', require("./components/menu/menu"));

new Vue({

  el: "#app",

  data: {
    menu: {}
  },

  ready: function()
  {
    this.$http.get('api/menu', function(response, status, request)
    {
      this.menu = response.data;
    });
  }

});