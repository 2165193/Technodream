<footer>
	<div id="footerTop">
		<div class="row">
			<a href="<?php echo URL ?>"><img src="./public/images/common/mainLogo.png" alt="Main Logo" class="mainLogo"></a>
			<div class="row-1">
				<dl>
					<dt><img src="public/images/common/ftTopImg1.png" alt=""></dt>
					<dd><?php $this->info("address");?></dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/ftTopImg2.png" alt=""></dt>
					<dd><?php $this->info(["phone","tel"]);?></dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/ftTopImg3.png" alt=""></dt>
					<dd><?php $this->info(["phone2","tel"]);?></dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/ftTopImg4.png" alt=""></dt>
					<dd><?php $this->info(["email","mailto"]);?></dd>
				</dl>
			</div>
			<div class="row-2">
				<div class="col-1">
					<dl>
						<dt><img src="public/images/common/ftTopImg5.png" alt=""></dt>
						<dd>Schedule</dd>
					</dl>
					<table>
					  	<tr>
					    	<th>Tuesday-Friday</th>
					    	<th>Saturday</th> 
					    	<th>Sunday</th>
					    	<th>Monday - Closed</th>
					 	 </tr>
					  	<tr>
					    	<td>11:00am to 02:30pm</td>
					    	<td>11:00am to 03:30pm</td>
					    	<td>11:00am to 03:30pm</td>
					    	<td></td>
					    	
					  	</tr>
					 	 <tr>
						    <td>05:00pm to 08:45pm</td>
						    <td>05:00pm to 09:00pm</td>
						    <td>05:00pm to 08:30pm</td>
						    <td></td>
					  	</tr>
					</table>
				</div>
				<div class="col-2">
					<p class="social">
						<img src="public/images/common/ftTopImg6.png" alt="">
						<img src="public/images/common/ftTopImg7.png" alt="">
					</p>
					<p class="desc">Catering services available and Private parties accepted</p>
				</div>
			</div>
		</div>
	</div>
	<div id="footerMid">
		<div class="row">
			<nav>
				<ul>
					<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("party"); ?>><a href="<?php echo URL ?>party#content">PARTY TRAYS</a></li>
					<li <?php $this->helpers->isActiveMenu("menu"); ?>><a href="<?php echo URL ?>menu#content">OUR MENU</a></li>
					<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
					<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
					<li <?php $this->helpers->isActiveMenu("directions"); ?>><a href="<?php echo URL ?>directions#content">DIRECTIONS</a></li>
					<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="footerBot">
		<div class="row">
			<p class="copy">
			 Copyright  © <?php echo date("Y"); ?>.<?php $this->info("company_name"); ?>. All Rights Reserved. 
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


