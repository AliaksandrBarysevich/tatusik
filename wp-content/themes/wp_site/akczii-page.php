<?php
/*
Template Name: akczii-page
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="akczii">
        <h2>Акции</h2>
        <!-- <ul>
            <li>Доставка курьером по Минску в пределах МКАД,</br>осуществляется каждый день кроме понедельника с 16.00 до 18.00, стоимость 8 руб</li>
            <li>Доставка белпочтой,</br>осуществляется каждый день кроме понедельника и воскресенья с 16.00 до 18.00, стоимость 5-6 руб</li>
            <li>Доставка европочтой,</br>осуществляется каждый день кроме понедельника с 16.00 до 18.00, стоимость 3 руб</li>
        </ul>-->
        <hr>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>