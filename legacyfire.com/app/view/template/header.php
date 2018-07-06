<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="zxx" <?php $this->helpers->htmlClasses(); ?>>
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
	<div id="banner">
			<div class="row">
				<div class="containerTop">
					<div class="col1">
						<p>
							<img src="public/images/common/phoneIcon.png" alt="">
							<span class="desc">
								PHONE
							</span>
							<span class="phone">
								<?php $this->info(["phone1","tel"]);?>
								<?php $this->info(["phone2","tel"]);?>
								<?php $this->info(["phone3","tel"]);?>
							</span>
							<span class="loc">
								(MAIN OFFICE)
							</span>
						</p>
					</div>
					<div class="col2">
						<p class="social">
							<span>FOLLOW US</span>
							<a href="<?php $this->info("fb_link")?>">f</a>
							<a href="<?php $this->info("tt_link")?>">l</a>
							<a href="<?php $this->info("yt_link")?>">x</a>
							<a href="<?php $this->info("rr_link")?>">r</a>
						</p>
					</div>
				</div>
				<div class="containerBot">
					<img src="public/images/common/logo.png" alt="">
					<div class="innerCont">
						<h2>A LEADING EDGE COMPANY BUILT ON TRADITIONAL VALUES.</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<a href="contact#content">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
	<header>
		<div id="header">
			<div class="row">
				<nav>
					<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
						<li <?php $this->helpers->isActiveMenu("faq"); ?>><a href="<?php echo URL ?>faq#content">FAQs</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
					</ul>
				</nav>
			</div>		
		</div>
	</header>