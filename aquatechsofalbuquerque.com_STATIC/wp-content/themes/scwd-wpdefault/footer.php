<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Default
 */

?>
	</div><!-- .site-content -->

	<?php get_template_part( 'template-parts/page/content', 'page-bottom' ); ?>

	<footer id="colophon" class="site-footer main">
		<div id="footerTop">
			<div class="container-fluid">
				<h2>CONTACT US</h2>
				<a href="<?php echo URL ?>"><img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftLogo.png" alt="Main Logo" class="mainLogo"></a>	
				<div class="container">
					<dl>
						<dt><img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg1.png" alt=""></dt>
						<dd>
							<?php if ( checkoption( 'address' ) ): 
								echo do_shortcode('[scwd_option var="address" type="link" text=""]');
							endif; ?>
							<div class="cols col-1">
								<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg4.png" alt="">
								<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg5.png" alt="">
								<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg6.png" alt="">
								<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg7.png" alt="">
								<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg8.png" alt="">
							</div>
						</dd>
					</dl>
					<dl>
						<dt><img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg2.png" alt=""></dt>
						<dd>
							<?php if ( checkoption( 'phone' ) ): 
								echo do_shortcode('[scwd_option var="phone" type="link" text=""]');
							endif; ?>
							<div class="cols col-2">
								<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg9.png" alt="">
							</div>		
						</dd>
					</dl>
					<dl>
						<dt><img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg3.png" alt=""></dt>
						<dd>
							<?php if ( checkoption( 'email' ) ): 
								echo do_shortcode('[scwd_option var="email" type="link" text=""]');
							endif; ?>
							<?php if ( checkoption( 'email2' ) ): 
								echo do_shortcode('[scwd_option var="email2" type="link" text=""]');
							endif; ?>
							<div class="cols col-3">
								<a href="" target="_blank"><img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/ftImg10.png" alt=""></a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<?php if ( has_nav_menu( 'bottom' ) ) : ?>
			<div class="navigation-bottom">
				<div class="container-fluid wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'bottom' ); ?>
					<div class="link">
						<a href="contact#content">GET A FREE ESTIMATE</a>
					</div>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

		<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>

	</footer>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
