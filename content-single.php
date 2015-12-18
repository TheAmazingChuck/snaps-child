<?php
/**
 * @package Snaps
 * @since Snaps 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="single-content-wrap">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'snaps' ), 'after' => '</div>' ) ); ?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
