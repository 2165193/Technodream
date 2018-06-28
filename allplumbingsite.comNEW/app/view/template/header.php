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
					<div class="hdTopLeft fl">
						<a href="home"><img src="public/images/common/mainLogo.png" alt="samp"></a>
					</div>
					<div class="hdTopRight fr">
						<p><img src="public/images/common/phoneIcon.png" alt=""><?php $this->info(["phone","tel"]);?></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="hdMid">
				<div class="row">
					<div class="hdMidLeft fl">
						<h2>QUALITY SERVICE<span>AT A FAIR PRICE.</span> </h2>
						<h4>I like to provide my service to you, to ensure satisfaction. </h4>
						<a href="_blank" class="btn">LEARN MORE</a>
					</div>
					<div class="hdMidRight fr">
						<p class="hdImgBox">
							<img src="public/images/common/ownerImg.png" alt="">
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="hdBot">
				<div class="hdBotSocial">
					<div class="row">
						<p><a href="home.php#content"><img src="public/images/common/navDown.png" alt=""></a></p>
						<p class="hdSocial">
							<a href="<?php $this->info("fb_link")?>">F</a>
							<a href="<?php $this->info("tt_link")?>">L</a>
							<a href="<?php $this->info("yt_link")?>">X</a>
							<a href="<?php $this->info("gp_link")?>">R</a>
						</p>
					</div>
				</div>
				<div class="hdBotNav">
					<div class="row">
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services">SERVICES</a></li>
								<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery">GALLERY</a></li>
								<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a href="<?php echo URL ?>testimonials">TESTIMONIALS</a></li>
								<li <?php $this->helpers->isActiveMenu("blog"); ?>><a href="<?php echo URL ?>blog">BLOG</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact">CONTACT US</a></li>
							</ul>
						</nav>
					</div>		
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):?>
		<div id="banner">
			<div class="row">
				<h1>BANNER</h1>
			</div>
		</div>
	<?php //endif; ?> -->