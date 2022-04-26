<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bties-theme
 */

?>

<!-- =============== footer ============== -->
<footer class="footer">
	<div class="inner">
		<ul class="nav-list">
			<li><a href="<?php bloginfo('url'); ?>/operator-information/">運営について</a></li>
			<li><a href="<?php bloginfo('url'); ?>/policy/">プライバシーポリシー</a></li>
			<li><a href="<?php bloginfo('url'); ?>/survey-outline/">ランキング根拠</a></li>
		</ul>
	</div>
</footer>
<!-- ./footer -->
<?php wp_footer(); ?>
<!-- js -->
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/jquery.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/library/scroll-hint.min.js"></script>
<script src="<?php print get_template_directory_uri(); ?>/assets/js/common.js"></script>

</body>
</html>
