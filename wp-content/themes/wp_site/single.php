<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $content = get_the_content(); ?>

    <h1 class='post_title'><?php the_title(); ?></h1>
    <?php if (!empty($content)): ?>
    <div class='post_content'><?php echo $content; ?></div>
    <?php endif; ?>
    <?php if (has_post_thumbnail()): ?>
    <div class="post_image"><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>