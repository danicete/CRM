<?php /* Smarty version Smarty-3.1.8, created on 2012-08-28 01:11:40
         compiled from "C:\xampp\htdocs\creative\app\templates\_components\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14210503bfeac00f759-43032143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdee894d88a3ae0273e578ecbca031d7ea1e7388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\creative\\app\\templates\\_components\\footer.tpl',
      1 => 1345251305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14210503bfeac00f759-43032143',
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
  'unifunc' => 'content_503bfeac031998_93511269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503bfeac031998_93511269')) {function content_503bfeac031998_93511269($_smarty_tpl) {?>       </div> 
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