<?php global $customizer; ?>

<?php  if(has_post_thumbnail()&&has_post_format('standard')): ?>
        <figure class="entry-thumbnail">
            <div class="thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-image-half');  ?>
                </a>
            </div>
        </figure>

    <?php elseif(has_post_format('video')): ?>
        <?php #$id_youtube= $customizer->get_id_video(get_the_content()); ?>
        <!-- <figure class="entry-media">
            <?php if (isset($id_youtube)):  ?>
            <div class="media video responsive-embed-youtube">
                <iframe src="https://www.youtube.com/embed/<?php echo $id_youtube;?>?feature=oembed?wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <?php endif ?>
            <?php echo get_the_category_list();?>
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
        </figure>

    <?php elseif(has_post_format('quote')): ?>
            <div class="quote">
                <blockquote>
                    <?php echo $customizer->blockquote(get_the_content()); ?>
                </blockquote>
            </div>
            <?php get_template_part('entry/entry-sticky' ); ?>
    <?php elseif(has_post_format('gallery')): ?>
        <!-- <figure class="entry-gallery">
            <div class="gallery">
                <?php $gallery=$customizer->get_first_gallery(get_the_content()); ?>
                <?php echo do_shortcode($gallery); ?>
            </div>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure>  -->

    <?php elseif(has_post_format('audio')): ?>
        <!-- <figure class="entry-media">
            <div class="media audio">
                <?php $audio=$customizer->get_first_audio(get_the_content()); ?>
                <?php echo do_shortcode($audio); ?>
            </div>
            <?php get_template_part('entry/entry-sticky' ); ?>
        </figure> -->

    <?php else: ?>
       <figure class="entry-thumbnail">
            <div class="thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('post-image-half');  ?>
                </a>
            </div>
        </figure>

    <?php endif;?>




