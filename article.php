<section class="post">
    <header class="post-header">
        <div class="wrapper">
            <h1><a class="post-title" href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h1>
        </div>
        <p class="post-meta">By
            <a class="post-author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><?php
                the_author_meta('display_name');
            ?></a> under
            <?php foreach ((get_the_category()) as $category) {echo '<a class="post-category post-category-' . $category->slug . '" href="' . get_category_link($category->cat_ID) . '">' . ucwords($category->name) . '</a>';}?>
        </p>
    </header>
    <div class="post-description">
        <?php if (is_single()) {
            the_content();
        }
        else {
            the_excerpt();
        } ?>
    </div>
</section>