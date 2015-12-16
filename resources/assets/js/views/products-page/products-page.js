/**
 * Created by Jimmy on 16/12/2015.
 */

module.exports = {

  template: require('./products-page.template.html'),

  props: ['view'],

  data: function () {
    return {
      active: null,
      product: {}
    }
  },

  methods: {

    updateView: function(view)
    {
      this.view = view;
    }

  },

  ready: function () {

    this.$on('update.view', function(view)
    {
      this.view = view;
    });

  }

};
