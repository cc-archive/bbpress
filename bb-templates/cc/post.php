		<div class="threadauthor">
			<p><strong>
			<?php
				echo '<a href="' . esc_attr( get_user_profile_link( get_post_author_id( $post_id ) ) ) . '">';
				post_author(); ?></a>
			</strong><br />
			  <small><?php post_author_title(); ?></small></p>
		</div>
		
		<div class="threadpost">
			<div class="post"><?php post_text(); ?></div>
			<div class="poststuff"><?php printf( __('Posted %s ago'), bb_get_post_time() ); ?> <a href="<?php post_anchor_link(); ?>">#</a> <?php post_ip_link(); ?> <?php post_edit_link(); ?> <?php post_delete_link(); ?></div>
		</div>
