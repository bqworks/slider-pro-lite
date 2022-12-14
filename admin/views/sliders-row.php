<?php
	$lad_nonce = wp_create_nonce( 'load-slider-data' . $slider_id );
	$delete_nonce = wp_create_nonce( 'delete-slider' . $slider_id );
	$duplicate_nonce = wp_create_nonce( 'duplicate-slider' . $slider_id );

	$edit_url = admin_url( 'admin.php?page=sliderpro-lite&id=' . $slider_id . '&action=edit' );
	$preview_url = admin_url( 'admin.php?page=sliderpro-lite&id=' . $slider_id . '&action=preview' ) . '&lad_nonce=' . $lad_nonce;
	$delete_url = admin_url( 'admin.php?page=sliderpro-lite&id=' . $slider_id . '&action=delete' ) . '&da_nonce=' . $delete_nonce;
	$duplicate_url = admin_url( 'admin.php?page=sliderpro-lite&id=' . $slider_id . '&action=duplicate' ) . '&dua_nonce=' . $duplicate_nonce;
?>
<tr class="slider-row">
	<td><?php echo $slider_id; ?></td>
	<td><?php echo esc_html( $slider_name ); ?></td>
	<td><?php echo '[sliderpro id="' . $slider_id . '"]'; ?></td>
	<td><?php echo $slider_created; ?></td>
	<td><?php echo $slider_modified; ?></td>
	<td>
		<a href="<?php echo $edit_url; ?>"><?php _e( 'Edit', 'slider-pro-lite' ); ?></a> |
		<a class="preview-slider" href="<?php echo $preview_url; ?>"><?php _e( 'Preview', 'slider-pro-lite' ); ?></a> |
		<a class="delete-slider" href="<?php echo $delete_url; ?>"><?php _e( 'Delete', 'slider-pro-lite' ); ?></a> |
		<a class="duplicate-slider" href="<?php echo $duplicate_url; ?>"><?php _e( 'Duplicate', 'slider-pro-lite' ); ?></a>
	</td>
</tr>