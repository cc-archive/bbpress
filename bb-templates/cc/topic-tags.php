<div id="topic-tags">

<?php if ( $public_tags ) : ?>
<div id="othertags">
<p><?php _e('Tags:'); ?></p>
<?php foreach ( $public_tags as $tag ) : ?>
	<span id="tag-<?php echo $tag->tag_id; ?>_<?php echo $tag->user_id; ?>"><a href="<?php bb_tag_link(); ?>" rel="tag"><?php bb_tag_name(); ?></a>, <?php /* bb_tag_remove_link(); **/ ?></span>
<?php endforeach; ?>
</div>
<?php endif; ?>

<?php if ( !$tags ) : ?>
<p><?php printf(__('No <a href="%s">tags</a> yet.'), bb_get_tag_page_link() ); ?></p>
<?php endif; ?>
<?php tag_form(); ?>

</div>
