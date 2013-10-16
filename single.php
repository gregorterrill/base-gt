<?php
/**
 * The Template for displaying all single posts
 *
 */
?>
<?php get_template_part('parts/header'); ?>

<section class="post-container">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post();

		get_template_part('parts/content-box');

	endwhile; ?>

</section>

<?php get_template_part('parts/footer'); ?>