<?php get_header();?>

<div class="posts">
    <h1 class="content-subhead">Pinned Post</h1>
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
         get_template_part('content', get_post_format());
        }
    }
    wp_reset_query();
?>
</div> <!-- colses the posts div -->

<div class="posts">
    <h1 class="content-subhead">Recent Post</h1>
    <?php if (have_posts()): while (have_posts()): the_post();
        get_template_part('content', get_post_format());
    endwhile;endif;?>
</div> <!-- closes the posts div -->

<?php get_footer();?>
