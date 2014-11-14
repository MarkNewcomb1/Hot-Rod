<?php include("inc/inc_header.php"); ?>
<div data-role="panel" id="mypanel" data-position="right" data-display="push" data-position-fixed="true">
        <h1>HI THERE, PANEL CONTENT!</h1>
        <a href="#top" data-rel="close">Close panel</a><!-- panel content goes here -->
    </div><!-- /panel -->
<article class="book doc_container">
 <style>
  section { border: double medium; margin: 2em; }
  section.chapter h1 { font: 2em Roboto, Helvetica Neue, sans-serif; }
  section.appendix h1 { font: small-caps 2em Roboto, Helvetica Neue, sans-serif; }
 </style>
 <header>
   <h2><a name="top"></a>My Hot Rod Website</h2>
   <p>A sample with not much content</p>
  <p><small>Published by Dummy Publicorp Ltd.</small></p>
  <a href="#mypanel">Open panel</a>
 </header>
  
 <section class="chapter">
  <h3>My First Chapter</h3>
  <p>This is the first of my chapters. It doesn't say much.</p>
  <p>But it has two paragraphs!</p>
 </section>
 <section class="chapter">
  <h3>It Continues: The Second Chapter</h3>
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
<?php include("inc/inc_footer.php"); ?>
