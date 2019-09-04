<?php get_header(); ?>

<div class="posts">
    <?php if (areThereStickyPosts()) : ?>
        <h1 class="content-subhead">Pinned Posts</h1>
        <?php onlyStickyPosts(); ?>
    <?php endif; ?>
    <?php if (have_posts() > 0) : ?>
        <h1 class="content-subhead">Recent Posts</h1>
        <?php showPosts() !== '' ?>
    <?php else : echo '<h1 class="content-subhead">No posts to display</h1>' ?>
    <?php endif; ?>
</div> <!-- closes the posts div -->

<?php # if (!is_front_page() && !is_404())
get_sidebar(); ?>
<!-- Gets blog sidebar if its not the home or 404 page-->

<?php get_footer(); ?>