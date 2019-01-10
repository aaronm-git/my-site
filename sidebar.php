<!-- sidebar -->
    <div class="widget pure-u-1 pure-u-lg-1-5">
        <aside class="header" role="complementary">
        
            <?php get_template_part('searchform'); ?>

            <div class="sidebar-widget">
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
            </div>

            <div class="sidebar-widget">
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
            </div>
        </aside>
    </div>
<!-- /sidebar -->
