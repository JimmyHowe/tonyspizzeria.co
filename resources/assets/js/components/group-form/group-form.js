/**
 * Created by Jimmy on 15/12/2015.
 */

module.exports = {

  template: require("./group-form.template.html"),

  props: ['group'],

  data: function () {
    return {
      header: '',
      form: {
        title: '',
        description: '',
        headers: ["small", "medium", "large"]
      }
    }
  },

  methods: {

    init: function () {
      this.form = {
        title: '',
        description: '',
        headers: []
      }
    },

    add: function () {
      if(this.header != '') {
        this.form.headers.push(this.header);
        this.header = '';
      }
    },

    moveUp: function (index) {
      console.log(index);

      if (index == 0) {
        return;
      }

      var temp = this.form.headers[index - 1];
      this.form.headers.$set(index - 1, this.form.headers[index]);
      this.form.headers.$set(index, temp);
    },

    moveDown: function (index) {
      console.log(index);

      if (index == this.form.headers.length - 1) {
        return;
      }

      var temp = this.form.headers[index + 1];
      this.form.headers.$set(index + 1, this.form.headers[index]);
      this.form.headers.$set(index, temp);
    },

    remove: function (index) {
      console.log("Removing: " + index);

      this.form.headers.$remove(this.form.headers[index]);
    },

    submit: function () {
      this.$http.post('/api/groups', this.form, function (response, status, request) {
        this.init();
      }).error(function (response, status, request) {
        console.log(response);
      })
    }
  },

  ready: function () {
    this.init()
  }

};
