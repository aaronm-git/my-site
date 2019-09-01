<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
    <?php wp_head();?>

</head>
<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-1-4">
            <div class="header">

                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <img alt="Aaron Molina&#x27;s avatar" class="pure-img website-logo" src="<?php website_logo_url(); ?>">
                </a>

                <h1 class="brand-title"><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="brand-tagline"><?php echo get_bloginfo('description'); ?></h2>

                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a class="pure-button" href="<?php echo get_site_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="pure-button" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="pure-button" target="_blank" rel="nofollow" href="https://visualcv.com/aaron-molina">Resume</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="content pure-u-1 
        <?php # if (!is_front_page() && !is_404()) { echo "pure-u-md-3-5";} else {
            echo "pure-u-md-3-4"; # }?>">