<?php
/*
Template Name: contacts-page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="contact">
        <h2>Контакты</h2>
        <ul>
            <li>Название tatusik</li>
            <li>Сайт компании tatusik.local</li>
            <li>Адрес</br>Червенский рынок в Лошице, место 2 ряд Е и место 14 ряд ЕД (г. Минск, ул. Маяковского, 184)</li>
            <li>Телефоны</br>+375 29 864-06-43 Александр</br>+375 29 226-88-30 Светлана</li>
        </ul>
        <div class="contact_maps">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.302474720385!2d27.566012915304324!3d53.85526914417042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbd1b81dcae179%3A0x3d638aaac20d2de5!2z0YPQu9C40YbQsCDQnNCw0Y_QutC-0LLRgdC60L7Qs9C-IDE4NCwg0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1653160241703!5m2!1sru!2sby" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A38df8386a2c578e8f722f9baaf1500762bb7c99d69267ef9b566e1711754b9ab&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>