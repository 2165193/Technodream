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
					<div class="col1">
						<img src="public/images/common/logo.png" alt="">
					</div>
					<div class="col2">
						<p><img src="public/images/common/phoneIcon.png" alt=""><?php $this->info(["phone","tel"]);?></p>
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
								<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
								<li <?php $this->helpers->isActiveMenu("pest"); ?>><a href="<?php echo URL ?>pest#content">PEST CONTROL</a></li>
								<li <?php $this->helpers->isActiveMenu("termite"); ?>><a href="<?php echo URL ?>termite#content">TERMITE CONTROL</a></li>
								<li <?php $this->helpers->isActiveMenu("bed"); ?>><a href="<?php echo URL ?>bed#content">BED BUGS</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<div id="banner">
		<div class="row">
			<div class="containerLeft">
				<h3>INTEGRITY <span class="newLine1">BASED COMPANY</span><span class="newLine2">WITH OVER</span></h3>
				<h4>30 YEARS <span>OF SUCCESSFUL SERVICES</span></h4>
				<p>Call Serenity Pest Control LLC Today for a thorough evaluation of your problem, and our recommended solution. </p>
				<p class="estimate">
					<a href="">FREE ESTIMATE</a>
				</p>
			</div>
			<div class="containerRight">
				<h4>RESIDENTIAL <span>&</span> COMMERCIAL</h4>
			</div>
		</div>
	</div>