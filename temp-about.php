<?php //Template Name: Page about or similar ?>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();  
?>
<?php get_template_part('partials/header'); ?>
<main>
	<?php get_template_part('about/about-main-banner'); ?>
	<?php get_template_part('about/team-story'); ?>
	<?php get_template_part('about/team-members'); ?>
	<?php get_template_part('about/faq'); ?>
	<?php get_template_part('partials/articles'); ?>
</main>
<?php
        } // end while
    } // end if
?>
<?php get_template_part('partials/footer'); ?>