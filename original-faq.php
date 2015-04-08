<style type="text/css">
h2 {
	background: url(img/open.png) no-repeat 0 11px;
	padding: 10px 0 0 25px;
	cursor: pointer;
}
h2.close {
	background-image: url(img/close.png);
}
.faq {
	border-radius: 10px;
	background-color:  rgba(0,0,0,.05);
	padding: 10px;
	margin-bottom: 10px;
}
.answer {
	margin-left: 25px;	
}
</style>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function() {
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
</script>
	<div class="content">
	<div class="main">
	<h1>A One Page FAQ</h1>
	<div class="faq">
	<h2>I've heard that JavaScript is the long-lost fountain of youth. Is this true?</h2>
	    <div class="answer">
	        <p>Why, yes it is! Studies prove that learning JavaScript freshens the mind and extends life span by several hundred years. (Note: some scientists disagree with these claims.)</p>
	      </div>
	</div>
	<div class="faq">
	      <h2>Can JavaScript really solve all of my problems?</h2>
	      <div class="answer">
	        <p>Why, yes it can! It's the most versatile programming language ever created and is trained to provide financial management advice, life-saving CPR, and even to take care of household pets.</p>
	      </div>
	</div>
	<div class="faq">
	      <h2>Is there nothing JavaScript <em>can&#8217;t</em> do?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
	</div> <!-- end faq div -->
	</div> <!-- end main div -->
	</div> <!-- end content div -->