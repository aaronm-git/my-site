<?php get_header();?>

<div class="posts">
    <h1 class="content-subhead">Pinned Posts</h1>
    <?php // get sticky posts from DB
        $sticky = get_option('sticky_posts');
        // check if there are any
        if (!empty($sticky)) {
            // optional: sort the newest IDs first
            rsort($sticky);
            // override the query
            $args = array(
                'post__in' => $sticky
            );
            query_posts($args);
            // the loop
            while (have_posts()) {
                the_post();
                // your code
                get_template_part('article');
                }
            }
        wp_reset_query();
    ?>
</div> <!-- colses the posts div -->

<div class="posts">
    <h1 class="content-subhead">Recent Posts</h1>
    <?php
        while (have_posts()) {
            the_post();
            get_template_part('article');
        }
        the_posts_pagination();
    ?>
</div> <!-- closes the posts div -->

<?php get_footer();?>
