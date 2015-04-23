<?php include("inc/inc_header.php"); ?>
<script src="js/faq.js"></script>
<div class="doc_container">
<article>
		<header><h1>The Original FAQ</h1></header>
	<div class="main">
	<h2 class="question">I own a (Hot Rod Deville, Blues Junior, Blues Deluxe, Blues Deville, Pro Junior) can I use the information on this site?</h2>
	    <div class="answer">
	        <p>Generally speaking, most of the stuff on this site can be applied the Hot Rod Deville, some of this can be applied to the Blues Deluxe/Deville, and very few of it can be applied to the Blues Junior or Pro Junior. They may be a part of the "Hot Rod" lineup, but internally the BJ and PJ are totally different amps. The Blues Deluxe/Deville have quite a few similarities, but they also have some differences. If a mod or fix can be applied to one of those amplifiers, I'll mention it somewhere atop the page.</p>
	      </div>
	      <h2 class="question">Are the Hot Rod Deluxe/Deville All Tube?</h2>
	      <div class="answer">
	        <p>In the true sense of the phrase "all tube?" No. The rectifier, which converts AC to DC, is solid state; the effects loop is solid state; and so is part of the Reverb unit. Most modern day amplifiers use solid state rectifiers and reverb units. Many vintage amplifiers have tube rectifiers, but they're generally considered unreliable. There are many classic Fender amps which have a SS rectifier, the blackface Twin Reverb being one. Solid state rectifiers don't "break up" as early, allow more clean headroom, and provide less compression than their tube counterparts. This may or may not be something you're interested in. The reverb driver and recovery are also solid state, but use a real spring reverb pan like those found in Fender's more expensive amps. This may be an "issue" to the tube purists. Both the reverb and effects loop use the same type of high quality op amps. The signal path itself (preamp/poweramp) <em>is</em> all tube.</p>
	      </div>
	      <h2 class="question">What about the More Drive?</h2>
	      <div class="answer">
	        <div class="content50">
		        <p>A lot of people have heard that the More Drive is solid state, or that it uses solid state components. The More Drive uses a pair of J111 switching JFETs (a type of transistor) to bypass R23 and R24—two 100K&ohm; resistors that are in series with V2A and V2B's cathode capacitors. Cathode caps simply increase gain by reducing <em>degeneration</em> (or local negative feedback), by shunting AC frequencies across the bias resistor. They're very common in both tube and solid state amps.</p></div>
		        <figure class="content50">
		        <img src="img/more-drive-schematic.jpg" alt="more drive schematic">
  <figcaption>A segment of the Hot Rod's schematic has been simplied for clarity, but not altered. The More Drive circuitry has been shaded.</figcaption></figure>
  <div class="clear"></div>
  <p>When the More Drive is <em>not</em> selected the J111 JFETs react no differently than two very large resistances. When the More Drive is selected a DC voltage is sent to the gate of both JFETs. This causes the <em>drain</em> and <em>source</em> to act like a closed switch, and the J111s turn into a dead short. As a result they jumper R23 and R24, turning the previous 100K&ohm; of resistance into zero ohms. Now the negative plate of the cathode caps are at ground potential, which is where they're supposed to be. As a result, the gain of both stages is practically doubled and V2A & V2B (a preamp tube) are pushed into distortion. The increase in distortion is <em>tube generated</em>, and is in no way solid state. Solid state components got their bad rap from how they distort when used for amplification. The JFETs used by the More Drive do not amplify, and are nothing more than a
switch. They color the sound no more than a resistor, or a piece of wire would. If for whatever
reason you wanted a permanent More Drive sound, just take two pieces of wire and jumper out
both 100K&ohm; resistors. So despite what some people assume, the More Drive <em>is</em> all tube.</p>
<p>A JFET "Shunt Switch" is used because it's switch element is extremely quiet and produces no
modulation or any other unwanted effects. When cathodes are bypassed we're dealing with much
more gain. The more drive significantly raises the noise floor of the amp. This means more hiss,
buzz, and mechanical noise will be amplified through the speaker. A relay would have been too
noisy since it's mechanical—the relay's pole will bounce when it slams into the contact; resulting
in a clearly audible noise. You can sometimes hear this when switching channels at low volumes.
The JFETs themselves also cost less than a quarter, while the relays are at least several dollars
each.</p>   
      	</div>
      	 <h2 class="question">What's the difference between the Hot Rod Deluxe and Deville?</h2>
	      <div class="answer">
	        <p>I once heard someone say, "the Deville is just a Deluxe with more speakers." Not totally true, but
