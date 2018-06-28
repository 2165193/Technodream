  <div id="content">
	<div class="row">
		<div class="description fl">	
			<h3>WELCOME</h3>
			<h1>Cascade Mold Inspection</h1>
			<p class="first">Cascade Mold Inspection is a mold solutions agency established in Anacortes to serve the Northern Puget Sound area. At Cascade Mold Inspection we strive for excellence in offering fast, efficient, accurate and cost-effective mold analysis and removal.</p>
			<p>Cascade Mold Inspection inspects and tests for mold in accordance with generally accepted standards of mold inspection and sampling analysis.</p>
			<p>Cascade Mold Inspection conducts all biological remediation following guidelines established by the Institute of Inspection Cleaning and Restoration (IICRC). We also follow recommendations outlined in the US EPA: Mold Remediation in Schools and Commercial Buildings, Publication EPA 402-K-01-001</p>
			<p class="btn">
				<a href="services#content" class="btn1">READ MORE</a>
				<a href="contact#content" class="btn2">CONTACT US</a>
			</p>
		</div>
		<div class="contentLeft fr">
			<img src="public/images/common/contentSide.png" alt="">
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="experience">
	<div class="row">
		<div class="expLeft fl">
			<div class="fl">
				<img src="public/images/common/expImgLeft.png" alt="">
			</div>
			<div class="fr">
				<h3>over 13 years of experience</h3>
				<hr>
				<hr>
				<p>When it comes to protecting your home & health, experience matters.</p>
				<hr>
				<p class="expBtn"><a href="services#content" class="btn2">READ MORE</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="expRight fr">
			<p><img src="public/images/common/expImg1.png" alt=""></p>
			<p><img src="public/images/common/expImg2.png" alt=""></p>
		</div>
		<div class="clearfix"></div>
	</div>	
</div>
<div id="review">
	<div class="row">
		<div class="border">
			<div class="container">
				<h3>REVIEWS</h3>
				<span class="star">&bigstar;&bigstar;&bigstar;&bigstar;&bigstar;</span>
				<p><img src="public/images/common/revQuote.png" alt="" class="revQuote"> On time, thorough, not remotely patronizing. Sharp guy who knows his business. Certainly would hire him again, and i recommend him highly.
				<span>Peter S.</span>
				</p>
				<p class="botImg">
					<img src="public/images/common/revImg1.png" alt="">
					<img src="public/images/common/revImg2.png" alt="">
					<img src="public/images/common/revImg3.png" alt="">
					<img src="public/images/common/revImg4.png" alt="">
				</p>
			</div>
		</div>
	</div>
</div>
<div id="service">
	<div class="row">
		<div class="container">
			<h3>OUR SERVICES</h3>
			<div class="imgContain">
				<dl>
					<dt><img src="public/images/common/serviceImg1.png" alt=""></dt>
					<dd>Mold <span>Inspection</span></dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/serviceImg2.png" alt=""></dt>
					<dd>Mold <span>Remediation</span></dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/serviceImg3.png" alt=""></dt>
					<dd class="bold">Water Damage Consulting</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<div id="contact">
	<div class="row">
		<div class="container">
			<h2>CONTACT US</h2>
	
			<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
				<div class="innerCont">
					<label><span class="ctc-hide">Name</span>
						<input type="text" name="name" placeholder="Name:">
					</label>
					<label><span class="ctc-hide">Phone</span>
						<input type="text" name="phone" placeholder="Phone:">
					</label>
					<label><span class="ctc-hide">Email</span>
						<input type="text" name="email" placeholder="Email:">
					</label>
					<label><span class="ctc-hide">Location</span>
						<input type="text" name="email_confirm" placeholder="Location:">
					</label>
					<label><span class="ctc-hide">Message</span>
						<textarea name="message" cols="30" rows="10" placeholder="Message / Questions:"></textarea>
					</label>
					<label><span class="ctc-hide">Recaptcha</span></label>
					<div class="g-recaptcha"></div>
					<label>
						<input type="checkbox" name="consent" class="consentBox cb">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
					</label><br>
					<?php if( $this->siteInfo['policy_link'] ): ?>
					<label>
						<input type="checkbox" name="termsConditions" class="consentBox cb"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
					</label>
					<?php endif ?>
					<button type="submit" class="ctcBtn btn1" disabled>SUBMIT FORM</button>
				</div>
			</form>
		</div>
	</div>
</div>
