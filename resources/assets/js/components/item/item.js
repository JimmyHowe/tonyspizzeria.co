/**
 * Created by Jimmy on 15/12/2015.
 */

module.exports = {

  template: require("./item.template.html"),

  props: [ 'item' ],

  methods: {
    showDetails: function(event)
    {
      var clicked = $(event.target);
      var tbody = clicked.closest("tbody");
      //tbody.find('.Menu__Description').hide();
      var itemDescription = clicked.closest("tr").next().toggle();
    }
  }

};
