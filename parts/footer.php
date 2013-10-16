	
	</div> <!-- /main -->

	<footer class="full">
		<div class="bound">
			<div class="foot-widget"><?php dynamic_sidebar('sidebar-footer'); ?></div>
			<div class="copyright">
				<p><a href="<?php echo home_url(); ?>/terms-of-use/">Terms Of Use</a> | <a href="<?php echo home_url(); ?>/privacy-policy/">Privacy Policy</a></p>
			    <p>&copy; All rights reserved 2012-<?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			</div>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
	</body>
</html>