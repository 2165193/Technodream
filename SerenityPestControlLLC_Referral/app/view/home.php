<div id="content">
	<div class="row">
		<dl>
			<dt><img src="public/images/content/contentImg1.png" alt=""></dt>
			<dd>
				<h2>Pest Control</h2>
				<p>Whether it’s for preventative maintenance or an active pest situation let the professionals at Serenity Pest Control solve it for you.</p>
			</dd>
		</dl>
		<dl>
			<dt><img src="public/images/content/contentImg2.png" alt=""></dt>
			<dd>
				<h2>Termite Control</h2>
				<p>We give you the assurance that will let you sleep at night knowing you are protected.</p>
			</dd>
		</dl>
	</div>
</div>
<div id="gallery">
	<div class="row">
		<h2>Common Household Invaders</h2>
		<div class="container">
			<dl>
				<dt><img src="public/images/common/galImg1.png" alt=""></dt>
				<dd>ANTS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg2.png" alt=""></dt>
				<dd>ROACHES</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg3.png" alt=""></dt>
				<dd>BEDBUGS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg4.png" alt=""></dt>
				<dd>RODENTS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg5.png" alt=""></dt>
				<dd>BEES</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg6.png" alt=""></dt>
				<dd>TERMITES</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg7.png" alt=""></dt>
				<dd>FLEAS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg8.png" alt=""></dt>
				<dd>SPIDERS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg9.png" alt=""></dt>
				<dd>MOSQUITOS</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/galImg10.png" alt=""></dt>
				<dd>TICKS</dd>
			</dl>
		</div>
	</div>
</div>
<div id="schedule">
	<div class="row">
		<h3>Whether its an active situation or preventative maintenance we have a schedule to fit your needs.
		</h3>
		<div class="container">
			<a href="contact#content">Weekly</a>
			<a href="contact#content">Bi-Weekly</a>
			<a href="contact#content">Monthly</a>
			<a href="contact#content">Quarterly</a>
		</div>
	</div>
</div>
<div id="about1">
	<div class="row">
		<div class="containerTop fl">
			<span>WELCOME TO</span>
			<h1>Serenity Pest Control LLC</h1>
			<p><span class="title">Serenity Pest Control LLC</span> is an integrity based company. Our goal at Serenity Pest Control is to provide our customers with the highest quality service possible while utilizing I.P.M. (Integrated Pest Management).</p>
			<a href="about#content">READ MORE</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="about2">
	<div class="row">
		<div class="containerBot fr">
			<h2>Green Mosquitos and Tick Services</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
			<a href="about#content">READ MORE</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="testimonials">	
	<div class="row">	
		<h2>TESTMONIALS</h2>
		<div class="container">	
			<div class="cols col1">	
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse hendrerit ligula quis velit pharetra egestas. Ut molestie elit non massa.</p>
				<span class="author">JOHN D.</span>
				<span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
				<div class="imgBorder">
					<img src="public/images/content/testiImg1.png" alt="">
				</div>
			</div>
			<div class="cols col2">	
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse hendrerit ligula quis velit pharetra egestas. Ut molestie elit non massa.</p>
				<span class="author">BRAD P.</span>
				<span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
				<div class="imgBorder">
					<img src="public/images/content/testiImg2.png" alt="">
				</div>
			</div>
			<div class="cols col3">	
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse hendrerit ligula quis velit pharetra egestas. Ut molestie elit non massa.</p>
				<span class="author">SMITH W.</span>
				<span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
				<div class="imgBorder">
					<img src="public/images/content/testiImg3.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="info">
	<div class="row">
		<h2>Serenity Pest Control LLC is a privately held company in Selden, NY and is a Single Location business. </h2>
	</div>
</div>
<div id="contactInfo">
	<div class="row">
		<img src="public/images/content/map.png" alt="">
		<img src="public/images/common/logo.png" alt="" class="logo">
		<div class="container">
			<div class="cols col1">
				<h5>Address:</h5>
				<span><?php $this->info("address");?></span>
			</div>
			<div class="cols col2">
				<h5>Email:</h5>
				<span><?php $this->info(["email","mailto"]);?></span>
			</div>
			<div class="cols col3">
				<h5>Owner:</h5>
				<span>Jason Wallace</span>
			</div>
			<div class="cols col4">
				<h5>Phone:</h5>
				<span><?php $this->info(["phone2","tel"]);?></span>
			</div>
		</div>
	</div>
</div>
<div id="contactForm">
	<div class="row">
		<h2>CONTACT FORM</h2>
		<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
			<div class="row-1">
				<label><span class="ctc-hide">Name</span>
					<input type="text" name="name" placeholder="Name:">
				</label>
				<label><span class="ctc-hide">Email</span>
					<input type="text" name="email" placeholder="Email:">
				</label>
				<label><span class="ctc-hide">Phone</span>
					<input type="text" name="phone" placeholder="Phone:">
				</label>
			</div>
			<label><span class="ctc-hide">Message</span>
				<textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>
			</label>
			<label><span class="ctc-hide">Recaptcha</span></label>
			<div class="g-recaptcha"></div>
			<label class="policy">
				<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
			</label><br>
			<?php if( $this->siteInfo['policy_link'] ): ?>
			<label class="policy">
				<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
			</label>
			<?php endif ?>
			<button type="submit" class="ctcBtn" disabled>SEND MESSAGE</button>
		</form>
	</div>
</div>
