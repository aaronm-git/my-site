<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <div class="posts">
                <h1 class="content-subhead">Archives</h1>
                <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('article');
                    }
                    the_posts_pagination();
                ?>
            </div> <!-- closes the posts div -->

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
