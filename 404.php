<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Merkelijkheid_basis
 */

get_header();
?>

	<main id="primary" class="container my-5">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Pagina niet gevonden...', 'merkelijkheid' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="mb-0"><?php _e( 'Het ziet er naar uit dat de pagina niet (meer) bestaad.', 'merkelijkheid' ); ?></p>
				<p><?php _e( 'Keer terug naar de home pagina of probeer eens te zoeken:', 'merkelijkheid' ); ?></p>

					<?php
					merkelijkheid_search_form();
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
