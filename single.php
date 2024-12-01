<?php get_template_part('partials/header'); ?>
<!-- START LOOP HERE -->
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();  
?>
<main>
    <section class="blogs-main-banner"
    data-aos="fade-in">
        <div class="container">
            <div class="main-banner-title">
            <h1><?php the_title(); ?></h1>
                <?php $tags = get_the_terms($post->ID, 'post_tag'); ?>
                <?php foreach ($tags as $tag): ?>
                    <div class="tag"><?php echo esc_html($tag->name); ?></div>
                <?php endforeach; ?>
            </div><!-- end of title -->
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
            <div class="main img" style="background-image:url(<?php echo $url; ?>);"></div>
        </div><!-- end of container -->
    </section>

    <section class="author-article">
        <div class="container">
            <div class="article-content">
                <div class="author">
                    <?php
                        $author_id = get_the_author_meta('ID');
                        $job_title = get_field('author_job_title', 'user_' . $author_id);
                        $profile_image = get_field('author_img', 'user_' . $author_id);
                        $instagram_link = get_field('author_instagram_link', 'user_' . $author_id);
                        $linkedin_link = get_field('author_linkedin_link', 'user_' . $author_id);
                    ?>
                    <div class="author-info">
                       <span>Author</span>
                        <div class="wrapper">
                            <?php if ($profile_image): ?>
                                <div class="author-img img" style="background-image:url(<?php echo esc_url($profile_image); ?>);"></div>
                            <?php endif; ?> 
                            <div class="author-name">
                                <h4><?php echo esc_html(get_the_author()); ?></h4>
                                <p><?php echo esc_html($job_title); ?></p>
                            </div>
                        </div> 
                        <p><?php echo esc_html(get_the_author_meta('description')); ?></p>
                        <br>
                        <a href="<?php echo esc_url(get_the_author_meta('user_url')); ?>" target="_blank">
                            Visit My Website
                        </a>
                    </div>
                    <div class="details">
                        <p class="title">Details</p>
                        <div class="wrapper">
                            <div class="item">
                                <h5>Date</h5>
                                <p><?php the_time('M j, Y'); ?></p>
                            </div>
                            <div class="item">
                                <h5>Category</h5>
                                <?php $categories = get_the_category(); ?>
                                <p><?php echo esc_html($categories[0]->name); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="socials">
                        <ul>
                            <li><a 
                                href="<?php echo esc_url($instagram_link); ?>" 
                                target="_blank">
                                <i class="fa-brands fa-facebook"></i>Instagram</a>
                            </li>
                            <li><a 
                                href="<?php echo esc_url($linkedin_link); ?>" 
                                target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- end of author -->
                <div class="text-editor-content">
                    <?php the_content(); ?>
                    <?php $prev_post = get_previous_post(); ?>
                    <?php $next_post = get_next_post(); ?>
                    <div class="pagination">
                        <div class="page-links">
                            <?php if($prev_post) : ?>
                                <a class="btn learn-more" href="<?php echo get_permalink($prev_post->ID); ?>">Previous</a>
                            <?php endif; ?>
                            <?php if($next_post) : ?>
                                <a class="btn learn-more" href="<?php echo get_permalink($next_post->ID); ?>">Next</a>
                            <?php endif; ?>
                        </div>
                    </div>   
                </div><!-- end of text-editor-content -->
            </div>
        </div><!-- end of container -->
    </section>             
    <?php get_template_part('/partials/articles'); ?>
</main>
<?php
        } // end while
    } // end if
?>
<!-- END POSTS LOOP -->
<?php get_template_part('partials/footer'); ?>