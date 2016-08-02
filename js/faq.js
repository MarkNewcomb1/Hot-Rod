$(document).ready(function() {
	var preload = new Image();
	preload.src = 'http://hotroddiy.com/img/bullet-point.png';
 $('.answer').hide();
 $('.main h2').click(function() {
 	var $answer = $(this).next('.answer');
	if ($answer.is(':hidden')) {
		$answer.slideDown();
		$(this).addClass('close');
	} else {
		$answer.fadeOut();
		$(this).removeClass('close');
	}
 }
	); // end click
}); // end ready