<?php global $customizer; ?>

<?php  if(has_post_thumbnail()): ?>
        <figure class="entry-thumbnail">
            <div class="thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-image-half');  ?>
                </a>
            </div>
            <?php echo get_the_category_list();?>
        </figure>

    <?php elseif(has_post_format('video')): ?>
        <?php 
            // echo $firstVideo = $customizer->get_first_video($content);
            // echo $content    = $customizer->remove_first_video($firstVideo, $content);
         ?>
        <<!-- figure class="entry-media">
            <?php if (isset($id_youtube)):  ?>
            <div class="media video responsive-embed-youtube">
                <iframe src="https://www.youtube.com/embed/<?php echo $id_youtube;?>?feature=oembed?wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <?php endif ?>
            <?php echo get_the_category_list();?>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure> -->

    <?php elseif(has_post_format('link')): ?>
        <figure class="entry-thumbnail entry-link">
            <div class="thumbnail">
                <?php $link= $customizer->get_link(get_the_content()); ?>
                <a href="<?php echo $link ?>" target="_blank">
                    <div class="link-image-background" style="background-image: url(<?php the_post_thumbnail_url('link-image-background'); ?>)">
                    </div>
                    <div class="link"><?php echo $link ?></div> 
                </a>
            </div>
            <?php echo get_the_category_list();?>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure>

    <?php elseif(has_post_format('quote')): ?>
        <figure class="entry-quote">
            <div class="quote">
                <blockquote>
                    <?php echo $customizer->blockquote(get_the_content()); ?>
                </blockquote>
                <?php echo get_the_category_list();?>
            </div>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure>

    <?php elseif(has_post_format('gallery')): ?>
        <figure class="entry-gallery">
            <div class="gallery">
                <?php $gallery=$customizer->get_first_gallery(get_the_content()); ?>
                <?php echo do_shortcode($gallery); ?>
            </div>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure> 

    <?php elseif(has_post_format('audio')): ?>
        <figure class="entry-media">
            <div class="media audio">
                 <!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]--> 
                <?php $audio=$customizer->get_first_audio(get_the_content()); ?>
                <?php echo do_shortcode($audio); ?>
            </div>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure>

    <?php else: ?>
        <?php echo get_the_category_list();?>
        <?php get_template_part('entry/entry-sticky' ); ?>
    <?php endif;?>




