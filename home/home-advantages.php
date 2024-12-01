<section class="advantages">
    <div class="container">
        <div class="advantages-title">
        	<div class="tag"><?php the_field('home_advantages_tag'); ?></div>
          	<h1><?php the_field('home_advantages_title'); ?></h1>
          	<p><?php the_field('home_advantages_p'); ?></p>
        </div>
        <div class="advantages-content flex">
        	<div class="advantages-info">
				<!-- CPT Queries -->
				<?php
				$advantage = new WP_Query(
					array(
						'post_type' => 'advantage',
						'posts_per_page' => -1,
						'order' => 'ASC'
					)
				);
				while($advantage->have_posts()){
					$advantage->the_post();
				?>
				<div 
				class="advantages-item"
				data-aos="fade-right">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); 
					// var_dump($url);
					$imageUrls[] = $url;
				?>
				<?php } wp_reset_postdata(); ?>  
			</div>
         	<div 
			class="img advantages-img" 
			data-aos="fade-left"></div>
        </div>
    </div>
	<script>
		function changeImg() {
            const imageUrls = [
				// loop through the urls and echo them to the array
                <?php foreach($imageUrls as $imageUrl){ ?>
                "<?php echo $imageUrl; ?>",
                <?php } ?>
            ];
            const advantagesItems = document.querySelectorAll(".advantages-item");
			// set default active class
			advantagesItems[0].classList.add("active");
            const advantagesImg = document.querySelector(".advantages-img");
			// set default background image
			advantagesImg.style.backgroundImage = `url(${imageUrls[0]})`;
            for (let item = 0; item < advantagesItems.length; item++) {
                advantagesItems[item].addEventListener("click", function() {
					// remove active class from all items
                    for (let item of advantagesItems) { item.classList.remove("active") }
					// add active class to clicked item and change background image
                    advantagesItems[item].classList.add("active");
                    advantagesImg.style.backgroundImage = `url(${imageUrls[item]})`;
                });
            }
        }
        changeImg();
	</script>
</section>