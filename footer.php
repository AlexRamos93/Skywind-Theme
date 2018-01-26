<!-- Footer Section -->
	<section class="footer-div">
		<div class="container menu-footer">
			<?php 
				$args = array(
				    'menu_class' => 'ul-footer'       
				);
				wp_nav_menu( $args ); 
			?>
			<p><?php echo Date('Y'); ?> Copyright <?php bloginfo('name');?></p>
			<img src="<?php bloginfo('template_url');?>/public/img/facebook-icon.png">
			<img src="<?php bloginfo('template_url');?>/public/img/twitter-icon.png">
			<img src="<?php bloginfo('template_url');?>/public/img/reddit-icon.png">
		</div>
	</section>

	<?php wp_footer(); ?>

</body>
</html>