<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <?php wp_head();?>
</head>

<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-1-5">
            <div class="header">
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <img alt="Aaron Molina&#x27;s avatar" class="main-avatar pure-img" src="
                    <?php
                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full');
                            echo $image[0];
                        }
                        else {
                            echo get_template_directory_uri()."/resources/pictures/default-pic.png";
                        }
                    ?>
                    ">
                </a>
                <h1 class="brand-title"><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="brand-tagline"><?php echo get_bloginfo('description'); ?></h2>

                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a class="pure-button" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="pure-button" href="?page_id=47">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="pure-button" target="_blank" rel="nofollow" href="https://visualcv.com/aaron-molina">Resume</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <?php if (!is_front_page() && !is_404()) get_sidebar(); ?>
        <div class="content pure-u-1 <?php if (!is_front_page() && !is_404()) { echo "pure-u-md-3-5";} else {
            echo "pure-u-md-4-5"; }?>">
