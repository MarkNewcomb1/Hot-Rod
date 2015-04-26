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
      	</div>
      	 <h2 class="question">Why a tweed cabinet with blackface tolex and grill?</h2>
	      <div class="answer">
	        <p class="bottom-space">The styling of the Hot Rod Deluxe/Deville, as well as '96-Present Blues/Pro Junior, is based on a
short-lived tweed cabinet/black tolex combination that was used in the mid-60s. I'm not sure if
any vintage Deluxes ever looked like the modern Hot Rods. Before '60 all Deluxes were tweed.
From '61-'62 Fender switched to "blonde" coverings. Then from '63 to around '68 Fender went
blackface, before setting into the silverface style for most of the 70s. Below are pictures of a
modern Hot Rod Deluxe compared to a rare 1964 Champ with the original styling. A new Pro
Junior almost looks totally identical to this Champ.</p>
<figure class="content50"><img src="img/modern-hot-rod-deluxe.jpg" alt="modern hot rod deluxe"><figcaption>Modern Hot Rod Deluxe</figcaption></figure>
<figure class="content50"><img src="img/1964-fender-champ.jpg" alt="1964 fender champ" id="champ"><figcaption>1964 Fender Champ</figcaption></figure>
<div class="clear"></div>
      	</div>
      	<h2 class="question">How do I date my Hot Rod Deluxe? (Determine when it was manufactured)</h2>
	      <div class="answer">
	        <figure class="content100"><img src="img/quality-assurance-sticker.jpg" alt="quality assurance sticker"></figure>
	        <div class="clear"></div>
	        <p class="top-space">If you have an older amp (usually pre-MIM) the easiest way to determine is to look at the chart
below. Inside the cabinet is a little sticker (pictured above), usually to the right of the speaker. It
should say "quality assurance" on it, and have someone's handwritten initials. Look for a two
letter code on the bottom line. The first letter symbolizes the year it was made, the second letter
the month. My amp says "LA," so it was made in January of 2001. If it says "JF", then your amp
was made in June of 1999. etc..</p>
<h5 class="center-text">First Letter</h5>
<p class="center-text">G = 96 H = 97 I = 98 J = 99 K = 00 L = 01 M = 02</p>
<h5 class="center-text">Second Letter</h5>
<p class="center-text">A = JAN B = FEB C = MAR D = APR E = MAY F = JUNE G = JULY H = AUG I = SEPT J = OCT K = NOV L = DEC</p>
<figure class="content100 top-space"><img src="img/back-of-amp-with-quality-assurance-sticker.jpg" alt="back of amp with quality assurance sticker"><figcaption>Quality Assurance stickers were used in
Pre-MIM Hot Rods, and allowed users to
determine the month and year their
amp was manufactured.</figcaption></figure>
<div class="clear"></div>
<p class="top-space">Fender removed the Quality Assurance tags around the time production was moved to the
Mexican factory. When asked about the removal of these tags, a Fender employee said:</p>
<p>"The QA tags also no longer contain Date codes. That used to be a Safety agency requirement,
but we have moved out of the dark ages and actually track by computer and other methods now."
- Gina D.</p>
<p>Fender now uses the serial number on the back panel to date their amps. Unfortunately the serial
# has "no meaning," and access to the database that deciphers the numbers "isn't available to the
public."</p>
<p>Also, the earliest Hot Rod Deluxes were made in 1996, and had a "50th Anniversary" logo on the
back. Since this amp is arguable the most popular in the world, I'd hold on to the "50th" amps as
they may become collectable.</p>
      	</div>
      	<h2 class="question">Which preamp tubes are V1, V2, and V3? What do they do?</h2>
	      <div class="answer">
	        <figure class="content100"><img src="img/v3-v2-v1.jpg" alt="v3 v2 v1"></figure>
	        <div class="clear"></div>
	        <p class="top-space">V1 is the first preamp tube, and is the most tonally important as it establishes the basic sound of
