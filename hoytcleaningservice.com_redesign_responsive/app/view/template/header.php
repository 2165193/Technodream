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
				<div class="hdTop">
					<p><img src="public/images/common/mail-violet.png" alt="E-Mail"><span><?php $this->info(["email","mailto"]);?></span></p>
					<p><img src="public/images/common/phone-white.png" alt="Phone"><span><?php $this->info(["phone","tel"]);?></span></p>
				</div>
				<div class="hdBot">
					<nav>
						<a href="#" id="pull"><strong></strong></a>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
							<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">Services and Cleaning Tips</a></li>
							<li <?php $this->helpers->isActiveMenu("residential"); ?>><a href="<?php echo URL ?>residential#content">Residential</a></li>
							<li <?php $this->helpers->isActiveMenu("commercial"); ?>><a href="<?php echo URL ?>commercial#content">Commercial</a></li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
							<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY & Videos</a></li>
							<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>privacy-policy#content">Privacy Policy</a></li>
						</ul>
					</nav>
				</div>
			</div>		
		</div>
	</header>

	<?php if($view == "home"):?>
		<div id="banner">
			<div class="row">
				<img src="public/images/common/banner-img.jpg" alt="Banner Image">
				<div class="botBox">
					<div class="imgBox">
						<img src="public/images/common/satis-logo.png" alt="Satisfaction Guaranteed" class="left-logo">
					</div>
					<h2>Excellent Service at an Excellent Price</h2>
					<div class="imgBox">
						<img src="public/images/common/insured-logo.png" alt="Licensed Bonded Insured" class="right-logo">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>