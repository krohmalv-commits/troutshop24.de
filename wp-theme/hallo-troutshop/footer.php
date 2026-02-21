    </main>
    <footer class="site-footer" role="contentinfo">
        <div class="site-footer-inner">
            <nav class="site-footer-nav" aria-label="Footer">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'fallback_cb' => false,
                    'menu_class' => 'menu footer-menu',
                    'depth' => 1,
                ]);
                ?>
            </nav>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
