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
	<header>
		<div id="header">
			<div class="row">
				<div class="container">
					<div class="containerLeft fl">
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
					<div class="containerRight fr">
						<p>
							<img src="public/images/common/hdIcon.png" alt=""><?php $this->info(["phone","tel"]);?>
						</p>
					</div>
					<div class="clearfix"></div>		
				</div>
			</div>		
		</div>
	</header>
	<div id="banner">
		<div class="bannerTop">
			<div class="row">
				<div class="container">
					<img src="public/images/common/icon.png" alt="">
					<h2>THOMAS</h2>
					<h3>CONSTRUCTION & <span>CONSULTING SERVICES</span></h3>
					<span class="construction">CONSTRUCTION</span>
					<p>BUILDING A BETTER TOMORROW</p>
				</div>
			</div>
		</div>
		<div class="bannerBot">
			<div class="row">
				<div class="container">
					<dl>
						<dt><img src="public/images/common/bannerImg1.png" alt=""></dt>
						<dd>
							<span>PRE-CONSTRUCTION</span>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
						</dd>
					</dl>
					<dl class="withBorder">
						<dt><img src="public/images/common/bannerImg2.png" alt=""></dt>
						<dd>
							<span>DESIGN - BUILD</span>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
						</dd>
					</dl>
					<dl class="withBorder">
						<dt><img src="public/images/common/bannerImg3.png" alt=""></dt>
						<dd>
							<span>PROJECT MANAGEMENT</span>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
