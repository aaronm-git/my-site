<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts.">
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
        <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/layouts/blog.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/layouts/main.css">
    <?php wp_head();?>
</head>

<body>
    <div id="layout" class="pure-g">
        <div class="sidebar pure-u-1 pure-u-md-1-4">
            <div class="header">
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <img alt="Aaron Molina&#x27;s avatar" class="main-avatar" src="https://media.licdn.com/dms/image/C4E03AQEJjWZFFtJHRA/profile-displayphoto-shrink_200_200/0?e=1538611200&v=beta&t=oNV_woGG8AY6YMxoNDkWV-jFiKbtWqK3wGBPUgM881w">
                </a>
                <h1 class="brand-title"><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="brand-tagline"><?php echo get_bloginfo('description'); ?></h2>

                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a class="pure-button" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="pure-button" href="https://github.com/aaronm-git" target="_blank">GitHub</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="content pure-u-1 pure-u-md-3-4">

