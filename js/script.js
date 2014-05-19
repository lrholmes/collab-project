$(document).ready(function(){

	var view = {
		h: $(window).height(),
	},
	titleHeight = $('#title').outerHeight(),
	videoHeight = view.h-titleHeight;

	function position() {
		$('#videohead').css('height', videoHeight);
	}

	function init() {
		position();
	}

	init();

})