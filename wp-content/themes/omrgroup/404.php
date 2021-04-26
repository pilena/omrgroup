<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>
		<div class="container-fluid">
			<div class="container">
				<div class="col-lg-12" style="height:100vh;">
				<!-- article -->
				<div id="post-404" class="text-center" style="display: flex;justify-content: center;height: 100vh;flex-flow: column;">

					<h1><?php _e( 'Page Not Found', 'focalpoint' ); ?></h1>
					<h2>
						<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'focalpoint' ); ?></a>
					</h2>

				</div>
				<!-- /article -->
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->
	</main>
<?php get_footer(); ?>
