<?php /* Smarty version 3.1.27, created on 2015-10-19 00:43:09
         compiled from "C:\wamp\www\BuscaFarma\view\produtos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30455624207d2dca12_35203541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc770aff01501b307614a1b32cafa5489951bbb' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\view\\produtos.tpl',
      1 => 1445208162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30455624207d2dca12_35203541',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624207d364271_63512279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624207d364271_63512279')) {
function content_5624207d364271_63512279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30455624207d2dca12_35203541';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


PRODUTOS

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>