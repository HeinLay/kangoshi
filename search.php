<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bties-theme
 */

get_header();
?>

<div class="content">
	<?php if (have_posts()) : ?>
		<div class="sec-career">
			<div class="inner">
				<div class="ttl"><h3>編集部おすすめエージェント</h3></div>
				<ul>
					<?php
					$i = 0;
					$page = get_page_by_path('topcontent', null, 'top_content');
					$custom = get_post_meta($page->ID, 'custom', true);
					$page_id = $page->ID;
					if (have_rows('acfTopCareer', $page_id)) : ?>
						<?php while (have_rows('acfTopCareer', $page_id)) : the_row();
						$career_logo = get_sub_field('career_logo');
						$career_btn = get_sub_field('career_btn'); 
							$i++; 
						?>
							<li>
								<?php if (have_rows('career_ttl', $page_id)) : ?>
									<?php while (have_rows('career_ttl', $page_id)) : the_row(); 
										$ttl01 = get_sub_field('ttl01');
										$ttl02 = get_sub_field('ttl02'); ?>
											<div class="career-ttl">                 
												<?php echo $ttl01; ?><span><?php echo $ttl02; ?></span>
											</div>
								<?php endwhile; endif; ?>
								<div class="career-img">
									<img src="<?php echo $career_logo; ?>" alt="">
								</div>
								<a href="<?php echo $career_btn; ?>" class="career-btn">公式サイトを見る</a>
							</li>
						<?php endwhile; ?>
					<?php endif;?>
				</ul>
			</div>
		</div>
		<!-- /.sec-career -->
		<div class="sec-recommended-agent">
			<div class="inner">
				<div class="recommended-agent-ttl"><h3>あなたの検索結果</h3></div>
				<div class="agent-list">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); 
							$catchphrase = get_field('catchphrase'); 
							$company = get_field('company');?>
							<div class="agent-data">
                <div class="ttl-gp">
									<h5 class="agent-name"><img src="<?php echo $company; ?>" alt="<?php the_title(); ?>"></h5>
                  <div class="rating-star">
                    <?php echo do_shortcode('[ratemypost-result]'); ?>
                  </div>
                </div>
                <div class="content-gp">
                  <?php if($catchphrase) { ?>
                    <div class="txt"><?php echo $catchphrase; ?></div>
                  <?php } ?>
                  <div class="detail">
                    <div class="graph">
                      <?php 
                      $post = get_post($post_id);
                      $blocks = parse_blocks($post->post_content);
                      foreach ($blocks as $block) {
                        if ($block['blockName'] == 'ponhiro-blocks/bar-graph') {
                          echo render_block($block);
                        }
                      }
                      ?> 
                    </div>
                    <div class="point">
                      <p class="pont-ttl">オススメPOINT</p>
                      <ul class="point-list"> 
                        <?php if (have_rows('point')) : ?>
                          <?php while (have_rows('point')) : the_row(); 
                            $job_changes = get_sub_field('job-changes');
                            $user_satisfaction = get_sub_field('user-satisfaction');
                            $job_offers = get_sub_field('job-offers'); ?>
                              <?php if($job_changes){ ?><li><?php echo $job_changes; ?></li><?php } ?>    
                              <?php if($user_satisfaction){ ?><li><?php echo $user_satisfaction; ?></li><?php } ?> 
                              <?php if($job_offers){ ?><li><?php echo $job_offers; ?></li><?php } ?> 
                        <?php endwhile; endif; ?>                     
                      </ul>
                      <table class="tax-tbl">
                        <?php $terms = wp_get_object_terms($post->ID, 'region', array('orderby' => 'term_id', 'order' => 'ASC') );
                        if ( !empty( $terms ) ) : ?>
                          <tr>
                            <th>地域</th>
                            <td>
                              <ul class="tax-list">
                                <?php foreach ( $terms as $term ) {
                                    echo '<li>'.$term->name.'</li>';
                                  } ?>
                              </ul>
                            </td>
                          </tr>
                        <?php endif; ?>  
                        <?php $terms = wp_get_object_terms($post->ID, 'work_style', array('orderby' => 'term_id', 'order' => 'ASC') );
                        if ( !empty( $terms ) ) : ?>
                          <tr>
                            <th>勤務形態</th>
                            <td>
                              <ul class="tax-list">
                                <?php foreach ( $terms as $term ) {
                                    echo '<li>'.$term->name.'</li>';
                                  } ?>
                              </ul>
                            </td>
                          </tr>
                        <?php endif; ?>  
                        <?php $terms = wp_get_object_terms($post->ID, 'institution', array('orderby' => 'term_id', 'order' => 'ASC') );
                        if ( !empty( $terms ) ) : ?>
                          <tr>
                            <th>施設</th>
                            <td>
                              <ul class="tax-list">
                                <?php foreach ( $terms as $term ) {
                                    echo '<li>'.$term->name.'</li>';
                                  } ?>
                              </ul>
                            </td>
                          </tr>
                        <?php endif; ?> 
                        <?php $terms = wp_get_object_terms($post->ID, 'employment_type', array('orderby' => 'term_id', 'order' => 'ASC') );
                        if ( !empty( $terms ) ) : ?>
                          <tr>
                            <th>雇用職種</th>
                            <td>
                              <ul class="tax-list">
                                <?php foreach ( $terms as $term ) {
                                    echo '<li>'.$term->name.'</li>';
                                  } ?>
                              </ul>
                            </td>
                          </tr>
                        <?php endif; ?> 
                      </table>
                    </div>
                  </div>
                  <a href="<?php echo $transition_destination; ?>" target="_blank" rel="noopener noreferrer" class="cmn-btn">公式サイトを見る</a>
                  <div class="cmt-blk">
                    <?php 
                    $post = get_post($post_id);
                    $blocks = parse_blocks($post->post_content);
                    foreach ($blocks as $block) {
                      if ($block['blockName'] == 'acf/comment-info') {
                        echo render_block($block);
                      }
                    }
                    ?> 
                  </div>
                </div>
              </div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- /.sec-recommended-agent -->
		<div class="sec-bg">
			<div class="inner">
				<div class="ranking-blk scroll-hint is-scrollable ranking-scroll">
					<table class="ranking-tbl">
						<tbody>
							<tr>
								<th>会社</th>
								<th>公式サイト</th>
								<th>満足度</th>
								<th>ポイント</th>
								<th>求人数</th>
								<th>上場</th>
								<th>地域</th>
							</tr>
							<?php if (have_posts()) : ?>
								<?php query_posts('posts_per_page=8&post_type=agent_list&order=ASC&paged='.$paged); ?>
									<?php while (have_posts()) : the_post(); 
									$company_size = get_field('company-size');
									$transition_destination = get_field('transition-destination');
									$public_job_openings = get_field('public-job-openings');
									$point = get_field('table-point');
									$region = get_field('table-region');
									$company = get_field('company');
									?>
										<tr>
											<td><div class="company-img"><img src="<?php echo $company; ?>" alt=""></div></td>
											<td><a href="<?php echo $transition_destination; ?>" target="_blank" rel="noopener noreferrer" class="ranking-btn">サイトをみる</a></td>
											<td class="star"><?php echo do_shortcode('[ratemypost-result]'); ?></td>
											<td><?php echo $point; ?></td>
											<td><?php echo $public_job_openings; ?></td>
											<td><?php echo $company_size[0]; ?></td>
											<td><?php echo $region; ?></td>
										</tr>
									<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							<?php endif; ?>
						</tbody>
					</table>
					<div class="scroll-hint-icon-wrap" data-target="scrollable-icon">
						<span class="scroll-hint-icon">
							<div class="scroll-hint-text">スクロールできます</div>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- /.sec-bg -->
	<?php else: ?>
		<div class="search-error">
			<div class="inner">
				<p>検索結果が見つかりません！</p>
				<a href="<?php echo site_url(); ?>" class="cmn-btn">トップページに戻る</a>
			</div>
		</div>
	<?php endif; ?>
	
</div>
<!-- .content -->

<?php
get_footer();
