<footer>
	<div id="contact">
		<div class="row">
			<h2>Contact Us</h2>
			<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
				<div class="container">
					<div class="contLeft">
						<label><span class="ctc-hide">Name</span>
							<input type="text" name="name" placeholder="Name">
						</label>
						<label><span class="ctc-hide">Email</span>
							<input type="text" name="email" placeholder="Email">
						</label>
						<label><span class="ctc-hide">Number</span>
							<input type="text" name="phone" placeholder="Number">
						</label>	
					</div>
					<div class="contRight">
						<label><span class="ctc-hide">Message</span>
							<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
						</label>
					</div>
				</div>
				<label><span class="ctc-hide">Recaptcha</span></label>
				<div class="g-recaptcha"></div>
				<label class="prvcy">
					<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my submitted information so that they can respond to my inquiry.
				</label><br>
				<?php if( $this->siteInfo['policy_link'] ): ?>
				<label class="prvcy">
					<input type="checkbox" name="termsConditions" class="termsBox"/> I hereby confirm that I have read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
				</label>
				<?php endif ?>
				<button type="submit" class="ctcBtn" disabled>Submit</button>
			</form>
		</div>
	</div>
	<div id="info">
		<div class="row">
			<dl>
				<dt><img src="public/images/common/ftImg1.png" alt=""></dt>
				<dd>
					<span class="title">ADDRESS</span>
					<span class="desc"><?php $this->info("address");?></span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/ftImg2.png" alt=""></dt>
				<dd>
					<span class="title">CONTACT NUMBER</span>
					<span class="desc"><?php $this->info(["phone","tel"]);?></span>
				</dd>
			</dl>
			<dl>
				<dt><img src="public/images/common/ftImg3.png" alt=""></dt>
				<dd>
					<span class="title">EMAIL ADDRESS</span>
					<span class="desc"><?php $this->info(["email","mailto"]);?></span>
				</dd>
			</dl>
		</div>
	</div>
	<div id="footer">
		<hr>
		<nav>
			<ul>
				<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
				<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
				<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
				<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
				<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
				<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>privacy-policy#content">PRIVACY POLICY</a></li>
			</ul>
		</nav>
		<p class="copy">
			 <?php $this->info("company_name"); ?> © <?php echo date("Y"); ?>. All Rights Reserved. 
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


