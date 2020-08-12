<?php
/**
 * opmaak van 1 post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Merkelijkheid_basis
 */

?>
<div class="row justify-content-center mb-2 mb-md-5">
    <div class="col-md-6 my-auto">
        <h2><?php the_title(); ?></h2>
        <?php echo get_excerpt_SEO(250); ?>
        <a class="knop" href="<?php the_permalink(); ?>"><?php _e("Lees verder", "merkelijkheid"); ?></a>
    </div>
    <div class="col-md-6 mt-4 mt-md-0 text-left text-md-right">
        <?php
        if ( has_post_thumbnail() ) {
            echo '<a href="'.get_the_permalink().'">';
            the_post_thumbnail();
            echo '</a>';
        }
        ?>
    </div>
</div>