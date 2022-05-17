<div class="comments-wrapper">
	<div class="comments" id="comments">
		<div class="comments-header">
			<h2 class="comment-reply-title">
				<?php
					if(!have_comments()){
						echo '<h4 class = "comment-reply-title main-comment-title">Start the conversation!</h4>';
					}
					else{
						echo get_comments_number(). " Comments";
					}
				?>
			</h2><!-- .comments-title -->
		</div><!-- .comments-header -->
		<div class="comments-inner">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 70,
						'style' => 'div'		
					)
				);
			?>
		</div><!-- .comments-inner -->
	</div><!-- comments -->
	<hr class="" aria-hidden="true">
	<?php
		if(comments_open()){
			comment_form(
			array(
				'class_form' => '',
				'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title">',
				'title_reply_after' => '</h6>'
			)
			);
		}
	?>
</div>