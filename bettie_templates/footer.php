
    </div>
    <!-- .container -->
</div>
<!-- #content -->
</div>
<!-- #site-wrapper -->
<footer id="footer" class="site-footer invert">
    <div class="footer-style-1">
        <div class="footer-widgets footer-widget-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 invert">
                        <!-- widget -->
                        <?php get_sidebar('footer' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <section class="footer-content-area footer-bg-color">
            <div class="container">
                <div class="hidden-sm-down">
                    <div class="footer-panel_logo footer-logo_wrap text-center">
                        <div class="footer-logo">
                        <a class="h2-style" href="<?php  bloginfo('url'); ?>">
                            <em><?php bloginfo('name'); ?></em></a>
                            <div class="site-description h6-style">
                                <em><?php bloginfo('description'); ?></em>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="social-list list-footer">
                    <?php get_template_part('social'); ?>
                </ul>
                <div class="footer-copyright-menu-wrap inline-blocks align-center">
                    <p class="site-info align-center"> © <span id="copyright-year">2016</span> Blogetti recipes notes. All Rights reservered</p>
                    <?php get_template_part('nav/nav-footer' ); ?>
                </div>
            </div>
        </section>
    </div>
</footer>
<?php wp_footer(); ?>
	</body>
</html>


