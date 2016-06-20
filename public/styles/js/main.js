var animation = {
	table : function() {
		let ftable = $('.fade_table');
		ftable.css({'opacity' : '1'});
	}
}


var interVal = setInterval(function(){

	if (document.readyState !== "complete") { return; } clearInterval(interVal);

	jQuery(document).ready(function($) {
		animation.table();
	});

}, 600);
