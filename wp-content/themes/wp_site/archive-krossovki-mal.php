<?php get_header(); ?>
<section class="products_list">
<?php 
$args = array('post_type' => 'krossovki-mal', 'posts_per-page' => 10);
$loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post(); ?>


    <?php $content = get_the_content(); ?> 

        <div class="product">
            <a href="<?php echo get_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?> 
                <?php the_post_thumbnail(); ?></a>
            <?php else: ?>
                <a href="<?php echo get_permalink(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/g-g1.jpg" alt="#"></a>
            <?php endif; ?>

            <div class="product_item">
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_content(); ?>
                <button class="product_btn"><a href="#popmake-461">В корзину</a></button>  
            </div>
        </div>

<?php endwhile; ?>
</section>
<?php get_footer(); ?>
