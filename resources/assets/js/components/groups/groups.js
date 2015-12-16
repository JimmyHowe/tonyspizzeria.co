/**
 * Created by Jimmy on 16/12/2015.
 */

module.exports = {

  template: require('./groups.template.html'),

  props: [ 'active' ],

  data: function()
  {
    return {
      groups: {}
    }
  },

  methods: {

    /*
        Update the parent active state when clicked
     */
    groupClick : function (group) {
      this.active = group;

      this.$dispatch('update.view', 'group-form');
    }

  },

  ready: function()
  {
    this.$http.get('/api/groups', function (response, status, request) {

      this.groups = response.data;

    });
  }

};