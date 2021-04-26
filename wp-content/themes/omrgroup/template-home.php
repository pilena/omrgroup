<?php /* Template Name: Home Page Template */ get_header(); ?>

<main role="main">
	<!-- section -->
	<?php $backgroundImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
	<section id="section-home" class="section" style="background: linear-gradient(180deg, rgba(1, 24, 51, 0) 31.72%, #011833 100%), url('<?php echo $backgroundImage[0] ?>');min-height:100vh;background-size:cover;background-position:center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 section-home__blocks">
					<div class="col-lg-8 section-home__blocks-header">
						<h1>Pokret. Stabilnost. Poverenje.</h1>
					</div>
					<div class="col-lg-7 section-home__blocks-text">
						<p>Početak je uvek težak, ali ukoliko marljivo radite i savladavate prepreke korak po korak, uspeh će doći kao nagrada za vaš trud. Od 2002. do danas, mi smo rasli i razvijali se u skladu sa svojim mogućnostima i željom da se izborimo za jedinstvenu poziciju na tržištu i ono najvažnije – poverenje naših klijenata.</p>
					</div>
					<div class="col-lg-4">
						<a class="button__square--large-secondary" href="#">Pročitaj još</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- /section -->

	<!-- SECTION TWO - CONTACT -->
	<section id="section-two" class="section-two">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- <div class="col-lg-4">
						<h5>Kontaktirajte nas</h5>
					</div>
					<div class="col-lg-6">
						<ul>
							<li>
								<i class="ri-phone-line"><a href="#">+381 60 123 456 7</a></i>
							</li>
							<li>
								<i class="ri-mail-line"><a href="#">office@omrgrupa.rs</a></i>
							</li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION TWO - CONTACT -->

	<!-- SECTION THREE - LOGOS -->
	<section id="section-logo" class="section-logo">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 section-logo__blocks">
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/bm-logo.png" alt="">
					</div>
					<div class="col-lg-3  section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/Vector.png" alt="">
					</div>
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/MiOS-Limo-Service-Logo.png" alt="">
					</div>
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/globos-logo.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9 section-logo__blocks">
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/aksfleet-logo.png" alt="">
					</div>
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/mios-logo.png" alt="">
					</div>
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/luxinvest-logo.png" alt="">
					</div>
					<div class="col-lg-3 section-logo__blocks-single">
						<img src="http://localhost/omrgroup/wp-content/uploads/2021/04/bmpy-logo.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SECTION THREE - LOGOS -->

</main>

<?php get_footer(); ?>