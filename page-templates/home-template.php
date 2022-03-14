<?php
/**
 * Template Name: Homepage
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper p-0" id="full-width-page-wrapper">
	<div class="row">

		<div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main" role="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .row end -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
