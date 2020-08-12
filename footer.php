<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Merkelijkheid_basis
 */

?>

	<footer id="colophon" class="container">
		<div class="site-info">
				<?php
				printf( esc_html__( 'Site door: %1$s', 'merkelijkheid' ), '<a target="_blank" href="https://merkelijkheid.nl">Merkelijkheid</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
