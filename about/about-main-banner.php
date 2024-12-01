<section class="about-main-banner"
data-aos="fade-down">
	<div class="container">
		<div class="img-container">
		  	<div class="main img" style="background-image:url(<?php the_field('about_main_banner_img'); ?>);"></div>
		  	<div class="banner-title">
			  	<h1><?php the_field('about_main_banner_title'); ?></h1>
			  	<span><?php the_field('about_main_banner_p'); ?></span>
		  	</div>
			<div class="banner-form">
				<div class="form-container"
				data-aos="fade-in"
                data-aos-delay="600">
					<div class="form-wrapper">
						<div class="tag"><?php the_field('about_main_banner_form_tap'); ?></div>
						<p><?php the_field('about_main_banner_form_p'); ?></p>
					</div>
				<h2><?php the_field('about_main_banner_form_title'); ?></h2>
				<?php echo apply_shortcodes('[contact-form-7 id="6d2d599" title="about page newsletter form"]'); ?>
				</div>
			</div>
		</div><!-- img-container ends -->
	</div>
</section>