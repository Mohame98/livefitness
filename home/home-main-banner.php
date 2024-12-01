<section class="main-banner" 
data-aos="fade-down">
    <div class="container">
        <div class="img-container">
            <div class="main img" style="background-image: url(<?php the_field('home_banner_img'); ?>)"></div>
            <div class="banner-content">
                <div class="content-wrapper"
                data-aos="fade-in"
                data-aos-delay="600">
                    <div class="tag"><?php the_field('home_main_banner_tag'); ?></div>
                    <h1><?php the_field('home_main_banner_title'); ?></h1>
                    <p><?php the_field('home_main_banner_p'); ?></p>
                    <div class="btn-wrapper">
                        <a href="<?php the_field('home_main_banner_btn'); ?>" class="btn">get started today</a>
                        <a href="<?php the_field('home_main_banner_learnmore'); ?>" class="btn learn-more">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>