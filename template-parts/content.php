<? if (has_post_thumbnail()){
	$img_url = get_the_post_thumbnail_url();
} else {
	$img_url = 'https://picsum.photos/1280/864';
}
?>
<img src="<?=$img_url?>" alt="">
    <div class="fh5co-portfolio-description">
        <p><? the_content(); ?></p>
    </div>
