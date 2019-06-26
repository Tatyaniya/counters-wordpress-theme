<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package counters
 */

global $counters_options;

?>


        <footer class="footer" style="background: <?php echo $counters_options['opt-color-footer']; ?>">
            <div class="container footer__container">
                <div class="footer__row">
                    <div class="logo footer__logo">
                        <?php if($counters_options['logo-img']['url']) { ?>
                            <a href="<?php echo get_option('siteurl'); ?>" class="logo__link">
                                <img src="<?php echo $counters_options['logo-img']['url']; ?>" alt=" ">
                            </a>
                        <?php } ?>
                    </div>
                    <nav class="footer-menu">

                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer-header',
                                'container'      => '',
                                'menu'           => 'Основное',
                                'menu_class'     => 'footer-menu__list',
                                'menu_id'        => 'footer-menu',
                            ) );
                        ?>

                    </nav>
                    <div class="footer-operation">

                        <?php if($counters_options['phone-tel']) { ?>
                            <a href="tel:<?php echo $counters_options['phone-tel']; ?>" class="footer-operation__phone">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-icon1.png" alt=" ">
                                <span><?php echo $counters_options['phone-tel']; ?></span>
                            </a>
                        <?php } ?>
                        <?php if($counters_options['mode-text']) {?>
                            <div class="footer-operation__mode">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-icon2.png" alt=" ">
                                <span><?php echo $counters_options['mode-text']; ?></span>
                            </div>
                        <?php } ?>
                        
                    </div>
                    <div class="request">
                        <a href="javascript:void(0);" class="request__link call">Заказать звонок</a>
                    </div>
                </div>
                <div class="footer__row footer__row--copy">
                    <p class="footer__copy">
                        <?php echo $counters_options['copyright']; ?>
                    </p>
                </div>
                <div class="footer__row footer__row--last">
                    <div class="social">
                        <ul class="social__list">
                            <?php $social_links = $counters_options['social_links']; 
                                foreach ( $social_links as $social => $link ) {
                                    $img = ''; 
                                if ( $social == 'Vkontakte') {
                                        $img = 'vk.png';
                                    }
                                else if ( $social == 'Twitter' ) {
                                        $img = 'twitter.png';
                                    }
                                else if ( $social == 'Facebook' ) {
                                        $img = 'facebook.png';
                                    }
                                ?>
                                <?php if($link) { ?>
                                    <li class="social__item">
                                        <a href="<?php echo $link ?>" target="_blank" class="social__link">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/' . $img; ?>" alt=" ">
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="footer__other">
                        <a href="#header" class="up">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/up.png" alt="наверх">
                            <p class="up__text">Наверх</p>
                        </a>
                        <div class="card">
                            <ul class="card__list">
                                <li class="card__item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mastercard.png" alt="mastercard">
                                </li>
                                <li class="card__item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/visa.png" alt="visa">
                                </li>
                                <li class="card__item">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/paypal.png" alt="paypal">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div style="display: none;">
        <div class="modal" id="exampleModal">
            <div class="modal-close arcticmodal-close">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/close2.png" alt="close">
            </div>
            <div class="modal__title">
                Заказать звонок
            </div>
            <div class="modal__form">

                <?php echo do_shortcode('[contact-form-7 id="131" title="Форма модального окна"]'); ?>
               
            </div>
        </div>
    </div>

<?php wp_footer(); ?>

</body>
</html>
