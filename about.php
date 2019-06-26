<?php
/**
*  Template name: О компании
*/
get_header();

?>

<section class="choice">
    <div class="container choice__container">
        <h2 class="title-2 choice__title">
            <?php the_field('about'); ?>
        </h2>
        <div class="choice__content">
            <div class="choice__desc">

            <?php while ( have_posts() ) : the_post();

                the_content();

                endwhile; 
                wp_reset_postdata();
            ?>
               
            </div>
            <div class="choice__img">
                <?php the_post_thumbnail( array(570,430),  array("alt" => get_the_title())); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();