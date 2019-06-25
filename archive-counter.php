<?php

get_header();

?>

	<section class="page-counters">
        <div class="container">

            <?php if ( have_posts() ) :

                while ( have_posts() ) : the_post();

                    the_title();

                endwhile;

            wp_reset_postdata();
            
            else : 
            
                echo 'Нет товаров';
            
            endif; ?>


        </div>
    </section>
    
<?php 

get_footer();