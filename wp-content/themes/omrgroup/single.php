<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php $background = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
			<div class="post__top" style="background-image:url('<?php echo $background ?>');background-repeat:no-repeat;background-size:cover;background-position:center;">
			<div class="col-lg-5 pad-xlg-t margin-center text-center post__top-inner">
					<div>
						<span class="category overline <?php foreach((get_the_category()) as $category) {  echo $category->slug; } ?>"><?php foreach((get_the_category()) as $category) {  echo $category->cat_name . ' '; } ?></span>
						<span class="date"><?php the_time('M j, Y'); ?></span>
					</div>
					<!-- post title -->
					<h3>
						<?php the_title(); ?>
					</h3>
					<!-- /post title -->
				</div>
			</div>
			<div class="post__top-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php	// addbreadcrumbs ?>
			</div>
			<div class="container pad-sm-t pad-sm-b">
				<div class="row pad-xlg-b">
					<div class="col-lg-8 posts__list-wrap">	
						<div class="col-lg-9 col-md-12">
							<div class="social">
								<p>Share article</p>
								<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank"><i class="ri-facebook-box-fill"></i> Facebook</a>
								<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;hashtags=ICTHUBVENTURE" target="_blank"><i class="ri-twitter-fill"></i>Twitter</a>
								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank"><i class="ri-linkedin-box-fill"></i>Linkedin</a>
								<a href="https://web.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank"><i class="ri-whatsapp-fill"></i>Whatsapp</a>
							</div>
							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_content(); // Dynamic Content ?>
								<div class="post__author">
									<div>
										<img src="" height="64" width="64" alt="author">
									</div>
									<div>
									<span class="author"><span><?php _e( 'Author', 'FocalPoint' ); ?></span> <h5><?php _e('Della Mayer'); ?></h5></span>
										<a href="" target="_blank"><i class="ri-facebook-box-fill"></i></a>
										<a href="" target="_blank"><i class="ri-twitter-fill"></i></a>
										<a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
									</div>
								</div>

								<div class="post__tags">
									<?php the_tags( __( '<span class="post__tags-tag overline">Tagovi:</span><br> ', 'FocalPoint' ),('')); ?>
								</div>

								<!-- <p><?php _e( 'Categorised in: ', 'FocalPoint' ); the_category(', '); // Separated by commas ?></p> -->

							</article>
							<!-- /article -->
							<div class="social pad-sm-t">
								<p>Share article:</p>
								<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank"><i class="ri-facebook-box-fill"></i> Facebook</a>
								<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;hashtags=ICTHUBVENTURE" target="_blank"><i class="ri-twitter-fill"></i>Twitter</a>
								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank"><i class="ri-linkedin-box-fill"></i>Linkedin</a>
								<a href="https://web.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank"><i class="ri-whatsapp-fill"></i>Whatsapp</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 post__sidebar ">
						<div class="post__sidebar--wrap">
							<?php get_sidebar('single'); ?>
						</div>
						<div class="post__sidebar--wrap-alt">
											
							<div class="sidebar-widget">
							<h4 class="mar-none pad-md-t"><?php _e( 'Custom Posts')?></h4>
							<?php
								$related = get_posts( 
									array( 
										'post_type' => 'focal-point',
										// 'category__in' => wp_get_post_categories( $post->ID ), 
										'numberposts'  => 3, 
										// 'post__not_in' => array( $post->ID ) 
									) 
								);

								if( $related ) { 
									foreach( $related as $post ) {
										setup_postdata($post);
									?>
										<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<div class="posts__list-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');background-size:cover;background-position:center; height:200px;max-width:100%;">
										</div>
										</a>
										<?php endif; ?>
										<!-- post details -->
										<div style="margin:8px 0">
											<span class="category overline <?php foreach((get_the_category()) as $category) {  echo $category->slug; } ?>"><?php foreach((get_the_category()) as $category) {  echo $category->cat_name . ' '; } ?></span>
											<span class="date"><?php the_time('M j, Y'); ?></span>
											<span class="author"><?php _e( 'Published by', 'focalpoint' ); ?> <?php the_author_posts_link(); ?></span>
											<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'focalpoint' ), __( '1 Comment', 'focalpoint' ), __( '% Comments', 'focalpoint' )); ?></span>
										</div>
										<!-- /post details -->
										<!-- post title -->
										<h5>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h5>
										<!-- /post title -->
								<?php 	}
									wp_reset_postdata();
								}
											?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-11 col-md-12 prevnext__wrap margin-center">
						<div class="prevnext">
							<span><?php previous_post_link('<i class="ri-arrow-left-line"></i> %link','Prethodni članak', true);?></span>
							<span><?php next_post_link('%link <i class="ri-arrow-right-line"></i>', 'Sledeći članak', true); ?></span>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php else: ?>

		<?php endif; ?>
	</section>
	<!-- /section -->
	</main>



<?php get_footer(); ?>
