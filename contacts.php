<?php
/**
*  Template name: Контакты
*/
get_header();

?>

<section class="contacts">
    <div class="container contacts__container">
        <div class="card">
            <h2 class="title-2">
                <?php echo $counters_options['title-map']; ?>
            </h2>

            <div class="map">
                <?php while ( have_posts() ) : the_post();

                    the_content();

                    endwhile; 
                    wp_reset_postdata();
                ?>
                
            </div>
        </div>
        <div class="info">
            <h2 class="title-2">
                <?php echo $counters_options['title-contacts']; ?>
            </h2>
            <div class="info__content">

                <?php if($counters_options['contacts-phone']) { ?>
                    <div class="info__row">
                        <a href="tel:<?php echo $counters_options['contacts-phone']; ?>" class="info__phone">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-icon1.png" alt=" ">
                            <span><?php echo $counters_options['contacts-phone']; ?></span>
                            <span class="info__mode"><?php echo $counters_options['contacts-mode']; ?></span>
                        </a>
                    </div>
                <?php } ?>
                    
                <?php if($counters_options['contacts-email']) { ?>
                    <div class="info__row">
                        <a href="mailto:<?php echo $counters_options['contacts-email']; ?>" class="info__mail">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/dog.png" alt=" ">
                            <span><?php echo $counters_options['contacts-email']; ?></span>
                        </a>
                    </div>
                <?php } ?>

                <?php if($counters_options['contacts-address']) { ?>
                    <div class="info__row">
                        <div class="info__address">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mail.png" alt=" ">
                            <span><?php echo $counters_options['contacts-address']; ?></span>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer();

