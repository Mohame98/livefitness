<section class="faq">
	<div class="container">
		<div class="flex">
		  	<div class="faq-title">
				<div class="tag"><?php the_field('faq_tag'); ?></div>
				<h1><?php the_field('faq_title'); ?></h1>
		  	</div>
		  	<div class="faq-container">
				<?php $faq = new WP_Query(
					array(
						'post_type' => 'faq',
						'posts_per_page' => -1,
						'order' => 'ASC'
					)
				);
				while($faq->have_posts()){
					$faq->the_post();
				?>
				<div class="faq-item"
				data-aos="fade-in"
                data-aos-delay="300"
				duration-aos="2000">
			  		<div class="question-wrapper">
						<h5 class="question"><?php the_title(); ?></h5>
						<div class="icon img"></div>
			  		</div>
			  		<?php the_content(); ?>
				</div>
				<?php } wp_reset_postdata(); ?>
		  	</div>
		</div>
	</div>
	<script>
		// add answer class to all answers
		const answers = document.querySelectorAll(".faq .faq-item p");
		for (const answer of answers) {answer.classList.add("answer");}

		// open first faq item
		const questionWrapper = document.querySelector(".faq .question-wrapper");
		const icon = questionWrapper.querySelector(".icon");
		const answer = questionWrapper.nextElementSibling;

		questionWrapper.classList.add("is-open");
		answer.style.display = "block";
		icon.classList.add("is-open");
	</script>
</section>