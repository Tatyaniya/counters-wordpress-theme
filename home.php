<?php
/**
*  Template name: Главная
*/

get_header();

?>

<section class="why">
    <div class="container why__container">
        <h2 class="title-2 why__title">
            <?php echo $counters_options['whytitle']; ?>
        </h2>
        <ul class="why__list">
            <li class="why__item">
                <div class="why__icon">
                    <img src="<?php echo $counters_options['whyimage1']['url']; ?>" alt=" " class="why__img">
                </div>
                <p class="why__text">
                    <?php echo $counters_options['whytext1']; ?>
                </p>
            </li>
            <li class="why__item">
                <div class="why__icon">
                    <img src="<?php echo $counters_options['whyimage2']['url']; ?>" alt=" " class="why__img">
                </div>
                <p class="why__text">
                    <?php echo $counters_options['whytext2']; ?>
                </p>
            </li>
            <li class="why__item">
                <div class="why__icon">
                    <img src="<?php echo $counters_options['whyimage3']['url']; ?>" alt=" " class="why__img">
                </div>
                <p class="why__text">
                    <?php echo $counters_options['whytext3']; ?>
                </p>
            </li>
            <li class="why__item">
                <div class="why__icon">
                    <img src="<?php echo $counters_options['whyimage4']['url']; ?>" alt=" " class="why__img">
                </div>
                <p class="why__text">
                    <?php echo $counters_options['whytext4']; ?>
                </p>
            </li>
        </ul>
    </div>
</section>
<section class="catalog">
    <div class="container catalog__container">
        <h2 class="title-2 catalog__title">
            <?php the_field('catalog'); ?>
        </h2>

        

        <ul class="games__list games__list_free">
                    <?php// $pc = new WP_Query('cat=5&posts_per_page=-1'); ?>
                        <?php //while ($pc->have_posts()) : $pc->the_post(); ?>
                            <li class="games__item">
                                <div class="games__content games__content_free">
                                    <div class="games__img">
                                        <?php //the_post_thumbnail(array(159,197), array("class" => "post_thumbnail", "alt" => get_the_title()));  ?>
                                    </div>
                                    <?php //the_content(); ?>
                                </div>
                                <div class="games__subtitle">
                                    <?php //the_title(); ?>
                                </div>
                            </li>
                        <?php //endwhile;
                        //wp_reset_postdata();
                    ?>
                </ul>
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
<section class="how" style="background: <?php echo $counters_options['opt-color-how']; ?>">
    <div class="container how__container">
        <h2 class="title-2 how__title">
            <?php the_field('where'); ?>
        </h2>
        <div class="how__desc">

            <?php while ( have_posts() ) : the_post();

                the_content();

            endwhile; 
            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>
<section class="order">
    <div class="container order__container">
        <h2 class="title-2 order__title">
            Закажите счетчик
        </h2>
        <div class="order__content">
            <div class="order__form">
                <form action="#">
                    <input class="order__input" type="text" name="name" placeholder="Имя" required>
                    <input class="order__input" type="text" name="phone" placeholder="Телефон" required>
                    <input class="order__input order__input--last" type="text" name="counter" placeholder="Какой счетчик выбрали?">
                    <button type="submit" class="form-submit" data-submit>Заказать товар</button>
                </form>
            </div>
            <?php if ($counters_options['formimage']) { ?>
                <div class="order__img">
                    <img src="<?php echo $counters_options['formimage']['url']; ?>" alt=" ">
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer();