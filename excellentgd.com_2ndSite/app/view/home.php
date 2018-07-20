<div id="content">
	<div class="row">
		<div class="cols col-1">
			<div class="container">
				<span>WELCOME TO</span>
				<h1>EXCELLENT <span>GARAGE DOORS</span></h1>
				<p>We are a premier garage door repair and service company serving the Chicagoland area. We provide top quality service at a very reasonable price.</p>
				<p><span>Call us today at <?php $this->info(["phone","tel"]);?></span> to learn more about our services.</p>
			</div>
		</div>
		<div class=" cols col-2">
			<img src="public/images/content/contentImg1.png" alt="">
		</div>
	</div>
</div>
<div id="services">
	<div class="row">
		<div class="cont">
			<h2>SERVICES</h2>
		</div>
		<div class="container flex space-btw">
			<dl>
				<dt><img src="public/images/content/serviceImg1.jpg" alt=""></dt>
				<dd>
					<h4>RESIDENTIAL</h4>
					<span>SERVICES</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg2.jpg" alt=""></dt>
				<dd>
					<h4>COMMERCIAL</h4>
					<span>SERVICES</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg3.jpg" alt=""></dt>
				<dd>
					<h4>SPRING</h4>
					<span>REPLACEMENT</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/serviceImg4.jpg" alt=""></dt>
				<dd>
					<h4>24/7 EMERGENCY</h4>
					<span>SERVICES</span>
				</dd>
			</dl>
		</div>
	</div>
</div>
<div id="reviews">
	<div class="row flex space-btw">
		<div class="cols col-1">
			<div class="inner flex space-btw">
				<div class="imgBox">
					<h5>BEFORE</h5>
					<img src="public/images/content/reviewImg1.jpg" alt="">
				</div>
				<div class="imgBox">
					<h5>AFTER</h5>
					<img src="public/images/content/reviewImg2.jpg" alt="">
				</div>
			</div>
		</div>
		<div class="cols col-2">
			<div class="inner">
				<h2>REVIEWS</h2>
				<p class="star"><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>-STEVE</p>
				<p class="desc">Excellent Garage Door guys provided exceptional service. They came on time, cleaned all the area after work and price was very reasonable.</p>
				<p class="star"><span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>-JOHN</p>
				<p class="desc">I use the service of Excellent Garage doors for on going maintenance. I have been using them for the last 3 years and I am extremely satisfied</p>
				<a href="reviews#content" class="read">READ MORE</a>
			</div>
		</div>
	</div>
</div>
<div id="products">
	<div class="row">
		<h2>PRODUCTS</h2>
		<div class="container flex space-btw">
			<dl>
				<dt><img src="public/images/content/productsImg1.png" alt=""></dt>
				<dd>
					<h4>RESIDENTIAL</h4>
					<span>DOORS</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/productsImg2.png" alt=""></dt>
				<dd>
					<h4>RESIDENTIAL</h4>
					<span>OPENERS</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/productsImg3.png" alt=""></dt>
				<dd>
					<h4>COMMERCIAL</h4>
					<span>DOORS</span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/productsImg4.png" alt=""></dt>
				<dd>
					<h4>COMMERCIAL</h4>
					<span>OPENERS</span>
				</dd>
			</dl>
		</div>
	</div>
</div>
<div id="content2">
	<div class="content2Top">
		<div class="row">
			<h3>SAVE BIG WITH OUR COUPONS / DISCOUNTS</h3>
			<div class="container flex space-btw">
				<dl>
					<dt>
						<div>
							<p><span>$</span>100<span>off</span></p>
						</div>
					</dt>
					<dd>On All Single Garage Doors</dd>
				</dl>
				<dl>
					<dt>
						<div>
							<p><span>$</span>200<span>off</span></p>
						</div>
					</dt>
					<dd>On Double Car Steel Insulated Garage Doors, $100 off Single Door</dd>
				</dl>
				<dl>
					<dt>
						<div>
							<span>STARTING AS LOW AS</span>
							<p><span>$</span>199<span>+INSTALL</span></p>
						</div>
					</dt>
					<dd>On New Operators</dd>
				</dl>
				<dl>
					<dt>
						<div>
							<span>STARTING AS LOW AS</span>
							<p><span>$</span>149</p>
						</div>
					</dt>
					<dd>Lubrication, Tune-up & Safety Inspection</dd>
				</dl>
				<dl>
					<dt>
						<div>
							<span>STARTING AS LOW AS</span>
							<p><span>$</span>89<span>+INSTALL</span></p>
						</div>
					</dt>
					<dd>Spring Repair</dd>
				</dl>
				<dl>
					<dt>
						<div>
							<p><span>$</span>99<span>only</span></p>
						</div>
					</dt>
					<dd>Get Nylon Rollers Make Your Door Quieter and Smoother</dd>
				</dl>
			</div>
		</div>
	</div>
	<div class="content2Bot">
		<div class="row">
			<h3>CALL US NOW! <?php $this->info(["phone","tel"]);?></h3>
		</div>
	</div>
</div>
<div id="contact">
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
				<textarea name="message" cols="30" rows="10" placeholder="Message / Question:"></textarea>
			</label>
			<div class="privacyform">
				<div class="col-1">
					<label>
						<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
					</label><br>
					<?php if( $this->siteInfo['policy_link'] ): ?>
					<label>
						<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
					</label>
				</div>
				<div class="col-2">
					<label><span class="ctc-hide">Recaptcha</span></label>
					<div class="g-recaptcha"></div>
				</div>
			</div>
			<?php endif ?>
			<button type="submit" class="ctcBtn" disabled>SUBMIT FORM</button>
		</form>
	</div>
</div>