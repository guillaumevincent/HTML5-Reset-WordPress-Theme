<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

<section id="contact" class="gray-section contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center copyright">
				<p>
					<strong>
						&copy;<?php echo date( "Y" );
						echo " ";
						bloginfo( 'name' ); ?>
					</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center copyright">
				<p>
					SARL au capital de 1000 euros - Inscrite au registre du commerce de Montpellier sous le n°808 997 803<br>
					Siége social : Résidence l'Atelier - 393 rue rené Etiemble - 34090 Montpellier
				</p>
			</div>
		</div>
	</div>
</section>



<!-- jQuery is called via the WordPress-friendly way via functions.php -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

</body>

</html>
