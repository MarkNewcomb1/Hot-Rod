<footer>
<div class="doc_container">
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