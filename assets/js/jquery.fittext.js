/*global jQuery */
/*!
*@package Estheticsol
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );
$('#fun-facts').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
  if (visible) {
    $(this).find('.timer').each(function () {
      var $this = $(this);
      $({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
          $this.text(Math.ceil(this.Counter));
        }
      });
    });
    $(this).unbind('inview');
  }
});