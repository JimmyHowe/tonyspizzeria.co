/**
 * Created by Jimmy on 15/12/2015.
 */

module.exports = {

  template: require('./basket.template.html'),

  data: function()
  {
    return {
      items: []
    }
  },

  computed: {

    getTotal: function()
    {
      var total = 0;

      for(var i = 0; i < this.items.length; i++)
      {
        total = +total + +this.items[i].price;

        console.log("i: " + i);
        console.log("p: " + this.items[i].price);
        console.log("t: " + total);
      }

      return total;
    }

  },

  ready: function () {

    this.$on('basket.add', function(item, index)
    {
      var basketItem = {
        title : item.title,
        price : item.prices[index]
      };

      this.items.push(basketItem);
    });

  }

};