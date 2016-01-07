<?php
/**
 * @package Snaps
 * @since Snaps 1.0
 */
?>

<div class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-entry-header">
		<h1 class="article-entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="article-entry-content">
		<div class="article-single-content-wrap">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'snaps' ), 'after' => '</div>' ) ); ?>
		</div>
	</div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->
