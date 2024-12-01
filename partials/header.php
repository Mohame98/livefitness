<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LiveFitness</title>
  
    <!-- font awesome -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />

    <!-- CDN slick slider css -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- aos css -->
    <link 
        href="https://unpkg.com/aos@2.3.1/dist/aos.css" 
        rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
        <div class="container">
            <div class="flex">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                    <a href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
                </div>
                <div class="menu-icon img" onclick="headerToggle()"></div>
                <nav>
                    <?php 
                        $rules = array(
                            'theme_location' => 'header-menu',
                        );
                        wp_nav_menu($rules);
                    ?>
                </nav>
                <a href="#" class="btn">get started</a>
            </div>
        </div>
    </header>