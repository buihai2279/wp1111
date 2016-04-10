<?php 
/**
 * 
 */
 class Customizer{
 	function __construct()
 	{
 		# code...
 	}
 	// video
	/*=========================================================================
	 * IDVIDEO - PLAYLIST SHORTCODE
	* LAY IDVIDEO YOUTUBE DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_id_video($postContent = null){
		if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $postContent, $match)) {
		   return $video_id = $match[1];
		}
		else return '';
	}
	/*=========================================================================
	 * VIDEO - PLAYLIST SHORTCODE
	* LAY VIDEO HOAC YOUTUBE DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_first_video($postContent = null){
		$firstVideo = '';
		if($postContent != null){
			$pattern = '#(\[video.*\]|http.*www\.youtube\.com\S+|http.*\.youtu\.be\S+|\[playlist.*\])#im';
			preg_match_all($pattern, $postContent, $matches);
			$videoArr = $matches[0];
			if(count($videoArr) > 0 ){
				$firstVideo = $videoArr[0];
			} 
		}
		return $firstVideo;
	}
	/*=========================================================================
	 * VIDEO SHORTCODE
	* XOA VIDEO HOAC YOUTUBE DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_video($video,$content){
		$video 	=  str_replace('[', '\[', $video);
		$video 	=  str_replace(']', '\]', $video);
		$video 	=  str_replace('?', '\?', $video);
		$pattern = '#'. $video . '#';
		$content = preg_replace($pattern, '', $content,1);
		return $content;
	}
	
	/*=========================================================================
	 * Link SHORTCODE
	* LAY Link  DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_link($postContent = null){
		$pattern = '`.*?((http|https)://[\w#$&+,\/:;=?@.-]+)[^\w#$&+,\/:;=?@.-]*?`i';
	    if (preg_match($pattern,$postContent,$matches)) {
	        return $matches[1];
	    }
	}
		public function video_embed($url, $site ='youtube'){
		$html = '';
		if($site == 'youtube'){
			$tmp = explode('v=', $url);
			$videoID = $tmp[1];
			$src = 'https://www.youtube.com/embed/' . $videoID . '?feature=oembed';
			$html = '<iframe src="' . $src . '" allowfullscreen="" frameborder="0" width="650" height="366"></iframe>';
		}
		return $html;
	}







	/*=========================================================================
	 * BLOCKQUOTE SHORTCODE
	* LAY BLOCKQUOTE DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function blockquote($postContent = null){
		if($postContent != null){
			$subject = html_entity_decode($postContent);
			preg_match('/<blockquote>(.*?)<\/blockquote>/', $subject, $matches);
			return $matches[1];
		}
	
	}



// gallary

	/*=========================================================================
	 * GALLERY SHORTCODE
	* LAY GALLERY DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function gallary($postContent = null){
		if($postContent != null){
			$subject = html_entity_decode($postContent);
		    $array = array();
		    preg_match_all( '/src="([^"]*)"/i', $subject, $array ) ;
		    return $array;
		}
	}

	/*=========================================================================
	 * GALLERY SHORTCODE
	* XOA GALLERY DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_gallery($gallery,$content){
		$gallery 	=  str_replace('[', '\[', $gallery);
		$gallery 	=  str_replace(']', '\]', $gallery);
		$pattern = '#'. $gallery . '#';
		$content = preg_replace($pattern, '', $content,1);
		return $content;
	}

	public function get_first_gallery($postContent = null){
		$firstGallery = '';
		if($postContent != null){
			$pattern = '#\[gallery.*\]#im';
			preg_match_all($pattern, $postContent, $matches);
			$galleryArr = $matches[0];
			if(count($galleryArr) > 0 ){
				$firstGallery = $galleryArr[0];
			} 
		}
		return $firstGallery;
	}
	






	/*=========================================================================
	 * AUDIO - PLAYLIST SHORTCODE
	* XOA AUDIO HOAC PLAYLIST DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_audio($audio,$content){
		$audio 	=  str_replace('[', '\[', $audio);
		$audio 	=  str_replace(']', '\]', $audio);
		$pattern = '#'. $audio . '#';
		$content = preg_replace($pattern, '', $content,1);
		return $content;
	}
	/*=========================================================================
	 * AUDIO - PLAYLIST SHORTCODE
	* LAY AUDIO HOAC PLAYLIST DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_first_audio($postContent = null){
		$firstAudio = '';
		if($postContent != null){
			$pattern = '#(\[audio.*\/audio\]|\[playlist.*\])#imU';
			preg_match_all($pattern, $postContent, $matches);
			$audioArr = $matches[0];
				
			if(count($audioArr) > 0 ){
				$firstAudio = $audioArr[0];
			}
		}
		return $firstAudio;
	}

	/*=========================================================================
	 * AUDIO - PLAYLIST SHORTCODE
	* LAY AUDIO HOAC PLAYLIST DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	// public function find_shortcode($content = null){
	// 	if($content != null){
	// 		$pattern = '#(\[audio.*\/audio\]|\[caption.*\]|\[embed.*\]|\[gallery.*\]|\[playlist.*\]|\[video.*\])#imU';
	// 		preg_match_all($pattern, $content, $matches);
	// 		$audioArr = $matches[0];
	// 		if(count($audioArr) > 0 ){
	// 			// return $firstAudio = $audioArr[0];
	// 			// return  $matches;
	// 		}
	// 	}
	// 	// return $firstAudio;
	// }
 } 

 ?><!-- [audio],  [caption],  [embed],  [gallery],  [playlist],  [embed] -->