<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <section class="promo">
        <header class="header">
            <div class = "promo_header">
                <div class = "logo"><a href="#"><?php bloginfo ('name'); ?></a></div>
                <div class = "tel">МТС+375(29)864-06-43<br/>МТС+375(29)226-88-30</div>
                <div class = "contacts">Вт-Вс: 8.00-17.00<br/>Пн: выходной</div>
                <div class = "shop"><a href="#popmake-461"><img src="<?php echo get_template_directory_uri(); ?>/images/shop.png" alt="#">Корзина</a></div>
            </div>
            <nav class="nav">
                <button class="nav_toggle"><label for="nav_toggle"></label></button>
                <input type="checkbox" id="nav_toggle">

                <?php 
                    $args = array(
                    'theme_location' => 'Header',
                    'menu' =>'Main',
                    'container' => '',
                    'container_class' => '',
                    'items_wrap' => '<ul>%3$s</ul>' 
                    );
 
                    wp_nav_menu($args);
                ?>
            
            </nav>
        </header>
    </section>
   
   

    
