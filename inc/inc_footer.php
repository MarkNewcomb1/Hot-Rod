<footer>
<div class="doc_container">
<nav class="bottom-nav"><a href="/">Home</a>&nbsp; | &nbsp;&nbsp;<a href="/howtoarticles.php/">How-To Articles</a>&nbsp; | &nbsp;&nbsp;<a href="/faq.php">Faq</a></nav>
<p class="notice">Web Design and Layout &copy; <?php echo date("Y") ?> by Mark Newcomb. All Rights Reserved.</p>
</div><!--end doc container-->
<script>
	
	function checkPosition() {
    if (window.matchMedia('(max-width: 719px)').matches) {
       	$(function(){
		$('#menu').slicknav();
	});
    } 
}
checkPosition();
</script>
</footer>
</body>
</html>