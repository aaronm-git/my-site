<?php get_header(); ?>

<section class="post">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
    <header class="post-header">
        <div class="wrapper">
            <h1 class="post-title"><?php the_title();?></h1>
        </div>
        <p class="post-meta">By
            <a class="post-author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><?php the_author_meta('display_name'); ?></a> under
            <?php foreach ((get_the_category()) as $category) {echo '<a class="post-category post-category-' . $category->slug . '" href="' . get_category_link($category->cat_ID) . '">' . ucwords($category->name) . '</a>';}?>
        </p>
    </header>
            
    <h1 class="content-subhead"></h1>
    <div class="post-description">
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('large',array('class' => 'pure-img'));?>
            </a>
        <?php endif; ?>

        <?php the_content(); ?>
        
        <h1 class="content-subhead">Meta</h1>
        <span><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
        <span>This post was written by <?php the_author_posts_link(); ?></span>

        <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
    </div>

    <?php endwhile; ?>
    
    <?php else: ?>
        <!-- article -->
        <article>
            <h1><?php _e( 'Sorry, nothing to display.' ); ?></h1>
        </article>
        <!-- /article -->
    <?php endif; ?>

</section>

<?php get_footer(); ?>