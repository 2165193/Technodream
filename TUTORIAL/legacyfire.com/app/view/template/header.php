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
			<div class="hdTop">
				<div class="row">
					<div class="phone">
						<img src="public/images/common/phone.png" alt="Phone Icon">
						<p> PHONE<span><?php $this->info(["phone","telto"]) ?></span> </p>
					</div>
					<div class="social">
						<p>FOLLOW US</p>
						<a href="#" class="socialico">f</a>
						<a href="#" class="socialico">l</a>
						<a href="#" class="socialico">x</a>
						<a href="#" class="socialico">r</a>
					</div>
				</div>
			</div>
			<div class="hdMid">
				<div class="row">
					<a href="<?php echo URL ?>"> <img src="" alt=""> <img src="public/images/common/mainLogo.png" alt="LEGACY FIRE SERVICE LOGO"> </a>
					<p>A LEADING EDGE COMPANY BUILT ON TRADITIONAL VALUES.</p>
				</div>
			</div>
			<div class="hdBot">
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

		</div>
	</header>

	<?php if($view == "home"):?>
		<div id="banner">
			<div class="row">
			</div>
		</div>
	<?php endif; ?>
