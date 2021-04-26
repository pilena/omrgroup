<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php echo esc_attr(get_bloginfo('name', 'display')); ?> - <?php bloginfo('description'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- facebook meta -->
	<meta property="og:url" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />
	<!-- /facebook meta -->

	<!-- twitter meta -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:creator" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<!-- /twitter meta -->

	<?php wp_head(); ?>
	<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
	</script>

	<!-- google analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXX-XX']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<!-- /google analytics -->
</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">

			<!-- logo -->
			<div class="header__logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo add svg logo -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/omr-color.svg" alt="Logo" class="header__logo-img">
				</a>
			</div>
			<!-- /logo -->

			<!-- nav -->
			<nav class="nav navigation mobile-hide" role="navigation">

				<?php focalpoint_nav(); ?>

			</nav>
			<!-- /nav -->
			<!-- mobile -->
			<div class="hamburgermenu mobile-show">
				<input id="hamburgermenu__toggle" type="checkbox" />
				<label class="hamburgermenu__btn" for="hamburgermenu__toggle">
					<span></span>
				</label>
				<?php focalpoint_nav_mobile(); ?>
			</div>
			<!-- /mobile -->
		</header>
		<!-- /header -->