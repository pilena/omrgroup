<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-lg-8 col-sm-12 pad-xxsm-b mar-xxsm-t mar-xxsm-b">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding:5px;">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="posts__list-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');background-size:cover;background-position:center;">
			</div>
			<?php endif; ?>
			<!-- post details -->
			<div class="posts__list-details">
				<span class="category overline <?php foreach((get_the_category()) as $category) {  echo $category->slug; } ?>"><?php foreach((get_the_category()) as $category) {  echo $category->cat_name . ' '; } ?></span>
				<span class="date"><?php the_time('M j, Y'); ?></span>
				<!-- 	<span class="author"><?php _e( 'Published by', 'focalpoint' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'focalpoint' ), __( '1 Comment', 'focalpoint' ), __( '% Comments', 'focalpoint' )); ?></span> -->
			</div>
			<!-- /post details -->
			<!-- post title -->
			<h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h4>
			<!-- /post title -->

			<?php focalpointwp_excerpt('focalpointwp_index'); // Build your custom callback length in functions.php ?>
				<a href="<?php the_permalink(); ?>" class="button button__round--small-primary-iconR "><?php _e('Read article') ?></a>
		</article>
		<!-- /article -->
	</div>
	<?php endwhile; ?>

	<?php else: ?>

<?php endif; ?>
