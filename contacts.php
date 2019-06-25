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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.4368670046306!2d30.445245215731422!3d50.45158907947544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc259a110735%3A0xa9dd0e2c92e208f2!2z0YPQuy4g0KHQvNC-0LvQtdC90YHQutCw0Y8sIDEwLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1560802274740!5m2!1sru!2sua" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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