closer to the truth than you probably think. In fact, the Deluxe and Deville are so similar that
Fender uses the exact same printed circuit board (PCB) for both models. The Deville's preamp,
reverb, effects loop, and phase inverter are all <em>exactly</em> the same as the Deluxe's. So any Deluxe mods done to any of these parts can also be done to the Deville. On first glance even the
poweramp has a truly uncanny resemblence, though it's actually slightly different.</p>
<p>The main difference between these amps is the power supply, which handles 50 more volts than
the Deluxe's power supply. This change dictates almost every other anomaly of the Deville.
Naturally, the power transformer is a different model, as one of the secondaries must put out the
higher voltage. The filter circuit has more caps to handle the higher voltage, and a few bleeder
resistors are employed to help drain residual voltage once the amp is turned off. The output
transformer is different, as it needs to handle 60 watts, and it has an additional 2 ohm tap which is
only used by the 4x10 model. The bias circuit is filtered a little more to reduce hum, and the +/-
16V supply (powers the effects loop, channel switching, and reverb) uses the better 330 ohm
power resistors instead of 470 (R78, R79). Finally, as you've probably guessed, the Deville has
more speakers that together can handle 60 watts.</p>
<p>If you've read this, you may also be interested in reading the differences between the Blues
Deluxe and the Hot Rod Deluxe, which was written by Steve Dallman:</p>
<p>The two are similar in some ways and quite different in others. The obvious differences are the drive channel and "more" drive. Both amps are sort of takes on a 59 Bassman according to Fender with the added drive, reverb and effects loop. That may be a stretch. "Normal" Fenders, such as 'black face' and 'silver face' Twins, Bandmasters, Bassmans, Deluxe Reverbs and the like have a gain stage, the tone stack (which introduces a lot of signal loss) and then a recovery gain stage. From there there will be a mixing stage for the channels and reverb and on to the power amp.</p><p>In the BD and HRD there are 2 gain stages preceding the tone stack. This helps create the blusier preamp breakup similar to a 59 Bassman. The tone stacks are sort of a cross between a 59 Bassman and a standard Fender. Next comes the drive stage. In the BD it is a rather anemic single tube stage. In the HRD both halves of V2 are used. In the BD there is half a tube unused. How much you like the distortion in either amp is really a matter of taste.</p><p>The first stages are classic Fender except the BD uses a 22uf cathode bias cap while the HR uses a larger 47uf, which will create a bit more low end.</p><p>Coupling cap next is .01BD Vs .022 in HRD. Still a little more low end in the HR. The bright switch in the BD is next. This is a non-standard Fender design, which bypasses a 100k resistor with a 750pf cap. As the 100k resistor is attached to the 250k-volume control, it is only effective in clean mode. The drive control in the HR is between the first and second stage.</p><p>The second stage is unbypassed in both amps. In the HR the bright switch is a .068 cathode bypass cap that is non-functioning in drive mode.</p><p>The tone stack follows the second stage. They are identical except the HR uses a 130k mid slope resistor, while the BD is 100k. This will create a little less low end in the HR.</p><p>The drive control precedes the 3rd stage in the BD, a standard Fender bypassed gain stage. The 3rd stage is used in both clean and drive in the BD.</p><p>In the HR the 3rd and 4th stages are used in drive only. This tube is unbypassed. In More drive a 1uf-bypass cap is switched in on the 3rd stage and a 22uf bypass cap is switched in on the 4th stage. (The 4th stage is not used in the BD, but is just waiting to be modded in.)</p><p>Note on bypassing. The gain in a tube stage is set by 3 components, the plate resistor, (typically 100k in Fenders, larger for more gain) the cathode resistor, (typically 1.5k in Fenders, smaller for more gain) and a bypass cap that bypasses the cathode resistor. The cathode cap is not always used but when it is, it will increase gain in different frequency ranges. 22uf will increase gain across the entire guitar spectrum. Smaller will only raise gain in higher frequencies.</p><p>The master for the drive channel follows in both amps. From there the amps are nearly identical, except the HR has somewhat fuller reverb due to the design of the reverb return. (The reverb circuit and the effects loop are solid state.) The HR has an extension speaker jack that uses the 4-ohm speaker tap on the output transformer. The BD has this tap but it is not used (but could be added by a tech.)</p><p>In general these amps are similar. The BD will not stay as clean at higher volumes due to the 3rd stage always being active. The HR has "improved" distortion (drive) with "more drive" added. The HR has fuller reverb and an extension speaker jack. Both are good designs with plenty of classic Fender tone.</p>
      	</div>
      	 <h2 class="question">Why a tweed cabinet with blackface tolex and grill?</h2>
	      <div class="answer">
	        <p>The styling of the Hot Rod Deluxe/Deville, as well as '96-Present Blues/Pro Junior, is based on a
short lived tweed cabinet/black tolex combination that was used in the mid-60s. I'm not sure if
any vintage Deluxes ever looked like the modern Hot Rods. Before '60 all Deluxes were tweed.
From '61-'62 Fender switched to "blonde" coverings. Then from '63 to around '68 Fender went
blackface, before setting into the silverface style for most of the 70s. Below are pictures of a
modern Hot Rod Deluxe compared to a rare 1964 Champ with the original styling. A new Pro
Junior almost looks totally identical to this Champ.</p>
<figure class="content50"><img src="img/modern-hot-rod-deluxe.jpg" alt="modern hot rod deluxe"><figcaption>Modern Hot Rod Deluxe</figcaption></figure>
<figure class="content50"><img src="img/1964-fender-champ.jpg" alt="1964 fender champ"><figcaption>1964 Fender Champ</figcaption></figure>
<div class="clear"></div>
      	</div>
      	<h2 class="question">How do I date my Hot Rod Deluxe? (Determine when it was manufactured)</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Which preamp tubes are V1, V2, and V3? What do they do?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Why don't they call them the "F.A.T" Series anymore?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Is my Fender amp under warranty? Should I mod?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">How do I contact Fender for Customer/Technical Support?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Was a tweed version made of the Hot Rod Deluxe/Deville?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Were there any other versions of the Hot Rod Deluxe made?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">What kind of speaker comes stock in my HRDx?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Why do the OEM Groove Tubes have different colored labels?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Why Hot Rod makes a loud "pop" when switching channels? Help!</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">How do I replace a blown jewel light?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">My Hot Rod has foam around the tubes. Should I remove it?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">Can I turn my HRDx into a head?</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
      	<h2 class="question">What are the differences between the Hot Rod Deluxe and Blues Deluxe? By Steve Dallman</h2>
	      <div class="answer">
	        <p>Why, no there isn&#8217;t! It&#8217;s even able to write its own public relations-oriented Frequently Asked Questions pages. Now that&#8217;s one smart programming language!</p>
      	</div>
	</div> <!-- end main div -->
	</article>
	</div> <!-- end doc container div -->
	<?php include("inc/inc_footer.php"); ?>