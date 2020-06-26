<?php

get_header();
?>

<? if ( get_theme_mod('home_category')): ?>

<div id="fh5co-portfolio">

	<? $query = new WP_Query(array(
		'category_name' => get_theme_mod('home_category'),
        'posts_per_page' => 4

	))?>

	<?if($query->have_posts()): $i =1; while ($query->have_posts()): $query->the_post();?>

        <? get_template_part('template-parts/content', 'preview'); ?>

		<? $i++; endwhile;?>
	<?endif;?>
	<? wp_reset_postdata(); ?>
</div>

<?endif;?>

<?if(have_posts()): while (have_posts()): the_post(); the_content();?>
<?endwhile; endif;?>
<?php
get_footer();
?>

