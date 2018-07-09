<footer>
	<div id="contact">
		<div class="row">
			<div class="bg">
				<h2>REQUEST QUOTE</h2>
			</div>
			<form action="sendContactForm" method="post"  class="sends-email ctc-form" >
				<div class="rows">
					<label><span class="ctc-hide">Name</span>
						<input type="text" name="name" placeholder="Name">
					</label>
					<label><span class="ctc-hide">Number</span>
						<input type="text" name="phone" placeholder="Number">
					</label>
				</div>
				<div class="rows">
					<label><span class="ctc-hide">Address</span>
						<input type="text" name="address" placeholder="Address">
					</label>
					<label><span class="ctc-hide">Email</span>
						<input type="text" name="email" placeholder="Email">
					</label>
				</div>
				<label ><span class="ctc-hide">Quote/Message</span>
					<textarea name="message" cols="30" rows="10" placeholder="Quote / Message"></textarea>
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
				<button type="submit" class="ctcBtn" disabled>SUBMIT FORM</button>
			</form>
		</div>
	</div>
	<div id="footer">
		<div class="row">
			<div class="cols col1">
				<h3>CONTACT US</h3>
				<p>Bush’s Electrical Co, has been in business since 1970 with over 50 years of experience. We specialize in professional electrical services. Our commitment is 100% guaranteed customer satisfaction on every project from start to finish. Call today for a free estimate.</p>
				<div class="socials">
					<p><a href="<?php $this->info("fb_link")?>" class="fb">f</a>
						<a href="<?php $this->info("tt_link")?>" class="tt">l</a>
						<a href="<?php $this->info("gp_link")?>" class="gp">g</a>
						<a href="<?php $this->info("li_link")?>" class="li">i</a>
						<a href="<?php $this->info("yt_link")?>" class="yt">x</a>
					</p>
					<p>
						<img src="public/images/common/info1.png" alt="">
						<img src="public/images/common/info2.png" alt="">
						<img src="public/images/common/info3.png" alt="">
						<img src="public/images/common/info4.png" alt="">
						<img src="public/images/common/info5.png" alt="">
					</p>
				</div>
			</div>
			<div class="cols col2">
				<h3>Navigation</h3>
				<nav>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("works"); ?>><a href="<?php echo URL ?>works">OUR WORKS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact">CONTACT US</a></li>
					</ul>
				</nav>	
			</div>
			<div class="cols col3">
				<h3>Get in Touch</h3>
				<div class="email">
					<img src="public/images/common/footerImg1.png" alt="">
					<span><?php $this->info(["email","mailto"]);?></span>
				</div>
				<div class="phone">
					<img src="public/images/common/footerImg2.png" alt=""><span>
					<p><?php $this->info(["phone1","tel"]);?> <span><?php $this->info(["phone2","tel"]);?></span></p>
				</div>
				<p class="copy">
					© <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?> All Rights Reserved. 
					<?php if( $this->siteInfo['policy_link'] ): ?>
						<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>. 
					<?php endif ?>
				</p>
				<p class="silver"><img src="public/images/scnt.png" alt="" class="company-logo" /><a href="https://silverconnectwebdesign.com/website-development" rel="external" target="_blank">Web Design</a> Done by <a href="https://silverconnectwebdesign.com" rel="external" target="_blank">Silver Connect Web Design</a></p>
			</div>
		</div>
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


