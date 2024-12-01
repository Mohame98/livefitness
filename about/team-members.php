<section 
class="team-members"
data-aos="fade-right">
	<div class="container">
		<div class="team-grid">
		  	<div class="item">
				<h2><?php the_field('team_members_title'); ?></h2>
				<p><?php the_field('team_members_p'); ?></p>
		  	</div>
			<?php $member = new WP_Query(
				array(
					'post_type' => 'member',
					'posts_per_page' => -1,
					'order' => 'ASC'
				)
			);
			while($member->have_posts()){
				$member->the_post();
			?>
			<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
			<div class="item-img img" 
			style="background-image:url('<?php echo esc_url($url); ?>');">
				<div class="team-info">
					<h3><?php the_title(); ?></h3>
					<span><?php the_field('job_title'); ?></span>
				</div>
			</div>
			<?php } wp_reset_postdata(); ?>
		  	<div class="item">
				<div class="wrapper">
			 		<h2><?php the_field('team_members_join_title'); ?></h2>
					<span><?php the_field('team_member_join_p'); ?></span>
				</div>
				<a href="<?php the_field('team_members_join_btn'); ?>" class="btn">apply now</a>
		  	</div>
		</div>
	</div>
</section>