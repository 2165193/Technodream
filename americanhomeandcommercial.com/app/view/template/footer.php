<footer>
	<div id="footerTop">
		<div class="row">
			<div class="container">
				<div class="row-1">
					<div class="imgBox">
						<img src="public/images/common/ftImg1.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg2.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg3.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg4.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg5.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg6.png" alt="">
					</div>
				</div>
				<div class="row-2">
					<div class="imgBox">
						<img src="public/images/common/ftImg7.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg8.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg9.png" alt="">
					</div>
					<div class="imgBox">
						<img src="public/images/common/ftImg10.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footerMid">
		<div class="row">
			<div class="cols col-1">
				<a href="<?php echo URL ?>"><img src="./public/images/common/mainLogo.png" alt="Main Logo" class="mainLogo"></a>
			</div>
			<div class="cols col-2">
				<p class="phone">CALL US:<span><?php $this->info(["phone","tel"]);?></span></p>
				<p class="email">EMAIL US:<span><?php $this->info(["email","mailto"]);?></span></p>
			</div>
			<div class="cols col-3">
				<p>
					FOLLOW US:
					<a href="<?php $this->info("fb_link"); ?>" target="_blank">f</a>
					<a href="<?php $this->info("gp_link"); ?>" target="_blank">g</a>
					<a href="<?php $this->info("li_link"); ?>" target="_blank">i</a>
					<a href="<?php $this->info("tb_link"); ?>" target="_blank">t</a>
					<a href="<?php $this->info("tt_link"); ?>" target="_blank">l</a>
				</p>
				<p>
					WE ACCEPT
					<img src="public/images/common/ftImg11.png" alt="">
					<img src="public/images/common/ftImg12.png" alt="">
					<img src="public/images/common/ftImg13.png" alt="">
					<img src="public/images/common/ftImg14.png" alt="">
				</p>
			</div>
		</div>
	</div>
	<div id="footerBot">
		<div class="row">
			<nav>
				<ul>
					<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
					<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
					<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
					<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
					<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT</a></li>
				</ul>
			</nav>
			<p class="copy">
				COPYRIGHT © <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?> All Rights Reserved. 
				<?php if( $this->siteInfo['policy_link'] ): ?>
					<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>. 
				<?php endif ?>
			</p>
			<p class="silver"><img src="public/images/scnt.png" alt="" class="company-logo" /><a href="https://silverconnectwebdesign.com/website-development" rel="external" target="_blank">Web Design</a> Done by <a href="https://silverconnectwebdesign.com" rel="external" target="_blank">Silver Connect Web Design</a></p>
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


