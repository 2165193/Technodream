<div id="content">
	<div class="row">
		<div class="cols col-1">
			<span>We Are Focused on Providing</span>
			<h1>High-Quality Service <span>& Customer Satisfaction</span></h1>
		</div>
		<div class="cols col-2">
			<div class="imgBox">
				<img src="public/images/content/contentImg1.png" alt="">
			</div>
		</div>

	</div>
</div>
<div id="services">
	<div class="row">
		<div class="container">
			<div class="col-1">
				<dl>
					<dt><img src="public/images/content/col1Img1.png" alt=""></dt>
					<dd>FLOORING CONTRACTOR</dd>
				</dl>
				<dl>
					<dt><img src="public/images/content/col1Img2.png" alt=""></dt>
					<dd>CARPET INSTALLATION</dd>
				</dl>
				<dl>
					<dt><img src="public/images/content/col1Img3.png" alt=""></dt>
					<dd>DESIGN SERVICES</dd>
				</dl>
			</div>
			<div class="col-2">
				<h2>OUR SERVICES</h2>
				<p>We would welcome the opportunity to earn your trust and deliver you the best service in the industry.</p>
			</div>
			<div class="col-3">
				<dl>
					<dt><img src="public/images/content/col3Img1.png" alt=""></dt>
					<dd>CUSTOM UPHOLSTERY</dd>
				</dl>
				<dl>
					<dt><img src="public/images/content/col3Img2.png" alt=""></dt>
					<dd>CUSTOM DRAPERY</dd>
				</dl>
				<dl>
					<dt><img src="public/images/content/col3Img3.png" alt=""></dt>
					<dd>TILE  INSTALLATION </dd>
				</dl>
			</div>
		</div>
		<a href="">DesignElements.biz</a>
	</div>
</div>
<div id="dynamics">
	<div class="row">
		<h2>Interior Dynamics</h2>
		<div class="container flex space-btw">
			<div class="cols col-1">
				<div class="imgBox">
					<img src="public/images/content/dynamicsImg1.png" alt="">
				</div>
			</div>
			<div class="cols col-2">
				<p>Our entire team is committed to meeting those needs. As a result, a high percentage of our business is from repeat customers.</p>
				<p>We hope you can find everything you need. Interior Dynamics is focused on providing high-quality service and customer satisfaction - we will do everything we can to meet your expectations. </p>
				<a href="about#content">READ MORE</a>
			</div>
		</div>
	</div>
</div>
<div id="about">
	<div class="row flex">
		<div class="cols col-1">
			<h2>About us</h2>
			<p>Our company is based on the belief that our customers’ needs are of the utmost importance. Our entire team is committed to meeting those needs. As a result, a high percentage of our business is from repeat customers and referrals. </p>
			<p>Dan Ammons is a flooring contractor offering 30 years of experience in Interior Products, Interior Specification, and Flooring Installation. His craftsmanship is well known in the Colorado Springs, Woodland Park and Park County areas. </p>
			<a href="about#content">READ MORE</a>
		</div>
		<div class="cols col-2">
			<div class="imgBox">
				<img src="public/images/content/aboutImg1.png" alt="">
			</div>
		</div>
	</div>
</div>
<div id="contactus">
	<div class="containerTop">
		<div class="row">
			<h2>CONTACT US</h2>
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
				<label><span class="ctc-hide">Message</span>
					<textarea name="message" cols="30" rows="10" placeholder="Message / Questions:"></textarea>
				</label>
				<label><span class="ctc-hide">Recaptcha</span></label>
				<div class="g-recaptcha"></div>
				<label class="ads">
					<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
				</label><br>
				<?php if( $this->siteInfo['policy_link'] ): ?>
				<label class="ads"> 
					<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
				</label>
				<?php endif ?>
				<button type="submit" class="ctcBtn" disabled>Submit Form</button>
			</form>
		</div>
	</div>
	<div class="containerBot">
		<div class="row">
			<div class="imgBox">
				<img src="public/images/common/contactusImg1.png" alt="">
			</div>
			<div class="imgBox">
				<img src="public/images/common/contactusImg2.png" alt="">
			</div>
			<div class="imgBox">
				<img src="public/images/common/contactusImg3.png" alt="">
			</div>
			<div class="imgBox">
				<img src="public/images/common/contactusImg4.png" alt="">
			</div>
			<div class="imgBox">
				<img src="public/images/common/contactusImg5.png" alt="">
			</div>
		</div>
	</div>
</div>