our amp—every subsequent gain stage is simply making a copy of the first gain stage. Part of V2
is used exclusively by the Drive channel, so if you're battling the Drive channel's demons you
may try using a lower gain tube in this slot. Many feel this helps smooth out the Drive channel,
and gives an overall more "bluesy" sound. V3 is the <em>phase inverter</em>, which makes sure the
powertubes are running 180 degrees out of phase. Using a lower gain tube here may help tighten
things up, and some believe it gives the Hot Rod a more vintage-like feel.</p>
<p>It's been asked if V2 affects the clean channel—the answer is YES. Most people don't realize that
the 12AX7 triode and its family (12AT7, 12AY7, etc) are actually two separate tubes inside one
enclosure. For this reason the 12AX7 family are known as <em>dual-triodes</em>. These "separate" innertriodes
are differentiated on schematics by the suffixes A and B, but collectively are inside the
same tube. For a better understanding take a closer look at your preamp tubes. At the right angle
you'll be able to see two identical triodes mounted side by side on spacers. Now that we know
where the 'A' and 'B' came from, lets map out the Hot Rod Deluxe/Deville's preamp so we can
better understand how our tone is shaped.</p>
<figure class="content100 top-space"><img src="img/gain-stage-map.jpg" alt="gain stage map"></figure>
<div class="clear"></div>
<p class="top-space">The first gain stage is called V1A, and it amplifies an unaltered version of our guitar's signal.
Immediately afterwards are the volume and drive controls (the drive is called "gain" on the
graphic). As you may know, the volume is only used by the clean channel, and the drive control
is only used by drive channels; but in reality the drive control is not any different than the volume
control. The Drive simply pushes V1B and V2A into distortion, while the volume control does
not. When we turn the Drive to 7, the preamp tubes are seeing the same amount of signal as they
would with the Volume set to 7. So we can play at a reasonable volume, the Master volume
grounds off much of the excess gain later in the circuit.</p>
<p>Our signal is then reamplified by V1B, to make up for any <em>insertion loss</em> (or signal loss) caused
by the volume and drive controls. The next few steps are pretty straight-forward. The "tone
stack," which you probably correctly guessed were the tone controls (Treble, Middle, & Bass)
follow. Afterward V2A compensates for the insertion loss caused by the tone stack. What
happens next will be dictated by which channel we're using.</p>
<p>If we're using the clean channel, then V2B is bypassed and the signal is sent straight to the power
amp. (The power amp consists of the phase inverter, the power tubes, the output transformer, and
the speaker—respectfully.) If we're using the drive channel, then another gain stage (V2B) is
inserted into the chain. This adds more gain and helps push the poweramp into saturation (or
distortion) earlier. Even though V3A and V3B use "preamp" tubes, it's actually considered part of
the poweramp. It even distorts differently than V1 and V2.</p>
<p>In conclusion, we've shown that all the preamp tubes are interconnected in the circuit, and
switching one tube will affect the tone of all channels.</p>
      	</div>
      	<h2 class="question">Why don't they call them the "F.A.T" Series anymore?</h2>
	      <div class="answer">
	        <p>F.A.T stands for "Fender American Tube" series. In the summer of 2002, Fender started
manufacturing Hot Rod Deluxes/Devilles in Mexico—probably sometime between June and July.
Since they're no longer made in the USA, and to avoid confusion, they are now called the "Hot
Rod" series. If you look at the back plate of the amp it should tell you where it was made. On the
other hand, I have a 2001 HRDx and its OEM footswitch was made in Mexico.</p>
      	</div>
      	<h2 class="question">Is my Fender amp under warranty? Should I mod?</h2>
	      <div class="answer">
	        <p class="bottom-space">Fender's pretty strict about their warranties, so keep ALL your papers. In the USA, your amp
must meet a few requirements. (Other countries may have different warranty requirements)</p>
<ul>
	<li>You must have the original receipt and be the original owner, or have the original owner's
receipt signed over to you. (Basically, the original owner signs their name on the back of
the receipt and dates it.)</li>
	<li>The amp must have been bought from an authorized Fender dealer. No used Fender's
