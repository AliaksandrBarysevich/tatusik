<?php get_header(); ?>

<section class="products_list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php $content = get_the_content(); ?> 
   
        <div class="product1">
            
            <?php if(has_post_thumbnail()): ?> 
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                
                <img src="<?php bloginfo('template_url'); ?>/images/g-g1.jpg" alt="#">
            <?php endif; ?>

            <div class="product1_item">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <button class="product1_btn"><a href="#popmake-461">В корзину</a></button>  
            </div>
        </div>

   
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
    
    