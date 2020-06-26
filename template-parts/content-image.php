<? if (has_post_thumbnail()){
	$img_url = get_the_post_thumbnail_url();
} else {
	$img_url = 'https://picsum.photos/1280/864';
}
?>
<div class="fh5co-portfolio-description">
	<h2><? the_title(); ?></h2>
	IMAGE
</div>
<img src="<?=$img_url?>" alt="">

