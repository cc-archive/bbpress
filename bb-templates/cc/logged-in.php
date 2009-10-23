<div class="sideitem">
	<?php printf(__('Welcome, %1$s!'), bb_get_current_user_info( 'name' ));?> 
	<br/><?php bb_profile_link(); ?>
	<br/><small>(<?php bb_admin_link( 'after= | ' );?><?php bb_logout_link(); ?>)</small>
</div>
