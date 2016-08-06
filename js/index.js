$(function() {
	$( '.swipebox' ).swipebox();
	
	$(window).on('ajaxComplete', function() {
  		setTimeout(function() {
  			$(window).lazyLoadXT();
  		}, 50);
	});
});