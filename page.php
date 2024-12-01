<?php get_template_part('partials/header'); ?>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();  
?>
<main>
    defualt page.php
</main>
<?php
        } // end while
    } // end if
?>
<?php get_template_part('partials/footer'); ?>