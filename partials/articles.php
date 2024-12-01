<section class="articles">
	<div class="container">
		<div class="article-title">
			<?php $article_tag = get_field('article_tag');
			if ($article_tag){ ?>
    			<div class="tag"><?php echo esc_html($article_tag); ?></div>
			<?php } ?>
			<h1><?php the_field('article_title'); ?></h1>
			<p><?php the_field('article_p'); ?></p>
		</div>
		<div class="article slider-holder">
			<?php $homepageBlogPosts = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'post',
					'orderby' => 'rand',
				));
			?>
			<!-- LOOP START -->
			<?php while($homepageBlogPosts->have_posts()) {
				$homepageBlogPosts->the_post();
				$tags = get_the_Tags();
			?>
			<div class="card">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
				<div class="card-img img" 
				style="background-image:url(<?php echo $url; ?>);"></div>
				<div class="tag-container">
					<?php foreach ($tags as $tag){ ?>
						<div class="tag"><?php echo esc_html($tag->slug); ?></div>
					<?php } ?>
				</div>
				
				<div class="card-content">
					<h3><?php the_title(); ?></h3>
					<span><?php the_author(); ?>:</span>
					<p><?php echo wp_trim_words( get_the_content(), 11, '...'); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn learn-more" target="_blank">Read more<i class="fa-solid fa-chevron-right"></i></a>
				</div>
			</div><!-- card ends -->
			<?php } wp_reset_postdata(); ?><!-- Posts LOOP ENDs -->
		</div><!-- END OF SLIDER Holder -->
	</div>	
</section>
