<div id="content">
	<div class="row">
		<div class="cols col-1">
			<div class="imgBox">
				<img src="public/images/content/contentImg1.jpg" alt="">
			</div>
		</div>
		<div class="cols col-2">
			<h1>HOME STAGING MAGIC</h1>
			<span>Proudly serving Boca Raton, FL and the surrounding area since 1998</span>
			<p>Welcome to Home Staging Magic! Proudly servicing Florida, owner and operator, Patty Koutcher takes great pride in her professionalism and customer satisfaction. Home Staging Magic offers high quality work performed by qualified professionals. For fast, reliable, and efficient service give us a call today. You will not be disappointed.</p>
			<a href="about#content" class="link">LEARN MORE</a>
		</div>	
	</div>
</div>
<div id="services">
	<div class="row">
		<h2>OUR SERVICES</h2>
		<div class="container">
			<dl>
				<dt><img src="public/images/content/serviceImg1.jpg" alt=""></dt>
				<dd><h4>HOME STAGING</h4></dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg2.jpg" alt=""></dt>
				<dd><h4>NEW VISION FOR EXSITING FURNITURE</h4></dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg3.jpg" alt=""></dt>
				<dd><h4>ALL ROOM</h4></dd>
			</dl>
		</div>
	</div>
</div>
<div id="testimonials">
	<div class="row">
		<div class="cols col-1">
			<h2>TESTIMONIALS</h2>
			<span class="sub">What they say about us...</span>
			<p class="star"><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
			<p class="desc">Patti came as a stranger, but she was just great!!! She was focused, she was delightful, she was warm to my wife and myself. I would use her again and since we are buying a new home, we will use her again. Her guidance, her thoughtfulness, her perception and use of colors and designs were just magnificant. A lot of people are missing the boat...these people are just great and they are a great investment!!! Patti is a Pro!!!</p>
			<a href="about#content" class="link">READ MORE</a>
		</div>
		<div class="cols col-2">
			<div class="container">
				<div class="imgBox">
					<img src="public/images/content/testiImg1.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/content/testiImg2.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/content/testiImg3.jpg" alt="">
				</div>
				<div class="imgBox">
					<img src="public/images/content/testiImg4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="contact">
	<div class="row">
		<h2>GET INTOUCH WITH US</h2>
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
			<div class="container">
				<div class="col-1">
					<label>
						<input type="checkbox" name="consent" class="consentBox"> I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
					</label><br>
					<?php if( $this->siteInfo['policy_link'] ): ?>
					<label>
						<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
					</label>
					<button type="submit" class="ctcBtn" disabled>Submit Form</button>
				</div>
				<div class="col-2">
					<label><span class="ctc-hide">Recaptcha</span></label>
					<div class="g-recaptcha"></div>
				</div>
			</div>
			<?php endif ?>
		</form>
	</div>
</div>
<div id="gallery">
	<div class="row">
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
	</div>
</div>



