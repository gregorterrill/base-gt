<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 */
?>
<?php get_template_part('parts/header'); ?>

<section class="page-archives">

	<?php if ( have_posts() ): ?>

		<?php if (is_month() ) : ?>
			<h1>Archive: <?php echo get_the_date( 'F Y' ); ?></h1>
		<?php else : ?>
			<h1>Archive: <?php echo single_cat_title( '', false ); ?></h1>
		<?php endif; ?>

		<?php while ( have_posts() ) : the_post(); 
			get_template_part('parts/content-box');
		endwhile; ?>

	<?php else: ?>

		<h1>No posts to display in '<?php echo single_cat_title( '', false ); ?>'</h1>

	<?php endif; ?>

	<?php get_template_part('parts/pagination'); ?>

</section>

<?php get_template_part('parts/footer'); ?>