from non-authorized dealers. If bought used from an authorized dealer, then that dealer is
responsible for making sure you have a warranty.</li>
<li>Amp was bought from authorized dealer within the last 5 years. (Tubes and speaker are
only under warranty for the first 90 days.)</li>
<li>Any fixes must be done by an authorized Fender repair service. Anyone else, no matter
how professional, will void the warranty.</li>
<li>Any previous mods of any type will void the warranty. (Warranty covers manufacturing
defects only.)</li>
</ul>
<p class="top-space">Does your amp not meet these requirements? Good! Let's fire up that soldering iron and have
some fun!</p>
      	</div>
      	<h2 class="question">How do I contact Fender for Customer/Technical Support?</h2>
	      <div class="answer">
	        <p>I often hear people complain that they can not get a hold of Fender's customer support, especially on Harmony Central's user reviews. The fact is, Fender did not deal with customer support through <a href="http://www.fender.com/" target="_blank">http://www.fender.com</a>. They had a second website, <a href="http://www.mrgearhead.com/" target="_blank">http://www.mrgearhead.com</a>, which was totally dedicated to locating authorized repair centers, schematics, instrument wirings, and answering other frequently asked questions—generally, the questions Fender gets bombarded with from all over the world. Fender has now moved the content of mrgearhead to <a href="http://www.fender.com/support/" target="_blank">http://www.fender.com/support/</a></p>
	        <p>The phone number for Fender's Consumer Relations Dept. is <strong>480-596-7195</strong>. Before you call, realize that Fender does most of its customer service through authorized repair centers.</p>
	        <p>I also have Fender's Customer Service email, which is hard to find, but <em>only</em> use it if you genuinely have some sort of real problem or a serious question. Do not email them if you want to know if a Jensen speaker sounds better than a Celestion, or if you have a question on using your multi-effects processor with your Fender amp. These are not real customer support questions; ask those types of questions in the <a href="http://www.thefenderforum.com/" target="_blank">Fender Forum</a>. If you do ask a question like those, don't be surprised if you never get any response. Also, don't use this to complain about the touchy master control or the plastic input jacks—trust me, Fender knows. People have been complaining for years. Why would they change anything on the #1 selling Fender amp of all time? (According to Shane Nicholas, Marketing Manager of Fender amps.) If you honestly have a problem that only Fender's support can answer, then contact them through <a href="mailto:consumerrelations@fender.com">email</a>, otherwise use the <a href="http://www.thefenderforum.com/" target="_blank">Fender Forum</a>.</p>
 <p>FYI: I've heard that Fender has a "3 Strikes" policy. If your amp is under warranty, and an  authorized tech has attempted to repair it three times and failed, Fender will replace your broken amp with a new one. While I've heard evidence to support this, I haven't officially heard it yet from a Fender representative. So ask your local authorized Fender repair person.</p>
      	</div>
      	<h2 class="question">Was a tweed version made of the Hot Rod Deluxe/Deville?</h2>
	      <div class="answer">
	        <p>Yes. When the Hot Rod Deluxe/Deville came out in 1996, they took the place of the Blues
Deluxe/Deville—which were covered in tweed. To help make the transition Fender made some
tweed Hot Rods the first few years. This version was not lacquered (to reduce cost), and contains
the same Eminence speaker as regular HRDxs.</p>
<figure class="content100 top-space"><img src="img/tweed-version.jpg" alt="tweed version"></figure>
<div class="clear"></div>
<p class="bottom-space top-space">In the spring of 2003 Fender released a special run of lacquered tweed Hot Rod Deluxes with an
alnico speaker (Jensen P12N). It is uncertain how many were made. This limited edition costs
about $160 more than a normal black tolex Hot Rod. Special thanks to IkilledKenny54 for the
pictures.</p>
<figure class="content50"><img src="img/lacquered-tweed-1.jpg" alt="lacquered tweed" id="tweed"></figure>
<figure class="content50"><img src="img/lacquered-tweed-2.jpg" alt="lacquered tweed back"></figure>
<div class="clear"></div>
      	</div>
      	<h2 class="question">Were there any other versions of the Hot Rod Deluxe made?</h2>
	      <div class="answer">
	        <p class="bottom-space">Yes. Fender has made a few brown tolex Hot Rod Deluxes, which came with a Jensen C12N
