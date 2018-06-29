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
				<div class="container">
					<img src="public/images/common/logo.png" alt="">
					<div class="navbarLeft fl">
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
								<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
							</ul>
						</nav>
					</div>
					<div class="navbarRight fr">
						<nav>
							<ul>
								<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT</a></li>
								<li <?php $this->helpers->isActiveMenu("privacy-policy"); ?>><a href="<?php echo URL ?>privacy-policy#content">PRIVACY POLICY</a></li>
							</ul>
						</nav>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>		
		</div>
	</header>
	<div id="banner">
		<div class="bannerTop">
			<div class="row">
				<h2>GIVE US A CALL,<span>WE DO IT ALL!</span></h2>
				<div class="container">
					<img src="public/images/common/phoneIcon.png" alt="">
					<span class="phone"><?php $this->info(["phone","tel"]);?></span>
				</div>
			</div>
		</div>
		<div class="bannerBot">
			<div class="row">
				<dl>
					<dt><img src="public/images/common/bannerImg1.png" alt=""></dt>
					<dd>RESIDENTIAL</dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/bannerImg2.png" alt=""></dt>
					<dd>COMMERCIAL</dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/bannerImg3.png" alt=""></dt>
					<dd>NEW CONSTRUCTION</dd>
				</dl>
				<dl>
					<dt><img src="public/images/common/bannerImg4.png" alt=""></dt>
					<dd>MOVING</dd>
				</dl>
				<dl>
					<dt><a href="contact#content">FREE <span>ESTIMATE</span></a></dt>
					<dd></dd>
				</dl>
			</div>
		</div>
	</div>