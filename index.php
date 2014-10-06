<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The Unofficial Hot Rod User's Guide</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<header>
<?php include("inc/inc_header.php"); ?>
</header>
<article class="book">
 <style>
  section { border: double medium; margin: 2em; }
  section.chapter h1 { font: 2em Roboto, Helvetica Neue, sans-serif; }
  section.appendix h1 { font: small-caps 2em Roboto, Helvetica Neue, sans-serif; }
 </style>
 <header>
   <h2>My Hot Rod Website</h2>
   <p>A sample with not much content</p>
  <p><small>Published by Dummy Publicorp Ltd.</small></p>
 </header>
  
 <section class="chapter">
  <h3>My First Chapter</h3>
  <p>This is the first of my chapters. It doesn't say much.</p>
  <p>But it has two paragraphs!</p>
 </section>
 <section class="chapter">
  <h3>It Continutes: The Second Chapter</h3>
  <p>Bla dee bla, dee bla dee bla. Boom.</p>
 </section>
 <section class="chapter">
  <h3>Chapter Three: A Further Example</h3>
  <p>It's not like a battle between brightness and earthtones would go
  unnoticed.</p>
  <p>But it might ruin my story.</p>
 </section>
 <section class="appendix">
  <h3>Appendix A: Overview of Examples</h3>
  <p>These are demonstrations.</p>
 </section>
 <section class="appendix">
  <h3>Appendix B: Some Closing Remarks</h3>
  <p>Hopefully this long example shows that you <em>can</em> style
  sections, so long as they are used to indicate actual sections.</p>
 </section>
</article>
<footer>
<?php include("inc/inc_footer.php"); ?>
</footer>
<!--   <script src="js/scripts.js"></script> -->
</body>
</html>