
<div id="comments" class="comments-area">

<?php 
	if(post_password_required()== true) return;
	
	if(!comments_open() && get_comment_pages_count() == 0) return;
?>
<?php 
	$comment_number = get_comments_number();
?>
<h4 class="comments-title"> 
	<?php 
		if($comment_number == 1){
			echo '1 Response';
		}else if($comment_number > 1){
			echo sprintf(' %s Responses',$comment_number);
		}
	?>
</h4>


	<ol class="comment-list">
	<?php 
		$commentListArr = array('callback'=> 'comment_cus');
		// wp_list_comments($commentListArr);
		wp_list_comments();
	?>
	</ol>


	<?php 

		if(get_comment_pages_count() > 1 && get_option('page_comments')==1){
	?>
	<nav class="comment-navigation clr" role="navigation">
		<div class="nav-previous span_1_of_2 col col-1">
			<?php previous_comments_link('&larr; Older Comments');?>
		</div>
		<div class="nav-next span_1_of_2 col">
			<?php next_comments_link('Newer Comments &rarr;');?>
		</div>
	</nav>
	<?php }?>
	<?php 
		$formArr = array('cancel_reply_link'=> '<i class="fa fa-times"></i> Cancel comment reply');
		comment_form($formArr);
	?>
	</div>