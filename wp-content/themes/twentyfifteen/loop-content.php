		<div class="project">
			<div class="row">
				<div class="col-xs-12 col-sm-7">
					<a href="<?php echo get_the_permalink() ?>" class="link link-lg link-primary project-link">
						<?php the_title() ?>
					</a>
				</div>

				<div class="col-sm-5 text-right no-padding-left hidden-xs">
					<?php if (is_sticky()): ?>
						<span class="label label-sm label-warning">Featured post</span>
					<?php else: ?>
						<p class="project-date light no-margin">
							<?php the_date(); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-7">
					<p class="light margin-bottom project-description">
						<?php echo get_the_excerpt(); ?>
					</p>
				</div>

				<div class="col-sm-5 text-right no-padding-left hidden-xs small">
					<?php $categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
					if ( $categories_list && twentyfifteen_categorized_blog() ) {
						echo $categories_list;
					} ?>
				</div>
			</div>
		</div>
