<footer>
	<div id="contactInfo">
		<div class="row">
			<dl>
				<dt><img src="public/images/content/contactImg1.png" alt=""></dt>
				<dd><?php $this->info(["email","mailto"])?></dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/contactImg2.png" alt=""></dt>
				<dd><?php $this->info(["phone","tel"])?></dd>
			</dl>
			<dl>
				<dt><img src="public/images/content/contactImg3.png" alt=""></dt>
				<dd><?php $this->info("address")?></dd>
			</dl>
		</div>
	</div>
	<div id="footer">
		<div class="row">
			<div id="contact">	
				<div class="cols imgBox">
					<img src="public/images/common/logo.png" alt="">
				</div>
				<div class="cols container">
					<h3>CONTACT US</h3>
					<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
						<div class="rows">
							<label><span class="ctc-hide">Name</span>
								<input type="text" name="name" placeholder="Name:">
							</label>
							<label><span class="ctc-hide">Email</span>
								<input type="text" name="email" placeholder="Email:">
							</label>
						</div>
						<div class="rows">
							<label><span class="ctc-hide">Phone</span>
								<input type="text" name="phone" placeholder="Phone:">
							</label>
							<label><span class="ctc-hide">Address</span>
								<input type="text" name="address" placeholder="Address:">
							</label>
						</div>
						<label><span class="ctc-hide">Message</span>
							<textarea name="message" cols="30" rows="10" placeholder="Message / Questions:"></textarea>
						</label>
						<label><span class="ctc-hide">Recaptcha</span></label>
						<div class="g-recaptcha"></div>
						<label class="privacy">
							<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
						</label><br>
						<?php if( $this->siteInfo['policy_link'] ): ?>
						<label class="privacy">
							<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
						</label>
						<?php endif ?>
						<button type="submit" class="ctcBtn" disabled>Submit Form</button>
					</form>
				</div>
			</div>
			<div id="footerNav">
				<nav>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews">REVIEWS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact">CONTACT US</a></li>
						<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>privacy-policy">PRIVACY POLICY</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<p class="copy">
			© <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?> All Rights Reserved. 
			<?php if( $this->siteInfo['policy_link'] ): ?>
				<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>. 
			<?php endif ?>
		</p>
		<p class="silver"><img src="public/images/scnt.png" alt="" class="company-logo" /><a href="https://silverconnectwebdesign.com/website-development" rel="external" target="_blank">Web Design</a> Done by <a href="https://silverconnectwebdesign.com" rel="external" target="_blank">Silver Connect Web Design</a></p>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if( $this->siteInfo['cookie'] ): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	  "palette": {
	    "popup": {
	      "background": "#000"
	    },
	    "button": {
	      "background": "#3085d6"
	    }
	  }
	})});
	</script>
<?php endif ?>

<?php if(in_array($view,["home","contact"])): ?>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function() {
			$('.g-recaptcha').each(function(index, el) {
				grecaptcha.render(el, {'sitekey' : '<?php $this->info("site_key");?>'});
			});
		};

		$('.consentBox').click(function () {
		    if ($(this).is(':checked')) {
		    	if($('.termsBox').length){
		    		if($('.termsBox').is(':checked')){
		        		$('.ctcBtn').removeAttr('disabled');
		        	}
		    	}else{
		        	$('.ctcBtn').removeAttr('disabled');
		    	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

		$('.termsBox').click(function () {
		    if ($(this).is(':checked')) {
	    		if($('.consentBox').is(':checked')){
	        		$('.ctcBtn').removeAttr('disabled');
	        	}
		    } else {
		        $('.ctcBtn').attr('disabled', true);
		    }
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script type="text/javascript" src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display : 3, items_per_page : 10 });
		$('.fancy').fancybox({
			helpers: {
				title : {
					type : 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<?php $this->checkSuspensionFooter(); ?>
</body>
</html>


