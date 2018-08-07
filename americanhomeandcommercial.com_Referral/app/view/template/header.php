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
		<div id="header">
			<div class="row">
				<a href="<?php echo URL ?>"><img src="./public/images/common/mainLogo.png" alt="Main Logo" class="mainLogo"></a>
				<nav>
					<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
					</ul>
				</nav>
			</div>		
		</div>
	</header>

	<div id="banner">
		<div id="bannerTop">
			<div class="row">
				<div class="col-1">
					<h4>HEATING & <span>AIR CONDITIONING</span></h4>
					<span>We’re looking out for you</span>
				</div>
				<div class="col-2">
					<div class="cont1">
						<img src="public/images/common/phone.png" alt="">
					</div>
					<div class="cont2">
						<h5>General Information</h5>
						<h6>Contact Person:</h6>
						<span>Scott Russo</span>
						<p><?php $this->info(["phone","tel"]);?></p>
					</div>
				</div>
			</div>
		</div>
		<div id="values">
			<div class="row">
				<div class="container">
					<h4>Our Core Business Values</h4>
					<ul>
						<li>ACCOUNTABILITY</li>
						<li>HONOR</li>
						<li>INTEGRITY</li>
						<li>KNOWLEDGE</li>
						<li>FAIRNESS</li>
						<li>EXCELLENCE</li>
						<li>SUCCESS</li>
					</ul>
				</div>
			</div>
		</div>
	</div>