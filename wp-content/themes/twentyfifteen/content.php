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
			<div class="col-xs-12 col-sm-7 no-padding-right">
				<h1 class="post-title no-margin">
					<?php the_title(); ?>
				</h1>
			</div>
			<div class="col-xs-12 col-sm-5">
				<div class="padding-top hidden-xs"></div>
				<p class="light small project-date no-margin"><?php the_date(); ?></p>
				<div>
					<?php $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
					if ( $categories_list && twentyfifteen_categorized_blog() ) {
						echo $categories_list;
					} ?>
				</div>
			</div>
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
