<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:45:07
         compiled from "C:\xampp\htdocs\crm\app\templates\edit\followers\addFollowers-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453750478164e270d6-76479762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b89be914f12ba4c2604979d3263b8b2d9dc5239' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\edit\\followers\\addFollowers-ajax.tpl',
      1 => 1346863503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453750478164e270d6-76479762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50478164e77c82_38241630',
  'variables' => 
  array (
    'usersInfo' => 0,
    'user' => 0,
    'reqRow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50478164e77c82_38241630')) {function content_50478164e77c82_38241630($_smarty_tpl) {?><div id="addFollowersDialogContent">
	<div class="addFollowersUserContainer">
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<div class="follower-container">
				<div class="follower-isadmin">
					<input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="add-user-checkbox" />
				</div>
				<div class="follower-name"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
				<div class="follower-email"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div>
				<div class="follower-controls">
					<input type="hidden" class="follower-hidden-id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
				</div>
			</div>	
		<?php } ?>
	</div>
	<div class="follower-actions">
		<div class="request-dialog-button" id="followerDialogAdd">Add Follower(s)</div>
		<div class="request-dialog-button" id="followerDialogClose">Close</div>
	</div>
	<input type="hidden" id="formID" value="<?php echo $_smarty_tpl->tpl_vars['reqRow']->value['id'];?>
" />
</div>
<script>


$('.addFollowersUserContainer .follower-container').on('click', function() {
	if($(this).hasClass('add-this-follower')) {
		$(this).removeClass("add-this-follower");
		$(this).find('.add-user-checkbox').prop('checked', false);
	} else {
		$(this).addClass("add-this-follower");
		$(this).find('.add-user-checkbox').prop('checked', true);
	}
});

$("#followerDialogAdd").on('click', function() {

	var url = $("#followersURL").val();
	var followersToAdd = [];

	$.each($('.add-this-follower'), function(index, value) {
		followersToAdd.push($(value).find('.follower-hidden-id').val());
	});
	
	$.post(url, {addFollowers: 1, followers: followersToAdd, formID: $("#formID").val()}, function(data) {
		if(data.status == "success") {
			window.location = window.location;
		} else {

		}
	},"json");
});

</script><?php }} ?>