speaker. They're known as "Fender Special Runs," and are usually made specifically for
companies who request them. The HRDx below was manufactured in Corona California, May of
2002. Mexico will also be building special runs in the future when they're in demand.</p>
<figure class="content50"><img src="img/brown-1.jpg" alt="brown amp"></figure>
<figure class="content50"><img src="img/brown-2.jpg" alt="brown amp back" id="brown"></figure>
<div class="clear"></div>
<p class="top-space bottom-space">In the May of 2003 Musician's Friend released a version of the Hot Rod Deluxe with "blonde"
tolex. Previously, a blonde version of the Blues Junior was available for a year or more. This
HRDx is exactly the same as the black tolex HRDx, with the exception of looks. Last time I
checked they were US$60.00 cheaper than the black tolex Hot Rods on
musiciansfriend.com! If the blonde tolex tickles your fancy you may want to check it out.
Special thanks to "Dan the Man" for the pics!</p>
<figure class="content50"><img src="img/blonde-tolex-1.jpg" alt="blonde tolex" id="blonde"></figure>
<figure class="content50"><img src="img/blonde-tolex-2.jpg" alt="blonde tolex back"></figure>
<div class="clear"></div>
<p class="top-space bottom-space">Fender also released two Limited Edition Hot Rod Deluxes in a polished maple cabinet that
spring. The first had a regular finish and other a three tone sunburst similar to a vintage Strat.</p>
<figure class="content100"><img src="img/wood-1.jpg"></figure>
<figure class="content100"><img src="img/wood-2.jpg"></figure>
<figure class="content100"><img src="img/wood-3.jpg"></figure>
<figure class="content100"><img src="img/wood-4.jpg"></figure>
<figure class="content100"><img src="img/wood-5.jpg"><figcaption>Last two photos courtesy of Dan Sheridan</figcaption></figure>
<div class="clear"></div>
<p class="top-space bottom-space">"The extension cabinet was built by Kim Reynolds in Northern CA. Mr.
Reynolds is a master wood craftsman and guitarist who built two cabinets
(one for himself and one for me). The cabinet is solid maple (birds-eye maple
sides - it looks amazing up close) and features two 12" Eminence speakers
arranged vertically with foam sound insulation inside to prevent acoustic
wave pooling. The bottom speaker is the Eminence Legend V12. The top
speaker is the Eminence Legend GB12. The two speakers have different tonal
characteristics and together in this closed back cabinet sound huge and
absolutely amazing." - Dan Sheridan</p>
<figure class="content100"><img src="img/tobacco-amp.jpg" alt="tobacco sunburst amp"></figure>
<div class="clear"></div>
      	</div>
      	<h2 class="question">What kind of speaker comes stock in my HRDx?</h2>
	      <div class="answer">
	       <figure class="content100"><img src="img/stock-speaker.jpg" alt="stock speaker"></figure>
	       <div class="clear"></div>
	       <p class="top-space">It's well known that the stock speaker is an Eminence, but which one exactly? <em>(Webmaster note: not necessarily true. My stock speaker was a Celestion G12P-80, which I thought didn't sound too great and swapped it out with the famous Celestion Vintage 30.)</em> I've often heard it
referred to as "brown label," "gold label," or "special design," but to find out for sure I contacted
Eminence's customer service. With the exception of the Fender Special Runs, the speaker which
has always came stock in the Hot Rod Deluxe is the <em>Eminence Legend 125</em>. Its power is rated at
50w and has a ceramic magnet. (The non-special design Legend 125s are rated at 75W.)</p>
<p>The Limited Edition (polished maple cabinet) and Brown tolex versions have a Jensen C12N
(ceramic magnet). The Lacquered Tweed Hot Rods have a Jensen P12N (alnico magnet). The
black and blonde tolex Hot Rods come with the Eminence Legend 125.</p>
      	</div>
      	<h2 class="question">Why do the OEM Groove Tubes have different colored labels?</h2>
	      <div class="answer">
	        <p>Groove Tubes uses a number and colors color system to represent how early theirs tube break up
