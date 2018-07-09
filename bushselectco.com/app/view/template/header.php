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
				<div class="col1">
					<img src="public/images/common/logo.png" alt="">
				</div>
				<div class="col2">
					<div class="containerTop">
						<p class="email"><span>E-MAIL: </span><?php   $this->info(["email","mailto"]);?></p>
						<p class="phone"><span>CALL US: </span><?php $this->info(["phone1","tel"]);?> | <?php $this->info(["phone2","tel"]);?></p>
					</div>
					<div class="containerBot">
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
								<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about">ABOUT US</a></li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services">SERVICES</a></li>
								<li <?php $this->helpers->isActiveMenu("works"); ?>><a href="<?php echo URL ?>works">OUR WORKS</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact">CONTACT US</a></li>
							</ul>
						</nav>	
					</div>
				</div>
				<div class="col3">
					<div class="appointment">
						<a href="contact#content">SET APPOINTMENT</a>
					</div>
				</div>
			</div>		
		</div>
	</header>
	<div id="banner">
		<div class="row">
			<div class="container">
				<span>HELPING YOU AND YOUR HOME</span>
				<h2>Without a Shocking Experience</h2>
				<a href="contact#content">LEARN MORE</a>
			</div>
		</div>
	</div>