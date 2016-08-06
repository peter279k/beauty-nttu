$(function() {
	$( '.swipebox' ).swipebox();
	
	$( 'img' ).bind('error', function(ev) {
		//error has been thrown
		var id = $(this).attr('src');
		console.log("image is missing... " + id);
		$(this).remove();
	});
});