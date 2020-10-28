<?php

function extra_user_profile_fields( $user ) {
?>
<h3>额外设置</h3>
<table class="form-table">
	<tr>
		<th>
			<label>邮件订阅</label>
		</th>
		<td>
			<?php if(home_check_subscribe_author($user->ID)): ?>
			<input type="radio" name="mail-subscripe" id="mail-subscripe" value="Yes" checked="checked" />接收邮件订阅
			<input type="radio" name="mail-subscripe" id="mail-subscripe" value="No"/>拒收邮件订阅
			<?php else: ?>
			<input type="radio" name="mail-subscripe" id="mail-subscripe" value="Yes"/>接收邮件订阅
			<input type="radio" name="mail-subscripe" id="mail-subscripe" value="No" checked="checked" />拒收邮件订阅
			<?php endif; ?>
		</td>
	</tr>
</table>

<?php
}

function save_extra_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) { 
		return false; 
	} else {
		if( $_POST['mail-subscripe'] == 'Yes') {
			return home_subscribe_author($user_id);
		} else {
			return home_unsubscribe_author($user_id);
		}
		
	}
}

?>