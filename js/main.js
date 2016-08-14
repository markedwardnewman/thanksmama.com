/***** NAV-TOP cart popup *****/
var cart_popover_options = {
  content: cart_popover_content,
  container: 'section',
  html: true,
  placement: 'auto'
};

$(document).ready(function(){
  $('#cart-popover').popover(cart_popover_options);
});

// Set our default popover options
$.fn.popover.Constructor.DEFAULTS.trigger = 'click';
$.fn.popover.Constructor.DEFAULTS.placement = 'bottom';

// Attach the event on jQuery DOM Ready
$(function () {
    $("#example-div").popover({
        content: lorem,
        placement: 'top',
        container: '.well' // Popover scrolls with div.well
    });

    $("#example-body").popover({
        content: lorem,
        container: 'body' // Popover scrolls with body
    });
});

var lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra tellus sit amet massa efficitur placerat. Cras mollis enim neque, luctus porttitor neque suscipit eu. Aliquam rhoncus nisi sit amet dui porttitor tincidunt in at diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque elementum dui eget odio ultricies eleifend at sit amet arcu.";
