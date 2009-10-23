  <form action="<?php bb_option('uri'); ?>search.php" method="get">
  	<p><h4><?php _e('Search'); ?></h4>
  		<input type="text" size="18" maxlength="100" name="q" value="<?php echo attribute_escape( $q ); ?>" />
  	</p>
  	<?php if( empty($q) ) : ?>
  	<p class="submit"><input type="submit" value="<?php echo attribute_escape( __('Search &raquo;') ); ?>" class="inputButton" /></p>
  	<?php else : ?>
  	<p class="submit"><input type="submit" value="<?php echo attribute_escape( __('Search again &raquo;') ); ?>" class="inputButton" /></p>
  	<?php endif; ?>
  </form>
