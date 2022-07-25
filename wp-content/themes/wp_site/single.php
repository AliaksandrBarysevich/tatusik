<?php get_header(); ?>

<section class="products_list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php $content = get_the_content(); ?> 
   
        <div class="product">
            <a href="<?php echo get_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?> 
                <?php the_post_thumbnail(); ?></a>
            <?php else: ?>
                <a href="<?php echo get_permalink(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/g-g1.jpg" alt="#"></a>
            <?php endif; ?>

            <!-- <div class="product_item"> 
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <p>Размер 21-26</p>
                <div class="price">45 руб</div>
                <button class="product_btn"><a href="#">В корзину</a></button>  
            </div>-->
        </div>
   
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
    