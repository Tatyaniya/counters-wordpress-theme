<?php

get_header();

?>

<section class="catalog">
    <div class="container catalog__container">
        <ul class="catalog__list">

            <?php $counter = new WP_Query( array(
				'post_type' => 'counter',
				'posts_per_page'=> -1
            ));

				while ( $counter->have_posts() ) :  $counter->the_post(); ?>

            
            <li class="catalog__item">
                <a href="<?php the_permalink(); ?>" class="catalog__link">
                    <div class="catalog__img">
                        <?php the_post_thumbnail( array(180,194),  array("alt" => get_the_title())); ?>
                    </div>
                    <div class="catalog__info"  style="background: <?php echo $counters_options['opt-color-card']; ?>">
                        <p class="catalog__name"><?php the_title(); ?></p>
                        <p class="catalog__cost">Цена <span class="catalog__bold"><?php the_field('cost'); ?></span> р</p>
                    </div>
                </a>
            </li>

            <?php endwhile; 
                wp_reset_postdata();

		?>
            
        </ul>
    </div>
</section>
    
<?php 

get_footer();