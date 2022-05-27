    <section class="footer">
        <div class = "logo"><a href="#">tatusik</a></div>
        <p>ИП Борисевич А.В.<br/>
            223216, Минская обл, Червенский р-н,<br/> г.п. Смиловичи, ул. Горького, 77<br/>
            УНП: 691146166<br/>
            Регистрационный орган: Червенский райисполком<br/>
            Дата регистрации компании: 14.03.2022
        </p>
        <div class="footer_socials">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/vk.png" alt="#"></a>
            <a href="https://www.instagram.com/tatusik.by/"><img src="<?php echo get_template_directory_uri(); ?>/images/inst.png" alt="#"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="#"></a>
        </div>
        <div class="footer_card">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/visa.png" alt="#"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/maestro.png" alt="#"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mastercard.png" alt="#"></a>
        </div>
    </section>
</div>
<?php 
    $args = array(
        'theme_location' => 'Footer',
        'menu' =>'Footer',
        'container' => 'div',
        'container_class' => 'footer_nav',
        'items_wrap' => '<ul>%3$s</ul>' 
    );

    wp_nav_menu($args);
    
?>   
<?php wp_footer(); ?>
</body>
</html>