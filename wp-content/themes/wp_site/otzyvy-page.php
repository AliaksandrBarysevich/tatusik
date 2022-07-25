<?php
/*
Template Name: otzyvy-page
*/
?>

<?php get_header(); ?>
<section class="otzyvy">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <ul><?php the_content(); ?></ul>
        <hr>

    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>