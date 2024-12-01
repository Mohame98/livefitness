<section class="daily-values">
    <div class="container">
        <div class="daily-values-content">
            <div class="daily-value-title">
                <div class="tag"><?php the_field('home_daily_values_tag'); ?></div>
                <h2><?php the_field('home_daily_values_title'); ?></h2>
            </div>
            <!-- CPT Queries -->
            <?php
            $values = new WP_Query(
                array(
                    'post_type' => 'value',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                )
            );
            while($values->have_posts()){
                $values->the_post();
            ?>
            <div class="flex"
            data-aos="fade-in"
            data-aos-delay="300"
            duration-aos="2000">
                <div class="value">
                    <div class="value-title">
                        <h4><?php the_field('home_values_subtitle'); ?></h4>
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <?php the_content(); ?>
                </div>
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                <div class="value-img img" style="background-image:url(<?php echo $url; ?>);"></div>
            </div>
          <?php } wp_reset_postdata(); ?>          
        </div>    
    </div>
</section>