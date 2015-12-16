/**
 * Created by Jimmy on 16/12/2015.
 */

module.exports = {

  template: require('./products.template.html'),

  props: [ 'active' ],

  data: function()
  {
    return {
      products: {}
    }
  },

  methods: {

    /*
        Update the parent active state when clicked
     */
    productClick : function (product) {
      this.active = product;

      this.$dispatch('update.view', 'product-form');
    }

  },

  ready: function()
  {
    this.$http.get('/api/products', function (response, status, request) {

      this.products = response.data;

    });
  }

};