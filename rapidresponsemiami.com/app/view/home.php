<div id="content">
	<div class="row">
		<div class="containerRight fr">
			<span>WELCOME</span>
			<h1>RAPID RESPONSE RESTORATION</h1>
			<p>Rapid Response Restoration of Miami specializes in flood restoration, water damage repair, fire restoration, and mold removal and cleanup in the Miami, Broward, and Palm Beach area. We are proud to provide high-speed drying methods and fast, reliable service. We work with all insurance companies and pride ourselves in our exceptional customer service. We service Residential, Commercial, and multi family properties. </p>
			<p class="links">
				<a href="contact#content" class="btn1">LEARN MORE</a>
				<a href="contact#content" class="btn2">FREE ESTIMATE</a>
			</p>
		</div>
		<div class="containerLeft fl">
			<div class="imgBox">
				<img src="public/images/content/contentImg1.png" alt="" class="img1">
				<img src="public/images/content/contentImg2.png" alt="" class="img2">
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="services">
	<div class="row">
		<div class="container">
			<dl>
				<dt><img src="public/images/common/serviceImg1.png" alt=""></dt>
				<dd>
					<p>
						<img src="public/images/common/serviceIcon1.png" alt="">
						<span>WATER AND FLOOD RESTORATION</span>
					</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/serviceImg2.png" alt=""></dt>
				<dd>
					<p>
						<img src="public/images/common/serviceIcon2.png" alt="">
						<span>FIRE AND SMOKE DAMAGE</span>
					</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/serviceImg3.png" alt=""></dt>
				<dd>
					<p>
						<img src="public/images/common/serviceIcon3.png" alt="">
						<span>MOLD CLEANUP REMEDIATION</span>
					</p>
				</dd>
			</dl>
		</div>
	</div>
</div>
<div id="business">
	<div class="row">
		<div class="containerLeft fl">
			<span>MEET THE BUSINESS OWNER</span>
			<h3>DANNY A.</h3>
			<p>Rapid Response Restoration of Miami specializes in flood restoration, water damage repair, fire restoration, and mold removal and cleanup in the Miami, Broward, and Palm Beach area. We are proud to provide high-speed drying methods and fast, reliable service. We work with all insurance companies and pride ourselves in our exceptional customer service. We service Residential, Commercial, and multi family properties. </p>
			<a href="contact#content" class="btn1">LEARN MORE</a>
		</div>
		<div class="containerRight fr">
			<img src="public/images/common/businessImg1.png" alt="">
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="reviews">
	<div class="row">
		<div class="container">
			<h2>REVIEWS</h2>
			<p>We had an unexpected drain line flood due to an old pipe corroding at our Miami condo while we were in NY for the month. Rapid Response Restoration was referred to us through our plumber. They showed up within 40 minutes of calling them and they were extremely professional and a pleasure to deal with during the restoration process. When it comes to water damage we definitely recommend this company. Thank You! - Bryan M.</p>
			<a href="home" class="btn1">READ MORE</a>
		</div>
	</div>
</div>
<div id="contact">
	<div class="row">
		<h2>CONTACT FORM</h2>
		<p>We will be glad to answer your questions, feel free to ask a piece of information or a quotation. We are looking forward to work with you.</p>
		<div class="container">
			<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
				<label><span class="ctc-hide">Name</span>
					<input type="text" name="name" placeholder="Name">
				</label>
				<label><span class="ctc-hide">Phone</span>
					<input type="text" name="phone" placeholder="Phone">
				</label>
				<label><span class="ctc-hide">Email</span>
					<input type="text" name="email" placeholder="Email">
				</label>
				<label><span class="ctc-hide">Confirm Email</span>
					<input type="text" name="email" placeholder="Confirm Email">
				</label>
				<label><span class="ctc-hide">Message</span>
					<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
				</label>
				<label><span class="ctc-hide">Recaptcha</span></label>
				<div class="g-recaptcha"></div>
				<label class="cont">
					<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
				</label><br>
				<?php if( $this->siteInfo['policy_link'] ): ?>
				<label class="cont">
					<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
				</label>
				<?php endif ?>
				<button type="submit" class="ctcBtn btn3" disabled>SUBMIT FORM</button>
			</form>
		</div>
	</div>
</div>



