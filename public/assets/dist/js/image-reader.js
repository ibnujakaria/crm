class ImageReader {
  constructor(options) {
    this.img = $(options.img);
    this.input = $(options.input);

  }

  static init(options) {
    return new ImageReader(options)
  }

  commit() {
    var me = this;

    me
      .img
      .click(function () {
        me.input.click(); // trigger the input file to start browsing
      })
      .hover(function () {
        me.img.css({'cursor': 'pointer'})
      })

    me.input
      .change(function () {
        readURL(me, this)
      })

    function readURL(me, input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            me.img.attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
    }
  }
}
