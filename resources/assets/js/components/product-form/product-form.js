/**
 * Created by Jimmy on 15/12/2015.
 */

module.exports = {

  template: require("./product-form.template.html"),

  props: [ 'item' ],

  data: function()
  {
    return {
      form: {
        title: '',
        description: '',
        headers: ['small', 'medium', 'large'],
        prices: [ 1, 2, 3 ],
        options: {
          vegetarian: false
        }
      }
    }
  },

  methods: {

  },

  ready: function()
  {

  }

};
