/**
 * Created by Jimmy on 15/12/2015.
 */

module.exports = {

  template: require("./menu.template.html"),

  data: function()
  {
    return {
      menu: {}
    }
  },

  ready: function()
  {
    this.$http.get('api/menu', function(response, status, request)
    {
      this.menu = response.data;
    });
  }

};
