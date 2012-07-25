<?php /* Smarty version Smarty-3.1.8, created on 2012-07-07 16:12:35
         compiled from "/home/jlwatson/public_html/creative/app/templates/edit/followers/addFollowers-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8013862744ff898334c7db4-54262789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3b1c9f57a45516a6a208e7ec5439307afcad5a' => 
    array (
      0 => '/home/jlwatson/public_html/creative/app/templates/edit/followers/addFollowers-ajax.tpl',
      1 => 1341600153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8013862744ff898334c7db4-54262789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usersInfo' => 0,
    'user' => 0,
    'reqRow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4ff8983351a547_10412327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff8983351a547_10412327')) {function content_4ff8983351a547_10412327($_smarty_tpl) {?><div id="addFollowersDialogContent">
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
		<div class="follower-action" id="followerDialogAdd">Add Follower(s)</div>
		<div class="follower-action" id="followerDialogClose">Close</div>
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