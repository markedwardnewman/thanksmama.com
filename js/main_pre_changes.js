/***** NAV-TOP cart popup *****/
var cart_popover_options = {
  content: cart_popover_content,
  container: 'section',
  html: true,
  placement: 'auto'
};

$(document).ready(function(){
  $('#cart-popover').popover(cart_popover_options);


/***** NAV-MAIN popup, If set to hover, the popup will not stay open.  The below code changes that    container: '.main-content',**************/
$(".pop-baby-child").popover({
  trigger: 'manual' ,
  html: true,
  animation:false,
  placement: 'bottom',
  content: nav_main_popover_baby_child_content,
  container: 'body'
})
  .on("mouseenter", function () {
      var _this = this;
      $(this).popover("show");
      $(".popover").on("mouseleave", function () {
          $(_this).popover('hide');
      });
  }).on("mouseleave", function () {
      var _this = this;
      setTimeout(function () {
          if (!$(".popover:hover").length) {
              $(_this).popover("hide");
          }
      }, 300);
});

  /***** Dismiss all popovers by clicking outside, don't dismiss if clicking inside the popover content  **************/
  $('html').on('click', function(e) {
    if (typeof $(e.target).data('original-title') == 'undefined' &&
       !$(e.target).parents().is('.popover.in')) {
      $('[data-original-title]').popover('hide');
    }
  });

});

