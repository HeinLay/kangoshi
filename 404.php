<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bties-theme
 */

get_header();
?>

<!-- ===============  Breadcrumb ============== -->
<div class="breadcrumb w-980 clearfix">
  <?php the_breadcrumb(); ?>
</div>

<div class="content-area w-980">
  <div class="not-found">
    <h2>お探しのページは見つかりません。</h2>
    <p class="s-lh-20 s-mt-30 s-mb-30">
      エラーコード：404 Not Found
    </p>
    <a href="<?php echo site_url(); ?>" class="w-240 btn02">トップページへ戻る</a>
  </div>
  <!-- ./ not-found -->
</div>
<!-- ./ content-area -->

<?php
get_footer();
