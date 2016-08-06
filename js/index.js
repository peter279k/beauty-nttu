$(function() {
	$( '.swipebox' ).swipebox();
	
	$( 'img' ).bind('error', function(ev) {
		//error has been thrown
		$(this).remove();
	});
});