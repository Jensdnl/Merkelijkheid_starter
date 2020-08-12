<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Merkelijkheid_basis
 */

get_header();
?>

	<main id="primary" class="container my-5">
	<div class="row justify-content-center">
		<?php
		while ( have_posts() ) :
			the_post();
		?>
		<div class="col-md-8">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		</div>
		<?php
		endwhile; // End of the loop.
		?>
	</div>
	</main><!-- #main -->

<?php
get_footer();