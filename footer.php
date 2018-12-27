    <!-- <div class="footer">
        <div class="pure-menu pure-menu-horizontal">
            <ul>
                <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">About</a></li>
                <li class="pure-menu-item"><a href="http://twitter.com/yuilibrary/" class="pure-menu-link">Twitter</a></li>
                <li class="pure-menu-item"><a href="http://github.com/pure-css/pure/" class="pure-menu-link">GitHub</a></li>
            </ul>
        </div>
        <small>Made with</small>
        <a href="https://purecss.io/" target=".blank"><img src="https://purecss.io/img/logo_pure@2x.png" alt="pure css logo image" style="height: 1.5em;"></a>
        <small>by me.</small><br>
        <small>See the source code on</small> <a href="https://github.com/aaronm-git/pureCSS-Blog-WordPress-Theme">Github</a>
    </div>
    <?# php wp_footer();?>
    </body>
</html> -->

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
                        <small>Made with</small><br>
                        <a href="https://purecss.io/" target="_blank" rel="nofollow"><img src="https://purecss.io/img/logo_pure@2x.png" alt="pure css logo image" style="height: 1.5em;"></a>
                        &
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/WordPress_logo.svg" alt="wordpress logo" style="height: 1.5em;">
                        <br>
                        <small>See the source code on</small> <a href="https://github.com/aaronm-git/pureCSS-Blog-WordPress-Theme" target="_blank" rel="nofollow">Github</a>
                    </div>
                </footer>
            </main> <!-- Closes the main wrapper -->
        <?php wp_footer();?>
    </div>
</body>

</html>
