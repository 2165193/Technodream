<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="headerTop">
			<div class="row">
				<div class="container">
					<a href="home"><img src="public/images/common/logo.png" alt="" class="hdLogo"></a>
					<div class="email fl">
						<p>
							<img src="public/images/common/hdMailIcon.png" alt="">
							<span class="mail"><?php $this->info(["email","mailto"]);?></span>
						</p>
					</div>
					<div class="phn fr">
						<p>
							<img src="public/images/common/hdPhoneIcon.png" alt="">
							<span class="phone"><?php $this->info(["phone","tel"]);?></span>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div id="header">
			<div class="row">
				<nav>
					<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">Services</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a href="<?php echo URL ?>testimonials#content">Testimonials</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
					</ul>
				</nav>
			</div>		
		</div>
	</header>

	
	<div id="banner">
		<div class="bannerTop">
			<div class="row">
				<h2>Inspection & <span>Sampling</span></h2>
			</div>
		</div>
		<div class="bannerBot">
			<div class="row">
				<div class="container">
					<div class="bannerBotLeft fl">
						<span><a href="contact#content">FREE ESTIMATE</a></span>
					</div>
					<div class="bannerBotRight fr">
						<p class="ftSocial">
							<a href="<?php $this->info("fb_link")?>">f</a>
							<a href="<?php $this->info("tt_link")?>">l</a>
							<a href="<?php $this->info("yt_link")?>">x</a>
							<a href="<?php $this->info("rr_link")?>">r</a>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	