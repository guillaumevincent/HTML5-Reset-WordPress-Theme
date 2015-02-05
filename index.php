<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
get_header(); ?>


<div id="inSlider" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#inSlider" data-slide-to="0" class="active"></li>
		<li class="" data-target="#inSlider" data-slide-to="1"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						Neuf & rénovation <br>
						peinture & enduits <br>
						décoration intérieure</h1>

					<p>Lasures . Peinture et enduits à la chaux . Revêtements sols et murs . Pose parquets</p>
				</div>
			</div>
			<!-- Set background for slide in css -->
			<div class="header-back one"></div>

		</div>
		<div class="item">
			<div class="container">
				<div class="carousel-caption">

					<h1>
						<br/>
						La reussite de vos chantiers<br>
						c'est notre expérience !
					</h1>
				</div>
			</div>
			<!-- Set background for slide in css -->
			<div class="header-back two"></div>
		</div>
	</div>
	<a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section id="<?php the_ID(); ?>" class="container features">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="navy-line"></div>
				<h1><span class="navy"> <?php the_title(); ?></span></h1>
				<br/>
			</div>
			<?php the_content(); ?>
		</div>
	</section>

<?php endwhile; endif; ?>



<section id="zones" class="container features">
	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="navy-line"></div>
			<h1>Zone d’activité</h1>
			<br/>
			<br/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<img src="<?php echo get_template_directory_uri(); ?>/img/zone-activite.jpg" alt="carte" class="img-responsive">
		</div>
		<div class="col-lg-6 text-justify">
			<p>Nous intervenons principalement sur la région de Montpellier et de ses environs. Ponctuellement nous
				savons également nous déplacer plus loin en fonction des chantiers et des besoins particuliers.</p>

			<p>Nous couvrons une zone qui s’étend habituellement jusqu’à Nîmes, Clermont l’Hérault, Quissac, Béziers,
				Sète, Agde, La
				grande motte, Les saintes Maries de la mer, Arles. </p>
			<br/>
			<p>Nous intervenons régulièrement sur Montpellier et les villages de Saint Gély du fesc, Saint clément de
				rivière, Grabels,
				Saint Mathieu de Tréviers, Les Matelles, Montferrier sur lez, Montarnaud, Vendargues, Castries, Lunel,
				Clapiers,
				Prades-le-lez, Pignan, Lavérune, Saint Jean de Védas, Fabrègues, Cournonthéral et Cournonsec.</p>
			<br/>
			<p>
				Nous sommes également présents sur le front de mer, et les villes de Carnon, Mauguio, Palavas-les-flots,
				Villeneuve-les-Magelonnes.</p>
		</div>
	</div>
</section>

<section id="contact" class="contact">
	<div class="container">
		<div class="row m-b-lg">
			<div class="col-lg-12 text-center">
				<div class="navy-line"></div>
				<h1>Nous contacter</h1>

				<p>Nos devis sont <b>GRATUITS</b> et nous nous déplaçons pour mieux cibler vos attentes !</p>
			</div>
		</div>
		<div class="row m-b-lg">
			<div class="col-lg-3 col-lg-offset-3">
				<address>
					<strong><span class="navy">SARL PERMAC</span></strong><br>

					Résidence l’Atelier <br/>
					393 rue René Etiemble <br/>
					34090 MONTPELLIER <br/>
					<abbr title="Phone">Tel (principal) :</abbr> 06 71 42 79 67<br>
					<abbr title="Phone">Tel :</abbr> 06 70 20 76 80<br>
					<abbr title="email">Email :</abbr> <a href="mailto:contact@permac.fr">contact@permac.fr</a>
				</address>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-md-12">
						<?php echo do_shortcode( '[contact-form-7 id="16" title="Contact Form Bootstrap"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
