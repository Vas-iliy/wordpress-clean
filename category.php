<?php

get_header();
?>

<? if ( get_theme_mod('home_category')): ?>

	<div id="fh5co-portfolio">

		<?if(have_posts()): $i =1; while (have_posts()): the_post();?>

			<? get_template_part('template-parts/content', 'preview'); ?>


			<? $i++; endwhile;?>
		<? the_posts_pagination(array(
				'end_size' => 1,
				'mid_size' => 1,
				'type' => 'list'
			)); ?>
		<?endif;?>

	</div>

<?endif;?>

get_footer();
?>

