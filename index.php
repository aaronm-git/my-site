<?php get_header();?>
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>
<?php query_posts('category_name=pinned');?>
<?php if (have_posts()): while (have_posts()): the_post();
        get_template_part('content', get_post_format());
    endwhile;endif;?>
<?php wp_reset_query();?>
            </div> <!-- colses the posts div -->

            <div class="posts">
                <h1 class="content-subhead">Recent Post</h1>
<?php if (have_posts()): while (have_posts()): the_post();
        get_template_part('content', get_post_format());
    endwhile;endif;?>
            </div> <!-- closes the posts div -->
<?php get_footer();?>
