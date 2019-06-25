<?php
/**
*  Template name: Страница продукта
*
* Template Post Type: post, page, product
*/

get_header();

global $counters_options;

?>

<section class="counter">
    <div class="container counter__container">
        <h2 class="title-2 counter__title">
            <?php the_title(); ?>
        </h2>
        <div class="specifications counter__specifications">
            <div class="specifications__img">
                <?php the_post_thumbnail( array(256,282),  array("alt" => get_the_title())); ?>
                <a href="javascript:void(0);" class="specifications__link call">Заказать</a>
            </div>
            <div class="specifications__desc">
                <?php if($counters_options['title-specifications']) { ?>
                    <h3 class="title-3">
                        <?php echo $counters_options['title-specifications']; ?>
                    </h3>
                <?php } ?>
                <ul class="specifications__list">
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_1'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_2'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_3'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_4'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_5'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_6'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_7'); ?>
                        </div>
                    </li>
                    <li class="specifications__item">
                        <div class="specifications__characteristic">
                            <?php the_field('sp_8'); ?>
                        </div>
                    </li>
                    <li class="specifications__item specifications__item--cost">
                        <div class="specifications__characteristic">
                            Цена - <span class="specifications__value"><?php the_field('cost'); ?> р</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="device-description">

            <?php
                while ( have_posts() ) :
                    the_post();

                    the_content();

                endwhile; 
            ?>

        </div>
    </div>
</section>
<section class="other-goods">
    <div class="container other-goods__container">
        <?php if($counters_options['title-product']) { ?>
            <h2 class="title-2">
                <?php echo $counters_options['title-product']; ?>
            </h2>
        <?php } ?>
        <ul class="other-goods__list">

            <?php $postid = get_the_id();
                $counter = new WP_Query( array(
                    'post_type'     => 'counter',
                    'posts_per_page'=> 5,
                    'post__not_in'  => array($postid),
                    'orderby'       => 'rand',
                ));

                    while ( $counter->have_posts() ) :  $counter->the_post(); ?>

                        <li class="other-goods__item">
                            <a href="<?php the_permalink(); ?>" class="other-goods__link">
                                <div class="other-goods__img">
                                    <?php the_post_thumbnail( array(122,131),  array("alt" => get_the_title())); ?>
                                </div>
                                <div class="other-goods__info" style="background: <?php echo $counters_options['opt-color-card']; ?>">
                                    <p class="other-goods__name"><?php the_title(); ?></p>
                                    <p class="other-goods__cost">Цена <span class="other-goods__bold"><?php the_field('cost'); ?></span> р</p>
                                </div>
                            </a>
                        </li>

            <?php endwhile; 
                wp_reset_postdata();

		?>
            
        </ul>
    </div>
</section>

<?php get_footer();