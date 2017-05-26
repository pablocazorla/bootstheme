// DEMO
demo = function($) {
  "use strict";

  // Prettify
  $('.demo-pre-container').each(function() {
    var $this = $(this).show();
    $this.find('.demo-pre-trigger').click(function() {
      $this.toggleClass('open');
    });
  });
  $('.prettyprint').each(function() {
    var $this = $(this),
      html = $this.html();
    var newHmtl = html.replace(new RegExp('<', 'g'), '&lt;');
    $this.html(newHmtl);
  });
  if (typeof PR !== 'undefined') {
    PR.prettyPrint();
  }

  // Avoid link navigation
  $('a[href="#"]').click(function(e) {
    e.preventDefault();
  })

  // Tooltips and Popovers
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();

  $('#buttonLoadingState').on('click', function() {
    var $btn = $(this).button('loading')
      // business logic...
      // $btn.button('reset');
  });
};
jQuery(document).ready(function() {
  demo(jQuery);
});
