<?php
/**
 * The template for displaying post content
 *
 * This template is called by both single posts as well as any page that
 * pulls lists of posts such as archives or search results
 *
 */
?>
<article class="post-<?php the_ID(); ?> <?php echo (is_single()) ? 'post-single' : 'post-listed'; ?>">

	<?php 
		//show H1 if on single post, or linked H2 if anywhere else (eg. archives)
		if (is_single()) : ?>
		<h1><?php the_title(); ?></h1>
	<?php else: ?>
		<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php endif; ?>

	<span class="post-info">Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo get_the_date('F j, Y'); ?></time> in 
	<?php 
	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	if($categories){
		foreach($categories as $category) {
			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
	echo trim($output, $separator);
	} 
	?></span>
	<p><?php 
		//show the full content if on single post, or the excerpt if anywhere else (eg. archives)
		echo (is_single()) ? get_the_content() : get_the_excerpt(); 
	?></p>
</article>