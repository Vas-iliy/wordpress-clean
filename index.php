<?php

get_header();
?>

<? if (is_front_page() && get_theme_mod('home_category')): ?>
    <div id="fh5co-portfolio">

        <? $query = new WP_Query(array(
            'category_name' => get_theme_mod('home_category'),

        ))?>

        <?if($query->have_posts()): $i =1; while ($query->have_posts()): $query->the_post();?>
            <? if (has_post_thumbnail()){
                $img_url = get_the_post_thumbnail_url();
            } else {
                $img_url = 'https://picsum.photos/1280/864';
	        }?>

            <div class="fh5co-portfolio-item <? if ($i % 2 == 0) echo 'fh5co-img-right' ?>">
                <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?=$img_url?>);"></div>
                <div class="fh5co-portfolio-description">
                    <h2><? the_title(); ?></h2>
                    <p><? the_excerpt(); ?></p>
                    <p><a href="<? the_permalink(); ?>" class="btn btn-primary"><?_e('Read more', 'clean');?></a></p>
                </div>
            </div>
        <? $i++; endwhile;?>
        <?endif;?>
        <? wp_reset_postdata(); ?>
    </div>

<?endif;?>

<?php
get_footer();
?>

