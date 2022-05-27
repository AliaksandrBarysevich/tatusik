<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class='post_title'><?php the_title(); ?></h1>
    <div class='post_content'><?php the_content(); ?></div>

    <section class="main">
        <div class="main_promo">

        <?php
            echo do_shortcode('[smartslider3 slider="1"]');
        ?>
            
        </div>
        <div class="main_catalog">
            <div class="main_item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids3.jpeg" alt="#">
                <a href="#"><p>Кроссовки</p></a>
            </div>
            <div class="main_item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids5.jpg" alt="#">
                <a href="#"><p>Босоножки</P></a>
            </div>
            <div class="main_item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids8.jpg" alt="#">
                <a href="#"><p>Сабо</p></a>
            </div>
            <div class="main_item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids7.jpg" alt="#">
                <a href="#"><p>Резиновые сапоги</p></a>
            </div>
            <div class="main_item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids2.jpg" alt="#">
                <a href="#"><p>Зимняя обувь</p></a>
            </div>
            <div class="main_item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/kids6.jpg" alt="#">
                <a href="#"><p>Ботинки деми</p></a>
            </div>
        </div>
    </section>
    
<?php endwhile; endif; ?>

<?php get_footer(); ?>