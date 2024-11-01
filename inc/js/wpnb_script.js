// JavaScript Document
jQuery(document).ready(function() {
	var time_Sets = $("input[name=set-time-feed-out]").val();
	if(time_Sets>700){
		time_Set = time_Sets;
	}
	$('#wp-notification-overlay').delay(9000).modal('show');
	setTimeout(function() {
		$('#wp-notification-overlay').delay(12000).modal('hide');
	}, time_Set);
});