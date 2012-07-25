<?php /* Smarty version Smarty-3.1.8, created on 2012-05-18 02:27:59
         compiled from "../app/templates\_components\requestFormatBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217584fb1e171026898-34622872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32720536d42d0e22124be7bd0de13737fd2e8935' => 
    array (
      0 => '../app/templates\\_components\\requestFormatBlock.tpl',
      1 => 1337300877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217584fb1e171026898-34622872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb1e17104e606_43661561',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb1e17104e606_43661561')) {function content_4fb1e17104e606_43661561($_smarty_tpl) {?><div class="unit-format-block">
	<h5>Requested Format</h5>
	<form>
		<ul>
			<li>
				<span>PSD</span>
				<input type="radio" value="psd" name="type" />
			</li>
			<li>
				<span>AI</span>
				<input type="radio" value="ai" name="type" />
			</li>
			<li>
				<span>JPG/PNG</span>
				<input type="radio" value="jpg/png" name="type" />
			</li>
		</ul>
	</form>	
</div><?php }} ?>