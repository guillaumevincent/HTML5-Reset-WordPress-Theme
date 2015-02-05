<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
get_header(); ?>


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

<?php get_footer(); ?>