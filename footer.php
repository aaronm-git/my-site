                <footer class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul class="blog-nav">
                            <li>
                                <a href="<?php echo get_bloginfo('wpurl'); ?>">Home</a>
                            </li>
                            <?php echo wp_list_pages('&title_li=') ?>
                            <li class="pure-menu-item">
                                <a href="https://www.linkedin.com/in/aaronmolinag/" class="pure-menu-link" target="_blank">LinkedIn</a>
                            </li>
                            <li class="pure-menu-item">
                                <a href="https://github.com/aaronm-git" class="pure-menu-link" target="_blank">GitHub</a>
                            </li>
                        </ul>
                        <!-- <small>Made with</small>
                        <a href="https://purecss.io/"><img src="https://purecss.io/img/logo_pure@2x.png" alt="pure css logo image" style="height: 1.5em;"></a> -->
                    </div>
                </footer>
            </main> <!-- Closes the main wrapper -->
        <?php wp_footer();?>
    </div>
</body>

</html>
