<?php get_header();?>
<div class="row">
    <div class="content-wrap col-xs-12 col-sm-12 col-lg-8">
        <section class="sect-404 bg-white text-center">
            <div class="img-wr round"> <img src="http://ld-wp.template-help.com/wordpress_58395_v1/wp-content/themes/blogetti/app/assets//images/404.jpg" alt="The page not found"></div>
            <p class="h1-style accent1-color text-primary"> Page 404</p>
            <p class="h4-style">The page not found</p> <a href="<?php bloginfo('url' ); ?>" class="btn btn-primary btn-visit">Visit home page</a>
            <hr>
            <p>Unfortunately the page you were looking for could not be found. Maybe search can help.</p>
            <form role="search" method="get" class="search-form" action="<?php bloginfo('url' ); ?>">
                <label>
                    <input type="search" class="search-field" placeholder="Enter keyword" value="" name="s" title="Enter keyword"> </label>
                <input class="search-submit" value="Search" type="submit">
            </form>
        </section>
    </div>

    <div class="right-sidebar-wrap col-xs-12 col-sm-12 col-lg-4">
		<?php get_sidebar( ); ?>
    </div>
</div>

<?php get_footer();?>