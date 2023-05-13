<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EyebrowGoddess
 */

get_header();
?>

	<div class="container pagebox">
		<div class="row">
			<div class="col-md-9">
			<main id="primary" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div>
			<div class="col-md-3 border">
				<?php
				get_sidebar();?>
			</div>
		</div>
	</div>

<?php
get_footer();
