<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Load values and assign defaults.
$cmt_img = get_field('cmt-img');
$cmt_ttl = get_field('cmt-ttl');
$cmt_txt = get_field('cmt-txt');
?>

<div class="cmt-info">
	<?php if($cmt_img) { ?>
		<div class="cmt-img">
			<img src="<?php echo $cmt_img; ?>" alt="コメント">
		</div>
	<?php } ?>
	<div class="cmt-txt">
		<?php if($cmt_ttl) { ?>
			<h6><?php echo $cmt_ttl; ?></h6>
		<?php } ?>
		<?php if($cmt_txt) { ?>
			<p><?php echo $cmt_txt; ?></p>
		<?php } ?>
	</div>
</div>
