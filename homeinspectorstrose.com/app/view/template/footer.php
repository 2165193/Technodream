<footer>
	<div class="row">
		<div class="footerTop">
			<div class="imgBox">
				<img src="public/images/common/footerPhoneIcon.png" alt="">
				<h3>CONTACT US</h3>
			</div>
			<div class="container">
				<div class="col col1">
					<span class="fl">Call Us Today</span>
					<div class="clearfix"></div>
					<div class="innerCont">
						<p>Given what’s at stake, you have every reason to get home and roof inspection. The best way for residents of St. Rose, LA to do this is to contact us at Morgan Home Inspection, LLC and don’t forget to ask us about out sewer drain inspection.</p>
						<a href="_blank">LEARN MORE</a>
					</div>
				</div>
				<div class="col col2">
					<div class="container">
						<span class="fl">Navigation</span>
						<div class="clearfix"></div>
						<div class="innerCont">
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">Home</a></li>
								<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">About Us</a></li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">Services</a></li>
								<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>works#content">Our Works</a></li>
								<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>testimonials#content">Testimonials</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">Contact Us</a></li>
							</ul>
							<div class="clearfix"></div>
							<p>
								<a href="<?php $this->info("fb_link")?>"><img src="public/images/common/hdImg1.png" alt=""></a>
								<a href="<?php $this->info("yp_link")?>"><img src="public/images/common/hdImg2.png" alt=""></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col col3">
					<div class="container">
						<span class="fl">Informations</span>
						<div class="clearfix"></div>
						<div class="innerCont">
							<div class="innerCont">
								<p><img src="public/images/common/footerImg1.png" class="first" alt=""><?php $this->info("address");?></p>
								<p><img src="public/images/common/footerImg2.png" alt=""><?php $this->info(["email","mailto"]);?></p>
								<p><img src="public/images/common/footerImg3.png" alt=""><?php $this->info(["phone","tel"]);?></p>
								<img src="public/images/common/infoImg.png" alt="" class="last">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
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