into distortion. The blue labeled Groove Tubes break up the earliest, and are numbered 1 through
3. They're supposed to be used more for blues. The white labels have a medium breakup, are
labeled 4 through 7, and are the most common found in stock Hot Rod Deluxes. The red labels
have the least amount of breakup, meaning the most clean headroom, and are numbered between
8 and 10. They're for really clean playing, or for someone who only uses the clean channel with a
distortion pedal.</p>
<p class="bottom-space">With the exception of the 6L6GE, Groove Tubes does not make their own tubes. We can clearly
see this tube was made by Sovtek; Groove Tubes just slapped their logo overtop of it. They are a
tube matching service. Buying a set from GTs will cost you more than buying a matched set from
pretty much anyone else. In my opinion, it is not worth it. There are many great sites that sell the
same tubes as GTs, and cost a lot less.</p>
<figure class="content100"><img src="img/groove-tube.jpg" alt="groove tube"><figcaption>A white labeled Groove Tube.</figcaption></figure>
<div class="clear"></div>
<p class="space-top">Note that GT no longer uses the color coded system. They now use a "hardness" rating between 1
and 10. Power tubes with a "1" rating break up the earliest, and those with "10" are the cleanest.
This number will be on a sticker at the base of the power tubes.</p>
      	</div>
      	<h2 class="question">Why Hot Rod makes a loud "pop" when switching channels? Help!</h2>
	      <div class="answer">
	        <p>The popping sound is normal. Everyone I've talked with has experienced it, though only at low
volumes. When the amp is turned down the pop is commonly heard, including in my amp, but at
loud volumes you should not be able to hear it. I know of no ways to correct this.</p>
      	</div>
      	<h2 class="question">My Hot Rod isn't nearly as loud as it used to be! Help!</h2>
	      <div class="answer">
	        <figure class="content100"><img src="img/correct-speaker-jack.jpg" alt="correct speaker jack"></figure>
	        <div class="clear"></div>
		     <p class="top-space">This is a complaint that I often hear. The reason it's sometimes difficult to resolve is because
there are so many different things that can cause a loss of volume.</p>
<p>Often times people will mess around with speaker and accidently plug into the wrong speaker
jack. This isn't dangerous, but it will cause a great deal of volume loss. The internal speaker
should be plugged into the <em>internal speaker jack</em>, the one on the left, and NOT the <em>external
speaker</em> jack on the right. (See above picture.) If we plug into the external speaker jack the
volume will go <em>way</em> down.</p>




<p>"But what if that's not the problem?"</p>
<p>Take it to a tech. If, and only if, you're technically inclined and have good problem solving skills,
then you could try the following steps to resolving the problem. (I do not go into a lot of detail,
like safety and the such, because I assume you already know all that stuff.)</p>

