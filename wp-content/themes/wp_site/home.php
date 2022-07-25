<?php get_header(); ?>

<section class="main">
    <div class="main_catalog">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $content=get_the_content(); ?>

            <div class="main_catalog">
                <div class="main_item">
                    <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php bloginfo('template_url'); ?>/images/kids3.jpeg" alt="#">
                    <?php endif; ?>
    
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </div>     
            </div>
        <?php endwhile; endif; ?>
  
    </div>
       
</section>


<?php get_footer(); ?>