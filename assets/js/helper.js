$(document).ready(function() {
  var path = '.' + window.location.pathname;
  var nav = $('.nav li a');
  nav.each(function() {
    if (path == $(this).attr('href')) {
      $('.nav li').removeClass();
      $(this).parent().addClass('active');
    }
  });
});