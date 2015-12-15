/**
 * Created by Jimmy on 15/12/2015.
 */

module.exports = {

  template: require("./product-form.template.html"),

  props: ['item'],

  data: function () {
    return {
      group: 0,
      selected: {},
      groups: {},
      form: {
        title: '',
        description: '',
        prices: [],
        options: {
          vegetarian: false
        }
      }
    }
  },

  methods: {
    updatePrices: function()
    {
      for(var i = 0; i < this.groups.length; i++)
      {
        if(this.groups[i].id == this.group)
        {
          this.selected = this.groups[i].headers;
        }
      }
    }
  },

  ready: function () {
    this.$http.get('/api/groups', function (response, status, request) {
      this.groups = response.data;
    });
  }

};
