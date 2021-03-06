<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<? if (isset($atts['url']) && $atts['url']): ?>
    <a href="<?=esc_attr($atts['url']);?>">
<?endif;?>
<span class="fw-icon">
	<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	<?php if (!empty($atts['title'])): ?>
		<br/>
		<span class="list-title"><?php echo $atts['title'] ?></span>
	<?php endif; ?>
</span>
<? if (isset($atts['url']) && $atts['url']): ?>
    </a>
<?endif;?>