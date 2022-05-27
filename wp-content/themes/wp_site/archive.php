<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <a href='#' class='post_title'><?php the_title(); ?></a>

<?php endwhile; endif; ?>

<?php get_footer(); ?>