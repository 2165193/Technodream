<div id="content">
	<div class="row">
		<div class="contTop">
			<h3>LICENSED • BONDED • INSURED</h3>
			<p class="license">LICENSE NO. 00933762</p>
		</div>
		<div class="border">
			<div class="contBot">
				<img src="public/images/content/arrowDown.png" alt="">
				<h1>Our Services</h1>
				<p>
					Your customized house cleaning can include but is not limited to the items below:
				</p>
				<div class="servBox">	
						<dl>
							<dt><img src="public/images/content/serviceImg1.png" alt=""></dt>
							<dd>House Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg2.png" alt=""></dt>
							<dd>New Construction Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg3.png" alt=""></dt>
							<dd>Window Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg4.png" alt=""></dt>
							<dd>Roof And Gutter Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg5.png" alt=""></dt>
							<dd>Grout Steam Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg6.png" alt=""></dt>
							<dd>Solar Panel Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg7.png" alt=""></dt>
							<dd>Pressure Washing</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg8.png" alt=""></dt>
							<dd>Blinds Cleaning</dd>
						</dl>
						<dl>
							<dt><img src="public/images/content/serviceImg9.png" alt=""></dt>
							<dd>Screen Repair</dd>
						</dl>
						<img src="public/images/content/personBg.png" alt="" class="person">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="contact">
	<div class="row">
		<div class="container">
			<img src="public/images/common/navDown.png" alt="">
			<h2>Contact Us</h2>
			<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
				<label><span class="ctc-hide">Name</span>
					<input type="text" name="name" placeholder="Name:">
				</label>
				<label><span class="ctc-hide">Location</span>
					<input type="text" name="address" placeholder="Location:">
				</label>
				<label><span class="ctc-hide">Email</span>
					<input type="text" name="email" placeholder="Email:">
				</label>
				<label><span class="ctc-hide">Phone</span>
					<input type="text" name="phone" placeholder="Phone:">
				</label>
				<label><span class="ctc-hide">Message</span>
					<textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>
				</label>
				<label><span class="ctc-hide">Recaptcha</span></label>
				<div class="g-recaptcha"></div>
				<label>
					<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
				</label><br>
				<?php if( $this->siteInfo['policy_link'] ): ?>
				<label>
					<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
				</label>
				<?php endif ?>
				<button type="submit" class="ctcBtn" disabled>SUBMIT FORM</button>
			</form>
		</div>
	</div>
</div>