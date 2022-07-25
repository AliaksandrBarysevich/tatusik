<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <a href='#' class='product_item'><?php the_title(); ?></a>

<?php endwhile; endif; ?>

<?php get_footer(); ?>