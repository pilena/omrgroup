<?php /* Template Name: Main Page Template */ get_header(); ?>

<main role="main">
	<!-- section -->
	<?php $backgroundImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
	<section id="section-hero" class="section section-hero" style="background: linear-gradient(180deg, rgba(1, 24, 51, 0) 31.72%, #011833 100%), url('<?php echo $backgroundImage[0] ?>');min-height:100vh;background-size:cover;background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 section-hero__blocks">
					<div class="col-lg-5 section-hero__blocks-block">
						<div class="section-hero__blocks-logo">
							<img src="http://omrgroup.test/wp-content/uploads/2021/04/bmotors-1.png" alt="">
						</div>
						<div class="section-hero__blocks-links">
							<span>OMR Group / Automotive </span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/hr.svg" alt="hr">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->

	<!-- SECTION TWO - ABOUT -->
	<section id="section-two" class="section section-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 section-about__blocks">
					<div class="col-lg-7 section-about__blocks-text">
						<?php the_field('about_text'); ?>
					</div>
					<div class="col-lg-4 section-about__blocks-info">
						<ul>
							<li><i class="ri-map-pin-line"> </i><span> www.britishmotors.rs </span></li>
							<li><i class="ri-phone-line"></i> <span> +381 11 413 4444 </span></li>
							<li><i class="ri-mail-line"> </i> <span> office@omrgroup.rs</span></li>
							<li><i class="ri-linkedin-box-fill "> </i> <span> linkedin.com</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION TWO - ABOUT -->

	<!-- SECTION THREE - SLIDER -->

	<section>
			<div id="slideshow">
				<div class="control" style="display:none">
					<button id="previous">&lt;</button>
					<button id="next">&gt;</button>
				</div>
				<ul id="slides" >
					<li id="firstSlide" class="slideActive" style="background:url('<?php echo get_template_directory_uri(); ?>/img/british-motors-slider-01.jpg');background-position:center;background-size:cover;">
						<div class="container">
							<div class="row">
								<div class="col-lg-9 col-md-12 slider-content text-left">
									
								</div>
							</div>
						</div>
					</li>
					<li id="secondSlide" style="background:url('<?php echo get_template_directory_uri(); ?>/img/british-motors-slider-02.jpg');background-position:center;background-size:cover;">
						<div class="container">
							<div class="row">
								<div class="col-lg-9 col-md-12 slider-content text-left">
									
								</div>
							</div>
						</div>
					</li>
					<li id="thirdSlide" style="background:url('<?php echo get_template_directory_uri(); ?>/img/british-motors-slider-03.jpg');background-position:center;background-size:cover;">
						<div class="container">
							<div class="row">
								<div class="col-lg-9 col-md-12 slider-content text-left">
									
								</div>
							</div>
						</div>
					</li>
					<li id="fourthSlide" style="background:url('<?php echo get_template_directory_uri(); ?>/img/british-motors-slider-04.jpg');background-position:center;background-size:cover;">
						<div class="container">
							<div class="row">
								<div class="col-lg-9 col-md-12 slider-content text-left">
									
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="pager">
					<ul id="pager">
						<!-- <li id="first" class="slideActive mar-xxsm-l mar-xxsm-r"><div data-tooltip="<?php ////pll_e('Manifest') ?>"><span></span><a href="javascript:void();"><?php ////pll_e('Manifest') ?></a></div></li>
						<li id="second" class="mar-xxsm-l mar-xxsm-r"><div data-tooltip="<?php ////pll_e('O nama') ?>"><span></span><a href="javascript:void();"><?php //pll_e('O nama') ?></a></div></li>
						<li id="third" class="mar-xxsm-l mar-xxsm-r"><div data-tooltip="<?php ////pll_e('Portfolio') ?>"><span></span><a href="javascript:void();"><?php //pll_e('Portfolio') ?></a></div></li>
						<li id="fourth" class="mar-xxsm-l mar-xxsm-r"><div data-tooltip="<?php ////pll_e('Share Center') ?>"><span></span><a href="javascript:void();"><?php //pll_e('Share Center') ?></a></div></li> -->
					</ul>
				</div>
				<div class="progressbar">
					<div>
						<div class="progressbar-progress"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>
<script>
	var slide = 0,
		slides = document.querySelectorAll('#slides > li'),
		pager = document.querySelectorAll('#pager > li'),
		numSlides = slides.length,
		pause = document.getElementById("slideshow"),

		currentSlide = function() {
		var itemToShow = Math.abs(slide % numSlides);
		[].forEach.call(slides, function(el) {
			el.classList.remove('slideActive')
		});
		[].forEach.call(pager, function(el) {
			el.classList.remove('slideActive')
		});
		slides[itemToShow].classList.add('slideActive');
		pager[itemToShow].classList.add('slideActive');
		resetProgress();
		resetInterval();
		},
		next = function() {
		slide++;
		currentSlide();
		},
		prev = function() {
		slide--;
		currentSlide();
		},	
		pause = function() {
		slide;
		currentSlide();
		},

		resetProgress = function() {
		var elm = document.querySelector('.progressbar'),
			newone = elm.cloneNode(true),
			x = elm.parentNode.replaceChild(newone, elm);
		},
		resetSlide = function() {
		var elm = document.querySelector('#slides > li'),
			newone = elm.cloneNode(true),
			x = elm.parentNode.replaceChild(newone, elm);
		},
		resetDots = function() {
		var elm = document.querySelector('#pager > li'),
			newone = elm.cloneNode(true),
			x = elm.parentNode.replaceChild(newone, elm);
		},
		resetInterval = function() {
		clearInterval(autonext);
		autonext = setInterval(function() {
			slide++;
			currentSlide();
		}, 10000);
		},

		autonext = setInterval(function() {
		next();
		}, 10000);
		

		document.onkeydown = function(e) {
		switch (e.keyCode) {

			case 37:
				slide--;
				currentSlide();
				break;
			case 38:
				slide++;
				currentSlide();
				break;
			case 39:
				slide++;
				currentSlide();
				break;
			case 40:
				slide--;
				currentSlide();
				break;
		}
	};

	//Buttons
	document.querySelector('#slideshow').addEventListener('click', function() {
		slide;
		currentSlide();
	}, false);
	document.querySelector('#first').addEventListener('click', function() {
		slide = 0;
		currentSlide();
	}, false);
	document.querySelector('#second').addEventListener('click', function() {
		slide = 1;
		currentSlide();
	}, false);
	document.querySelector('#third').addEventListener('click', function() {
		slide = 2;
		currentSlide();
	}, false);
	document.querySelector('#fourth').addEventListener('click', function() {
		slide = 3;
		currentSlide();
	}, false);

	document.querySelector('#next').addEventListener('click', function() {
		next();
	}, false);
	document.querySelector('#previous').addEventListener('click', function() {
		prev();
	}, false);

</script>
	<!-- /SECTION THREE - SLIDER -->
</main>

<?php get_footer(); ?>