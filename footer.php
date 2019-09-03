            <footer class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul class="blog-nav">
                        <?php echo wp_list_pages('&title_li=') ?>
                    </ul>
                    <small>
                        Powered by<br>
                        <a href="https://purecss.io/" target="_blank" rel="nofollow" class="footer-logo"><img src="<?php echo get_template_directory_uri()."/resources/pictures/logo_pure.png" ?>" alt="pure css logo"></a>
                    </small><br>
                    <small>See the source code on</small> <a href="https://github.com/aaronm-git/pureCSS-Blog-WordPress-Theme" target="_blank" rel="nofollow">Github</a>
                    <br>&copy; 2018-<?php echo date("Y"); ?>
                </div>
                <?php wp_footer();?>
            </footer>
    </div> <!-- Closes content div in header.php-->
</body>

</html>
