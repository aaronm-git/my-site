                <footer class="footer">
                    <div class="pure-menu pure-menu-horizontal">
                        <ul class="blog-nav">
                            <?php echo wp_list_pages('&title_li=') ?>
                            <li class="pure-menu-item">
                                <a href="https://www.linkedin.com/in/aaronmolinag/" class="pure-menu-link" target="_blank" rel="nofollow">LinkedIn</a>
                            </li>
                            <li class="pure-menu-item">
                                <a href="https://github.com/aaronm-git" class="pure-menu-link" target="_blank" rel="nofollow">GitHub</a>
                            </li>
                        </ul>
                        <small>
                            Made with<br>
                            <a href="https://purecss.io/" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri()."/resources/pictures/logo_pure.png" ?>" alt="pure css logo" style="height: 1.5em;"></a>
                            &
                            <a href="https://wordpress.org/" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri()."/resources/pictures/wp_logo.svg" ?>" alt="wordpress logo" style="height: 1.5em;"></a>
                            <br>
                            See the source code on <a href="https://github.com/aaronm-git/pureCSS-Blog-WordPress-Theme" target="_blank" rel="nofollow">Github</a><br>
                            Aaron Molina | &copy; 2018-<?php echo date("Y"); ?>
                        </small>
                    </div>
                </footer>
            </main> <!-- Closes the main wrapper -->
        <?php wp_footer();?>
    </div>
</body>

</html>