<p>Plug your guitar into the "Power Amp In" of the effects loop. Is there still a big loss of volume?
(Note that plugging into the <em>Power Amp In</em> will not be as loud as plugging into the input jacks,
though it should be obvious whether you can still hear the problem.) Remember, the effects loop
is placed between the Preamp and Power Amp! If the amp sounds normal when plugged into the
effects loop, then the problem is in the <em>preamp</em>; else, if you still hear a big loss of volume, then
the problem is in the <em>power amp</em>! Most of the time the problem is in the power amp, though my
Hot Rod once had this problem and it was in the preamp.</p>
<p>Always assume the tubes, as they cause the vast majority of problems in tube amps. This is why
tubes are only used in a select few products. For this reason, you should always keep a spare set
of tubes around (for all your amps) for whenever a problem appears. Most of the time it will be a
bad tube.</p>
<p>Trouble Shooting the Preamp: If you have an oscilloscope and a function generator, then this
should be very easy for you. For the rest of us, you'd be surprised by how much you can do with
just an electronic multimeter and the schematic. Is the problem only in the Drive channel? Then
the problem is around V2B, turn the amp off, drain the filter caps, and check the continuity of
parts around V2B. Simple enough. Often times when we check the plate voltage of the preamp
tubes, we'll hear a "pop" as the red probe touches the solder joint—this is normal. If you check
the plate voltage of a certain gain stage, and you read zero volts, then a plate load resistor has
come open, and we've found our problem.</p>
<p>Check the plate voltage of V2A, if you hear a loud/clear "pop" then the problem is <em>before</em> V2A—
check V1B for the same thing and keep going back until there's no "pop"—or until it's very quiet.
Once you've figured out which gain stage the problem is located in, check the continuity of all the
parts in that gain stage—sometimes a trace or solder joint has just come open. I was able to
isolate the problem all the way down to a relay (K1), which lost its ability to make contact with
its internal conductor. What I was hearing through the speaker was an "echo" of the signal,
caused by less-than-perfectly decoupled gain stages.</p>
<p>Trouble Shooting the Power Amp: There are usually a couple things that cause a loss of volume
in the power amp. The first is a shorted tube, which are known to char the screen resistors. I
documented such a case in the <a href="/Problem-Solved!.pdf">Problems Solved area</a>. The
other is the 82K resistor on the phase inverter coming open, so that only one power tube is
working. I also documented such a case in the <a href="/Problem-Solved!.pdf">Problems Solved area</a>. Another, though very rare case, would be a damaged/shorted output
transformer. You should be able to tell if there's a short in the OT by checking the plate voltages,
and then checking if there's any DC voltage on the secondary—which there should not be. The
last resort would be a blown speaker.</p>
      	</div>

      	<h2 class="question">How do I replace a blown jewel light?</h2>
	      <div class="answer">
	        <p>Okay, I know this is pretty obvious. The main question is what kind of bulb to replace it with and
where to get it. You can find the bulb at your local RadioShack. It's a #47 bayonet lamp, and two
cost about US$1.50.</p>
<p class="bottom-space">There's not much to replacing the bulb, but if it's your first time it may be a little tricky. First, you
unscrew the jewel cover. Second, you push down on the bulb because there's a spring underneath
it. Third, you twist it with your finger in a counter-clockwise motion. The bulb will pop out. If
you have trouble getting hold of the bulb, then use a piece of duct tape to help you get some grip.
When you replace it just push it down and turn it clockwise. NOTE: If you want a different color
jewel cover, you can get them from AES under "Guitar Amp Parts" --> "Jewels, Etc.." (They cost
under US$2 each.) I've heard that purple was the coolest looking, but when mine lit up it looked
pink! ;)</p>
<figure class="content50"><img src="img/jewel-light-1.jpg"></figure>
<figure class="content50"><img src="img/jewel-light-2.jpg"></figure>
<div class="clear"></div>
<figure class="content50"><img src="img/jewel-light-3.jpg"></figure>
<figure class="content50"><img src="img/jewel-light-4.jpg"></figure>
<div class="clear"></div>
      	</div>
      	<h2 class="question">My Hot Rod has foam around the tubes. Should I remove it?</h2>
	      <div class="answer">
	        <p>No. The grey foam is there to prevent high frequency oscillations and microphonics caused by
speaker vibration. It's there to stabilize the tube, and was added shortly after Mexico started
manufacturing HRDs in the Summer of 2002. The foam is also a fireproof material and leaving it
in will not cause any damage to your HRD. In fact, removing it is probably a bad idea as I've
heard someone report "ringing sounds" after they removed their foam. So leave yours in!</p>
      	</div>
      	<h2 class="question">Can I turn my HRDx into a head?</h2>
	      <div class="answer">
	        <figure class="content100"><img src="img/hot-rod-head.jpg"><figcaption>Photo courtesy of Doug Stalters</figcaption></figure>
	        <div class="clear"></div>
	        <p class="top-space">This question has come up quite a few times. Obviously it can be done, but it'll take a bit of
