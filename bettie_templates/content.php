<?php global $customizer; ?>
<?php global $content; ?>
<div class="post-content">
    <?php get_template_part('entry/entry','media-single' ); ?>
	<?php $content=get_the_content(); ?>
	<?php 
		$firstVideo = $customizer->get_first_video($content);
		if( has_shortcode( $firstVideo, 'video')||has_shortcode( $firstVideo, 'playlist') ) {
			do_shortcode(trim($firstVideo));
		}else{
			$id_youtube=$customizer->get_id_video($firstVideo);
			if (isset($id_youtube)&&$id_youtube!=''):  ?>
	            <div class="media video responsive-embed-youtube">
	                <iframe src="https://www.youtube.com/embed/<?php echo $id_youtube;?>?feature=oembed?wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
	            </div>
            <?php endif; ?>
        <?php 
		}
		$content = $customizer->remove_first_video($firstVideo, $content);
	 ?>
	 <?php 
		if(has_shortcode($content,'audio')||has_shortcode($content,'caption')||has_shortcode($content,'embed')||has_shortcode($content,'gallery')||has_shortcode($content,'playlist')||has_shortcode($content,'video')):
	 		// $tmp=$customizer->find_shortcode($content);
	 		// print_r($tmp);
		else: echo $content;
		endif;
 	 ?> 
</div>
<!-- [audio],  [caption],  [embed],  [gallery],  [playlist],  [video] -->