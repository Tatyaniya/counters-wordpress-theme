<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package counters
 */

get_header();
?>

<section class="inner-clients">
    <div class="container">

        <h2 class="error-title secondary-title"><span>Ошибка 404</span><br></h2>
        <h3 class="error__box">Страница не найдена.</h3>

        <div class="menu-flex">

            <div class="error-replacement">Зато, у нас есть много других страниц:</div>
            
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
        </div>

    </div>
</section>

<?php
get_footer();
