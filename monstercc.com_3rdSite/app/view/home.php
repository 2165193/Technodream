<div id="content">
	<div class="row">
		<div class="container">
			<div class="col-1">
				<span class="welcome">Welcome to</span>
				<h1>Monster <span>CommerCial Contractors</span></h1>
				<p>We specialize in Commercial Contracting which includes all trades from Mechanical, Electrical, <span>Plumbing, Steel Erection, and Cement to Framing, Drywall and Paint.</span></p>
				<p>We are located in El Paso, TX, however we have the ability to service the entire state of Texas. <span>I personally have experience in managing many different size projects from a simple small building to a multi-million dollar Charter School. Review our Projects & Experience List.</span></p>
				<div class="contact">
					<p class="learn">
						<a href="contact#content">Learn More</a>
					</p>
					<p class="contactInfo">
						<span>CALL US TODAY</span>
						<?php $this->info(["phone","tel"]);?>
					</p>
				</div>
			</div>
			<div class="imgBox">
				<img src="public/images/content/contentBg.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<div id="services">
	<div class="row">
		<h2>OUR SERVICES</h2>
		<img src="public/images/common/review.png" alt="" class="review">
		<div class="container flex space-btw">
			<dl>
				<dt><img src="public/images/content/serviceImg1.jpg" alt=""></dt>
				<dd>
					<h5>GENERAL CONTRACTOR</h5>
					<a href="contact#content">Learn more</a>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg2.jpg" alt=""></dt>
				<dd>
					<h5>COMMERCIAL CONSTRUCTION</h5>
					<a href="contact#content">Learn more</a>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg3.jpg" alt=""></dt>
				<dd>
					<h5>PROJECT MANAGEMENT</h5>
					<a href="contact#content">Learn more</a>
				</dd>
			</dl>
		</div>
	</div>
</div>
<div id="works">
	<div class="row">
		<div class="container">
			<h2>COMMERCIAL <span>SERVICES</span></h2>
			<div class="col-1 fl">
				<dl>
					<dt>
						<img src="public/images/common/worksImg1.png" alt="">
					</dt>
					<dd>Mechanical</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg2.png" alt="">
					</dt>
					<dd>Electrical</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg3.png" alt="">
					</dt>
					<dd>Plumbing</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg4.png" alt="">
					</dt>
					<dd>Steel Erection</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg5.png" alt="">
					</dt>
					<dd>Concrete Works</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg6.png" alt="">
					</dt>
					<dd>Framing</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg7.png" alt="">
					</dt>
					<dd>Drywall</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg8.png" alt="">
					</dt>
					<dd>Painting</dd>
				</dl>
				<dl>
					<dt>
						<img src="public/images/common/worksImg9.png" alt="">
					</dt>
					<dd>Flooring</dd>
				</dl>
			</div>
			<div class="col-2 fr">
				<span>LET US KNOW WHAT YOU NEED</span>
				<h3>CONTACT US</h3>
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
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div id="recentWorks">	
	<div class="row">	
		<h2>RECENT <span>WORKS</span></h2>
	</div>
</div>
<div id="content2">	
	<div class="row">	
		<div class="imgBox">	
			<img src="public/images/content/content2Img1.png" alt="">
			<img src="public/images/content/content2Img2.png" alt="">
			<img src="public/images/content/content2Img3.png" alt="">
		</div>
		<div class="container">	
			<a href="">View more</a>
		</div>
	</div>
</div>
