<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package counters
 */

global $counters_options;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background: <?php echo $counters_options['opt-color-page']; ?>">

    <div class="wrapper">   
        <header class="header" id="header" style="background: <?php echo $counters_options['opt-color-header']; ?>">
            <div class="container header__container">
                <div class="logo header__logo">
                    <?php if($counters_options['logo-img']['url']) { ?>
                        <a href="<?php echo get_option('siteurl'); ?>" class="logo__link">
                            <img src="<?php echo $counters_options['logo-img']['url']; ?>" alt=" ">
                        </a>
                    <?php } ?>
                </div>
                <nav class="nav-menu">

                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-header',
                            'container'      => '',
                            'menu'           => 'Основное',
                            'menu_class'     => 'nav-menu__list',
                            'menu_id'        => 'header-menu',
                        ) );
                    ?>
                    
                </nav>
                <div class="operation">
                    <?php if($counters_options['phone-tel']) { ?>
                        <a href="tel:<?php echo $counters_options['phone-tel']; ?>" class="operation__phone">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-icon1.png" alt=" ">
                            <span><?php echo $counters_options['phone-tel']; ?></span>
                        </a>
                    <?php } ?>
                    <?php if($counters_options['mode-text']) {?>
                        <div class="operation__mode">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-icon2.png" alt=" ">
                            <span><?php echo $counters_options['mode-text']; ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="request">
                    <a href="javascript:void(0);" class="request__link call">Заказать звонок</a>
                </div>
            </div>
        </header>
        <section class="offer">
            <div class="container offer__container">
                <?php if($counters_options['offertitle']) {?>
                    <h1 class="offer__title">
                        <?php echo $counters_options['offertitle']; ?>
                    </h1>
                <?php } ?>
                <?php if($counters_options['offersubtitle']) {?>
                    <p class="offer__subtitle">
                        <?php echo $counters_options['offersubtitle']; ?>
                    </p>
                <?php } ?>
            </div>
        </section>