elbow grease. Firstly you must relocate all the tubes behind the chasis. You'll have to make room
for them, so expect to move the output transformer and choke. It'd also be a good idea to plug up
those old tube sockets. Doug at Vintone has pulled this one off. Above is a picture of the final product. Though it would be much simpler (and less expensive) to just use the
extension speaker out, and hook it to an external cabinet.</p>
      	</div>
      	<h2 class="question">What are the differences between the Hot Rod Deluxe and Blues Deluxe? By Steve Dallman</h2>
	      <div class="answer">
	        <p>The two are similar in some ways and quite different in others. The obvious differences are the
drive channel and "more" drive. Both amps are sort of takes on a 59 Bassman according to Fender
with the added drive, reverb and effects loop. That may be a stretch. "Normal" Fenders, such as
'black face' and 'silver face' Twins, Bandmasters, Bassmans, Deluxe Reverbs and the like have a
gain stage, the tone stack (which introduces a lot of signal loss) and then a recovery gain stage.
From there there will be a mixing stage for the channels and reverb and on to the power amp.</p>
<p>In the BD and HRD there are 2 gain stages preceding the tone stack. This helps create the blusier
preamp breakup similar to a 59 Bassman. The tone stacks are sort of a cross between a 59
Bassman and a standard Fender. Next comes the drive stage. In the BD it is a rather anemic single
tube stage. In the HRD both halves of V2 are used. In the BD there is half a tube unused. How
much you like the distortion in either amp is really a matter of taste.</p>
<p>The first stages are classic Fender except the BD uses a 22uf cathode bias cap while the HR uses
a larger 47uf, which will create a bit more low end.</p>
<p>Coupling cap next is .01BD Vs .022 in HRD. Still a little more low end in the HR. The bright
switch in the BD is next. This is a non-standard Fender design, which bypasses a 100k resistor
with a 750pf cap. As the 100k resistor is attached to the 250k-volume control, it is only effective
in clean mode. The drive control in the HR is between the first and second stage.</p>
<p>The second stage is unbypassed in both amps. In the HR the bright switch is a .068 cathode
bypass cap that is non-functioning in drive mode.</p>
<p>The tone stack follows the second stage. They are identical except the HR uses a 130k mid slope
resistor, while the BD is 100k. This will create a little less low end in the HR.</p>
<p>The drive control precedes the 3rd stage in the BD, a standard Fender bypassed gain stage. The
3rd stage is used in both clean and drive in the BD.</p>
<p>In the HR the 3rd and 4th stages are used in drive only. This tube is unbypassed. In More drive a
1uf-bypass cap is switched in on the 3rd stage and a 22uf bypass cap is switched in on the 4th
stage. (The 4th stage is not used in the BD, but is just waiting to be modded in.)</p>
<p>Note on bypassing. The gain in a tube stage is set by 3 components, the plate resistor, (typically
100k in Fenders, larger for more gain) the cathode resistor, (typically 1.5k in Fenders, smaller for
more gain) and a bypass cap that bypasses the cathode resistor. The cathode cap is not always
used but when it is, it will increase gain in different frequency ranges. 22uf will increase gain
across the entire guitar spectrum. Smaller will only raise gain in higher frequencies.</p>
<p>The master for the drive channel follows in both amps. From there the amps are nearly identical,
except the HR has somewhat fuller reverb due to the design of the reverb return. (The reverb
circuit and the effects loop are solid state.) The HR has an extension speaker jack that uses the 4-
ohm speaker tap on the output transformer. The BD has this tap but it is not used (but could be
added by a tech.)</p>
<p>In general these amps are similar. The BD will not stay as clean at higher volumes due to the 3rd
stage always being active. The HR has "improved" distortion (drive) with "more drive" added.
The HR has fuller reverb and an extension speaker jack. Both are good designs with plenty of
classic Fender tone.</p>
      	</div>
	</div> <!-- end main div -->
	</article>
	</div> <!-- end doc container div -->
	<?php include("inc/inc_footer.php"); ?>