<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */
?>
<?php get_template_part('parts/header'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="page-container page-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	</section>

<?php endwhile; ?>

<?php get_template_part('parts/footer'); ?>