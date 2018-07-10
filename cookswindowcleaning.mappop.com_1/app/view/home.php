<div id="content">
	<div class="row">
		<div class="cols col1">
			<h1>About us</h1>
			<h4>Proudly serving Phoenix, AZ and the surrounding area since 1989</h4>
			<p>Cooks Window Cleaning Service specializes in residential, commercial and construction cleanup. We clean windows, screens, tracks, fans, mirrors, and blinds. </p>
			<p>We are fast and reliable, and we always follow professional standards and offer affordable prices, along with free estimates! </p>
			<p class="cont">
				<a href="about#content">VIEW MORE</a>
				<span class="socials">
					<a href="<?php $this->info("fb_link")?>" class="fb">f</a>
					<a href="<?php $this->info("tt_link")?>" class="tt">l</a>
					<a href="<?php $this->info("gp_link")?>" class="gp">g</a>
					<a href="<?php $this->info("li_link")?>" class="li">i</a>
					<a href="<?php $this->info("yt_link")?>" class="yt">x</a>
				</span>
			</p>
		</div>
		<div class="cols col2">
			<img src="public/images/content/contentImg1.png" alt="">
			<img src="public/images/content/contentImg2.png" alt="">
		</div>
	</div>
</div>
<div id="details">
	<div class="row">
		<h2>We come to you – anytime anywhere</h2>
		<div class="container">
			<p class="bg">Certified Cleaning offers high quality <span>work performed by qualified professionals.</span></p>
			<p class="estimate"><a href="contact#content">FREE ESTIMATE</a></p>
		</div>
	</div>
</div>
<div id="what">
	<div class="row">
		<div class="col1">
			<h3>What We Do</h3>
			<p>Cooks Window Cleaning Service specializes in residential, commercial and construction cleanup. We clean windows, screens, tracks, fans, mirrors, and blinds. </p>
			<p>We are fast and reliable, and we always follow professional standards and offer affordable prices, along with free estimates! </p>
			<a href="services#content">VIEW MORE</a>
		</div>
		<div class="col2">
			<dl>
				<dt><img src="public/images/content/whatImg1.png" alt=""></dt>
				<dd>WINDOW CLEANING</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/whatImg2.png" alt=""></dt>
				<dd>COMMERCIAL</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/whatImg3.png" alt=""></dt>
				<dd>RESIDENTIAL</dd>
			</dl>
		</div>
	</div>
</div>
<div id="testimonials">
	<div class="row">
		<h3>Testimonials</h3>
		<div class="container">
			<div class="cols col1">
				<p class="title">Jovic <span><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""></span></p>
				<p class="desc">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				<p><a href="">VIEW MORE</a></p>
			</div>
			<div class="cols col2">
				<p class="title">Jordan <span><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""><img src="public/images/content/star.png" alt=""></span></p>
				<p class="desc">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				<p><a href="">VIEW MORE</a></p>
			</div>
		</div>
	</div>
</div>
<div class="contact">
	<div class="row">
		<h3>Get In Touch</h3>
		<span>Quality you deserve and dependability you can count on.</span>
		<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
			<label><span class="ctc-hide">Name</span>
				<input type="text" name="name" placeholder="Name">
			</label>
			<label><span class="ctc-hide">Email</span>
				<input type="text" name="email" placeholder="Email">
			</label>
			<label><span class="ctc-hide">Phone</span>
				<input type="text" name="phone" placeholder="Phone Number">
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
