<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

$CI = & get_instance();

if (!$this->tank_auth->is_team($team->id))
	$CI->buttoner[] = array(
		'text' => _('Apply for membership'),
		'href' => site_url('/admin/members/apply_team/' . $team->id),
		'plug' => _('Do you really want to apply for membership in this team?')
	);

echo buttoner();


echo form_open();
echo $table;
echo form_close();
?>
<br/><br/>
<?php
// Check for admin has already been done in controller
if ($no_leader) {
	echo _("Make an user a leader by submitting his username:");
	echo form_open("/admin/members/make_team_leader_username/".$team->id);
	echo '<table class="form"><tr><td>';
	echo form_input(array('name' => 'username', 'placeholder' => 'Username'));
	echo '</td><td>';
	echo form_submit('save', 'Save');
	echo form_close();
	echo '</td></tr></table>';
}
?>
<div class="section"><?php echo _("Members") ?>:</div><br/>
<?php
echo $members;