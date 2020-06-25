<?php

get_header();
?>

<div id="fh5co-portfolio">

	<?if(have_posts()): $i =1; while (have_posts()): the_post();?>
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
</div>

<?php
get_footer();
?>

