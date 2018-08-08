<section class="post">
    <header class="post-header">
        <h2 class="post-title"><?php the_title();?></h2>
        <p class="sub-text"><?php echo get_the_date(); ?></p>
        <p class="post-meta">By
            <a class="post-author" href="<?php echo get_the_author_meta($user_url); ?>"><?php the_author();?></a> under
            <?php foreach ((get_the_category()) as $category) {echo '<a class="post-category post-category-' . $category->slug . '" href="' . get_category_link($category->cat_ID) . '">' . $category->name . '</a>';}?>
        </p>
    </header>
    <div class="post-description">
    <?php the_content();?>
    </div>
</section>