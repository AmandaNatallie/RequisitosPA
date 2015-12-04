<?php /* Smarty version 3.1.27, created on 2015-10-19 13:02:01
         compiled from "C:\wamp\www\BuscaFarma\teste\BuscaFarma\view\produtos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74385624cda9822e64_04027497%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7372015f6aef782056af06511026f59008e6511' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\teste\\BuscaFarma\\view\\produtos.tpl',
      1 => 1445208162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74385624cda9822e64_04027497',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624cda9910f12_55692147',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624cda9910f12_55692147')) {
function content_5624cda9910f12_55692147 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74385624cda9822e64_04027497';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


PRODUTOS

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>