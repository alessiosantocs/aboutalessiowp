<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>


	<section class="section section-size-0">
		<div class="section-header row">
			<div class="col-sm-12 no-padding-right">
				<h1 class="h2 no-margin-top project-name">
					<?php
						if ( is_single() ) :
							the_title();
						else :
							the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
						endif;
					?>
				</h1>
			</div>
			<!-- <div class="col-xs-12 col-sm-5">
				<div class="padding-top hidden-xs"></div>
				<a href="#" class="link link-primary project-link">View this project live</a>
				<p class="light small project-date">Done when?</p>
			</div> -->
		</div>

		<div class="section-content">
			<div id="project-content">

				<?php
					if ( is_single() ) :
						/* translators: %s: Name of current post */
						the_content();
					else:
						the_excerpt();
					endif;
				?>

				<?php

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
				?>
			</div>
		</div>

	</section>


	<?php
		// Author bio.
		// if ( is_single() && get_the_author_meta( 'description' ) ) :
		// 	get_template_part( 'author-bio' );
		// endif;
	?>

	<?php //twentyfifteen_entry_meta(); ?>
	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>

</article><!-- #post-## -->
