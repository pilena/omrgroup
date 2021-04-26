<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="posts">
			<div class="container pad-lg-t pad-xlg-b">
				<div class="row around">
					<div class="col-lg-7 section-posts__list-wrap">
						<div class="col-lg-8 col-sm-12">
							<h4 class="text-center-mobile"><?php _e( 'Latest Posts', 'focalpoint' ); ?></h4>
						</div>
						<?php get_template_part('loop'); ?>
					</div>
					<div class="col-lg-4 col-sm-5">
						<?php get_sidebar(); ?>
					</div>
					<?php get_template_part('pagination'); ?>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
