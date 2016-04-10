<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?>>
            <div class="entry-wrapper featured">
                <?php get_template_part('entry/entry','media' ); ?>
                <?php get_template_part('entry/entry-title'); ?>
                <?php get_template_part('entry/entry-post-meta' ); ?>
                <div class="post-content">
                    <div class="entry-content">
                        <p>
                        <?php $content =get_the_content();?>
                        <?php $content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content); ?>
                        <?php $content =wp_strip_all_tags($content);?>
                        <?php $content =strip_shortcodes(get_the_content());?>
                        <?php $content =cleaner_url($content); ?>
                        <?php echo wp_trim_words($content,40,' ...'); ?>
                        </p>
                    </div>
                </div>
                <footer class="entry-footer share-post link-post">
                    <div class="row vertical-align__center">
                        <div class="col-xs-10 col-md-6">
                            <?php get_template_part('social-share' ); ?>
                        </div>
                        <div class="col-xs-2 col-md-6 align-right"> <a href="<?php the_permalink();?>" class="btn btn-link h5-style"><em class="hidden-sm-down">Read more</em> <i class="material-icons">arrow_forward</i></a></div>
                    </div>
                </footer>
            </div>
        </article>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; 
?>
<?php include_once get_template_directory() . '/pagination.php';?>