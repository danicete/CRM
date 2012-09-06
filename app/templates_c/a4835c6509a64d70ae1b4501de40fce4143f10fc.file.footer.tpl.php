<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 01:10:03
         compiled from "C:\xampp\htdocs\crm\app\templates\_components\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2622750468a4b666731-64940878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4835c6509a64d70ae1b4501de40fce4143f10fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crm\\app\\templates\\_components\\footer.tpl',
      1 => 1345251305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2622750468a4b666731-64940878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'jsIncludes' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50468a4b68d8a0_79379463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50468a4b68d8a0_79379463')) {function content_50468a4b68d8a0_79379463($_smarty_tpl) {?>       </div> 
    </div> 
  </div>
  <footer>

  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/plugins.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/script.js"></script>

  <?php if (count($_smarty_tpl->tpl_vars['jsIncludes']->value)>0){?>
  <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jsIncludes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['siteRoot'];?>
/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
.js"></script>
  <?php } ?>
  <?php }?>

</body>
</html><?php }} ?>