<?php /* Template Name: About Page Template */ get_header(); ?>

<main role="main">
	<!-- section -->
	<?php $backgroundImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
	<section id="section-omr" class="section section-omr" style="background: linear-gradient(180deg, rgba(1, 24, 51, 0) 31.72%, #011833 100%), url('<?php echo $backgroundImage[0] ?>');min-height:100vh;background-size:cover;background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 section-home__blocks">
					<div class="col-lg-7 col-xs-12 section-home__blocks-header">
						<img src="<?php echo get_template_directory_uri(); ?>/img/omr-big.svg" alt="Globos Logo">
					</div>
					<div class="col-lg-7 col-xs-12 section-home__blocks-text">
						<?php the_field('hero_text');?>
					</div>
					<div class="col-lg-7 col-xs-12 section-home__blocks-author">
						<img src="<?php echo get_template_directory_uri(); ?>/img/omr-ukras-levo.svg" alt="ukras">
						<span> Ostoja Mijailović </span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->

	<!-- SECTION TWO - TEXT -->
	<section id="section-about" class="section-small section-about">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-xs-12 section-logo__blocks text-justify">
					<?php the_field('about_text'); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION TWO - LOGOS -->

	<!-- SECTION THREE - COMPANIES -->
	<section id="section-about" class="section-about">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-xs-12 section-about__blocks">
					<?php if (have_rows('company_repeater')) : ?>
						<?php while (have_rows('company_repeater')) : the_row(); ?>
							<div class="col-lg-6 col-xs-12 section-about__blocks-pad text-justify">
								<img src="<?php echo get_template_directory_uri();the_sub_field('company_img') ?>" alt="Globos Logo">
								<p> <?php the_sub_field('company_description'); ?> </p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION THREE - COMPANIES -->

	<!-- SECTION FOUR - OSTOJA -->
	<section class="section-ost">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 section-about__ost">
					<div class="col-lg-7 col-xs-12" >
						<img src="<?php echo the_field('background_image');?>" alt="">
					</div>
					<div class="col-lg-5 col-xs-12 section-about__blocks-info section-about__ost-quote text-justify" >
						<h3><?php the_field('quote');?>	</h3>
						<div class="section-home__blocks-author">
							<img src="<?php echo get_template_directory_uri(); ?>/img/omr-ukras-levo.svg" alt="ukras">
							<span> Ostoja Mijailović </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION FOUR - OSTOJA -->

	<!-- SECTION FIVE  -->
	<section id="section-last" class="section-last">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-xs-12 section-last__blocks text-justify">
					<?php the_field('section_five_text'); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION FIVE -->

</main>

<?php get_footer(); ?>