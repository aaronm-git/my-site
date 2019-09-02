<section class="post">
    <header class="post-header">
        <!-- <img width="48" height="48" alt="Eric Ferraiuolo&#x27;s avatar" class="post-avatar" src="img/common/ericf-avatar.png"> -->

        <h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p class="post-meta">
            By
            <a class="post-author" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?php the_author_meta('display_name'); ?></a> under
            <?php foreach ((get_the_category()) as $category) {
                echo "<a class='post-category post-category-$category->slug' style='background-color:"
                    . get_term_meta($category->cat_ID, 'color', true)
                    . ";' href='"
                    . get_category_link($category->cat_ID) . "'>"
                    . ucwords($category->name)
                    . "</a>";
            } ?>
        </p>
    </header>

    <div class="post-description">
        <p>
            <?php if (is_single()) {
                the_content();
            } else {
                the_excerpt();
            } ?>
        </p>
    </div>
</section>