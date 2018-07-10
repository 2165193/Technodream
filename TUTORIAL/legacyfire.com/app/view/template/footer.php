<footer>
	<div id="footer">
		<div class="row">
			<p class="licence">NV Lic. #81357</p>
			<div class="footContent">
				<div class="footTop">
					<div class="left">
						<a href="<?php echo URL ?>"><img src="public/images/common/footLogo.png" alt="Legacy Fire Services Logo"></a>
					</div>
					<div class="right">
						<div style="width: 100%"><iframe width="100%" height="214" src="https://maps.google.com/maps?width=100%&amp;height=214&amp;hl=en&amp;q=1380%20Greg%20Street%2C%20Suite%20220%20Sparks%2C%20NV%2089431+(Legacy%20Fire%20Services)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><?php $this->info("address"); ?><a href="https://www.maps.ie/create-google-map/"></a></iframe></div><br />
					</div>
				</div>
				<div class="footMid">
					<div class="left">
						<img src="public/images/common/ftemail.png" alt="EMAIL">
						<p><?php $this->info(["email","mail"]); ?>
						<?php $this->info(["email2","mail"]); ?></p>
					</div>
					<div class="left2">
						<img src="public/images/common/ftphone.png" alt="PHONE">
						<p class="phone"><?php $this->info(["phone","tel"]); ?></p>
					</div>
					<div class="right">
						<img src="public/images/common/ftfax.png" alt="FAX">
						<p class="phone"><?php $this->info(["fax","tel"]); ?></p>
					</div>
					<div class="right2">
						<img src="public/images/common/ftlocation.png" alt="LOCATION">
						<p><?php $this->info("address"); ?></p>
					</div>
				</div>
				<div class="footBot">
					<p class="copy">
						COPYRIGHT© <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?> All Rights Reserved.
						<?php if( $this->siteInfo['policy_link'] ): ?>
							<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
						<?php endif ?>
					</p>
					<p class="silver"><img src="public/images/scnt.png" alt="" class="company-logo" /><a href="https://silverconnectwebdesign.com/website-development" rel="external" target="_blank">Web Design</a> Done by <a href="https://silverconnectwebdesign.com" rel="external" target="_blank">Silver Connect Web Design</a></p>

				</div>

			</div>
		</div>
	</div>
	<div id="footNav">
		<div class="row">
			<nav>
				<a href="#" id="pull"><strong>MENU</strong></a>
				<ul>
					<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services">SERVICES</a></li>
					<li <?php $this->helpers->isActiveMenu("projects"); ?>><a href="<?php echo URL ?>projects">PROJECTS</a></li>
					<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about">ABOUT US</a></li>
					<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery">GALLERY</a></li>
					<li <?php $this->helpers->isActiveMenu("faqs"); ?>><a href="<?php echo URL ?>faqs">FAQs</a></li>
					<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact">CONTACT US</a></li>
					<li <?php $this->helpers->isActiveMenu("apply-here"); ?>><a href="<?php echo URL ?>apply-here">APPLY HERE</a></li>
				</ul>
			</nav>
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
