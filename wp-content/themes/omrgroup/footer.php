			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
				<div id="media_image-4" class="widget_media_image"><img width="107" height="48" src="http://omrgroup.test/wp-content/uploads/2021/04/logo-white.png" class="image wp-image-16  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;"></div>
					<div class="row footer__widgets">
						
						<div class="col-lg-4 col-sm-6 col-xxs-12 footer__widgets-wrap footer__widgets-wrap--left">
							<div class="footer__widgets--first footer__widgets--left"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?></div>
						</div>
						<div class="col-lg-8 col-sm-6 col-xxs-12 footer__widgets-wrap footer__widgets-wrap--right">
							<div class="col-lg-2 col-sm-6 footer__widgets--second"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?></div>
							<div class="col-lg-2 col-sm-6 footer__widgets--third"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?></div>
							<div class="col-lg-3 col-sm-6 footer__widgets--fourth"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-4')) ?></div>
							<div class="col-lg-2 col-sm-6 footer__widgets--fifth"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-5')) ?></div>
							<div class="col-lg-2 col-sm-6 footer__widgets--sixth"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-6')) ?></div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
			<!-- footer-drawer -->
			<div class="footer__drawer">
				<div class="container-fluid">
					<div class="col-lg-12 footer__drawer-wraper">
						<!-- copyright -->
						<div class="col-lg-6 footer__drawer--copyright">
							<!-- <img src="/assets/images/logo-alt.svg" alt="logo" class="mar-sm-r"> -->
							<span>Copyright text goes here &copy; <?php echo date('Y'); ?>.</span>
						</div>
						<!-- /copyright -->
						<!-- links -->
						<div class="col-lg-6 footer__drawer--links">
							<a href="" class="mar-xxsm-r mar-xxsm-l">Terms Of Service</a>
							<a href="" class="mar-xxsm-r mar-xxsm-l">Privacy Policy</a>
						</div>
						<!-- /links -->
					</div>
				</div>
			</div>
			<!-- /footer-drawer -->

			</div>
			<!-- /wrapper -->

			<?php wp_footer(); ?>

			<!-- analytics -->
			<script>
				(function(f, i, r, e, s, h, l) {
					i['GoogleAnalyticsObject'] = s;
					f[s] = f[s] || function() {
						(f[s].q = f[s].q || []).push(arguments)
					}, f[s].l = 1 * new Date();
					h = i.createElement(r),
						l = i.getElementsByTagName(r)[0];
					h.async = 1;
					h.src = e;
					l.parentNode.insertBefore(h, l)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>

			</body>

			</html>