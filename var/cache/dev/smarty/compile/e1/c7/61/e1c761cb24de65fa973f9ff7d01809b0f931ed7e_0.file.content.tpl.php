<?php
/* Smarty version 4.5.5, created on 2025-09-28 12:41:11
  from 'C:\wamp64\www\prestashop\admin663dhn0qvnjhs2kwsa6\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68d91ed73e3c88_64112213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1c761cb24de65fa973f9ff7d01809b0f931ed7e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin663dhn0qvnjhs2kwsa6\\themes\\default\\template\\content.tpl',
      1 => 1756996824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d91ed73e3c88_64112213 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
