<?php
if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?>>
            <div class="entry-wrapper">
                <?php get_template_part('entry/entry','media' ); ?>
                <?php get_template_part('entry/entry','title' ); ?>
                <?php get_template_part('entry/entry','post-meta'); ?>
                <div class="post-content">
                    <div class="entry-summary">
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
                <?php get_template_part('entry/entry','footer' ); ?>
            </div>
        </article>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; 
?>
<?php include_once get_template_directory() . '/pagination.php';?>