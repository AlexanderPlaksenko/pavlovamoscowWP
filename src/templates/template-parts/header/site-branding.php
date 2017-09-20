<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="wrap site-branding">
    <div class="container container-flex">
        <div class="header-logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="header-address">
            Москва, Ленинградсий проспект 14/4
        </div>
        <div class="header-contacts">
            <div>ПН-ВС: с 10:00 до 21:30</div>
            <div class="header-tel">
                <a href="tel:74993467745">7 499 346 77 45</a>
            </div>
        </div>
        <?php if ((twentyseventeen_is_frontpage() || (is_home() && is_front_page())) && !has_nav_menu('top')) : ?>
            <a href="#content"
               class="menu-scroll-down"><?php echo twentyseventeen_get_svg(array('icon' => 'arrow-right')); ?><span
                        class="screen-reader-text"><?php _e('Scroll down to content', 'twentyseventeen'); ?></span></a>
        <?php endif; ?>

    </div><!-- .wrap -->
</div><!-- .site-branding -->
