<div id="testimonials">
	<div class="row">
		<div class="testiBox">
			<p>
				<img src="public/images/common/testiImg.png" alt="">
			</p>
			<div class="testiBoxCont">
				<p>
					I would highly suggest using Angel. He had great customer service from my first call to the end of his visit. He answered and returned calls quickly and gave me an exact time he was going to be there.  He even called to me me know he was running 15-20 minutes later than his original estimate.
				</p>
				<p class="testiName">
					ANGELA B.
				</p>
				<a href="testimonials" class="btn">READ MORE</a>
			</div>
			<img src="public/images/common/navLeft.png" alt="" class="testiLeft">
			<img src="public/images/common/navRight.png" alt="" class="testiRight">
		</div>
		<img src="public/images/common/testiLeft.png" alt="" class="testiTool">
	</div>
</div>
<div id="content">
	<div class="row">
		<h1>WELCOME</h1>
		<div class="cnLeft fl">
			<img src="public/images/content/cnImg.png" alt="">
		</div>
		<div class="cnRight fr">
			<p>
				Angel Miranda II, has over 20 years of experience working as a Plumber Contractor. Bonded, Licensed, and Insured through the State Of California.
			</p>
			<p>
				My experience in the Plumbing field, qualifies me to take any size project in which my Contractors License covers. In today’s world, it’s extemely important to hire a Licensed and Insured Contractor to avoid any unnecessary extra cost to the customer. 
			</p>
			<a href="about" class="btn">LEARN MORE</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="what">
	<div class="row">
		<h2>WHAT WE DO</h2>
		<div class="whatBox">
			<dl>
				<dt><img src="public/images/content/whatImg1.png" alt=""></dt>
				<dd>PLUMBING SERVICES</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/whatImg2.png" alt=""></dt>
				<dd>DRAIN CLEANING</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/whatImg3.png" alt=""></dt>
				<dd>WATER HEATER REPAIR</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/whatImg4.png" alt=""></dt>
				<dd>PIPE REPAIR</dd>
			</dl>
		</div>
		<a href="services" class="btn">LEARN MORE</a>
	</div>
</div>
<div id="contact">
	<div class="row">
		<h2>CONTACT FORM</h2>
		<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
			<label><span class="ctc-hide">Name</span>
				<input type="text" name="name" placeholder="Name:">
			</label>
			<label><span class="ctc-hide">Phone</span>
				<input type="text" name="phone" placeholder="Phone:">
			</label>
			<label><span class="ctc-hide">Email</span>
				<input type="text" name="email" placeholder="Email:">
			</label>
			<label><span class="ctc-hide">Confirm Email</span>
				<input type="text" name="email_confirm" placeholder="Confirm Email:">
			</label>
			<label><span class="ctc-hide">Message</span>
				<textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>
			</label>
			<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
			<div class="g-recaptcha"></div>
			<label>
				<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
			</label><br>
			<?php if( $this->siteInfo['policy_link'] ): ?>
			<label>
				<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
			</label>
			<?php endif ?>
			<button type="submit" class="ctcBtn btn" disabled>SUBMIT FORM</button>
		</form>
	</div>
</div>
<div id="gallery">
	<div class="row">
		<h2>OUR GALLERY</h2>
		<div class="galBox">
			<img src="public/images/content/galImg1.png" alt="">
			<img src="public/images/content/galImg2.png" alt="">
			<img src="public/images/content/galImg3.png" alt="">
			<img src="public/images/content/galImg4.png" alt="">
		</div>
	</div>
</div>