<div id="content">
	<div id="contentTop">
		<div class="row">
			<dl>
				<dt><img src="public/images/content/contentTopImg1.png" alt=""></dt>
				<dd>
					<h5>Heating & Air Conditioning</h5>
					<span>Professional HVAC service</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/contentTopImg2.png" alt=""></dt>
				<dd>
					<h5>Get a Free Quote</h5>
					<span>Send us photo of a problem</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/contentTopImg3.png" alt=""></dt>
				<dd>
					<h5>Contact Us</h5>
					<span><?php $this->info(["phone","tel"]);?></span>
				</dd>
			</dl>
		</div>
	</div>
	<div id="contentBot">
		<div class="row">
			<div class="container">
				<div class="inner">
					<span>WELCOME TO</span>
					<h1>AMERICAN HOME AND COMMERCIAL SERVICES, LLC</h1>
					<p>American Home and Commercial Services, LLC is the new face of a family owned and operated company that has been around since 1989. Our business mission is to serve the Greater Austin area by providing quality, timely and affordable services for all your home comfort needs. We specialize in heating and air conditioning (HVAC), but we are also expanding our services in order to build an even stronger partnership with our customers </p>
					<a href="about#content">LEARN MORE ABOUT US</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about">	
	<div class="row">
		<div class="row-1">
			<h2>About Us</h2>
			<p>AHCS is a family owned and operated company with 25 years of experience in AC repair & installation that exists to serve the Greater Austin area by providing quality, timely and affordable services for all your home comfort needs. We specialize in heating and air conditioning (HVAC), but we have recently expanded our services to include home repair and remodel, commercial refrigeration and restaurant equipment repair.</p>
		</div>
		<div class="row-2">
			<dl>
				<dt><img src="public/images/content/aboutImg1.png" alt=""></dt>
				<dd>ACCOUNTABILITY</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/aboutImg2.png" alt=""></dt>
				<dd>HONOR</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/aboutImg3.png" alt=""></dt>
				<dd>INTEGRITY</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/aboutImg4.png" alt=""></dt>
				<dd>KNOWLEDGE</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/aboutImg5.png" alt=""></dt>
				<dd>FAIRNESS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/aboutImg6.png" alt=""></dt>
				<dd>EXCELLENCE</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/aboutImg7.png" alt=""></dt>
				<dd>SUCCESS</dd>
			</dl>
		</div>
	</div>
</div>
<div id="services">
	<div class="row">
		<div class="col-1">
			<h3>WHAT WE OFFER<span>OUR SERVICES</span></h3>
		</div>
		<div class="col-2 fr">
			<div class="containerTop fr">
				<p>We provide full HVAC services <span>Give us a call today to schedule an appointment</span></p>
				<p class="phone">CALL US TODAY<span><?php $this->info(["phone","tel"]);?></span></p>
			</div>
			<div class="clearfix"></div>
			<div class="containerBot">
				<dl>
					<dt><img src="public/images/common/serviceImg1.jpg" alt=""></dt>
					<dd>SERVICE</dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/serviceImg2.jpg" alt=""></dt>
					<dd>INSTALLATION</dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/serviceImg3.jpg" alt=""></dt>
					<dd>MAINTENANCE</dd>
				</dl>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="gallery">
	<div class="row">
		<div class="col-1">
			<span>RECENT WORKS</span>
			<h2>OUR GALLERY</h2>
			<div class="container">
				<div class="imgBox">
					<img src="public/images/common/galleryImg1.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/galleryImg2.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/galleryImg3.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/galleryImg4.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/galleryImg5.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/common/galleryImg6.jpg" alt="">
				</div>
			</div>
			<a href="gallery#content">VIEW GALLERY</a>
		</div>
		<div class="col-2">
			<div class="container">
				<span>LET US KNOW WHAT YOU NEED</span>
				<h2>CONTACT US</h2>
				<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
					<label><span class="ctc-hide">Name</span>
						<input type="text" name="name" placeholder="Name:">
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
					<button type="submit" class="ctcBtn" disabled>Submit Form</button>
				</form>
			</div>
		</div>
	</div>
</div>
