$('body').css('display', 'none');
$(document).ready(function() {
  $('body').fadeIn();
  $('a').on('click', function(event) {
    var target = $(this).attr('target');
    if(target != "_blank") {
      var href = $(this).attr('href');
      event.preventDefault();
      $('body').fadeOut(function() {
        window.location = href;
      });
    };
  });
});
setTimeout(function() {
  $('body').fadeIn();
}, 1000)
