<?php /* Template Name: Main Page Template */ get_header(); ?>

<main role="main">
	<!-- section -->
	<?php $backgroundImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
	<section id="section-one" class="section" style="background: linear-gradient(180deg, rgba(1, 24, 51, 0) 31.72%, #011833 100%), url('<?php echo $backgroundImage[0] ?>');min-height:100vh;background-size:cover;background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_content(); ?>
								<?php comments_template('', true); // Remove if you don't want comments 
								?>
								<br class="clear">
								<?php edit_post_link(); ?>
							</article>
							<!-- /article -->

						<?php endwhile; ?>

					<?php else : ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->

	<!-- SECTION TWO - ABOUT -->
	<section id="section-two" class="section-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">

				</div>
				<div class="col-lg-4">

				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION TWO - ABOUT -->

	<!-- SECTION THREE - SLIDER -->

	<section>
		<div class="container">
			<div class="row">
			</div>
		</div>
	</section>
	<!-- /SECTION THREE - SLIDER -->
</main>

<?php get_footer(); ?>