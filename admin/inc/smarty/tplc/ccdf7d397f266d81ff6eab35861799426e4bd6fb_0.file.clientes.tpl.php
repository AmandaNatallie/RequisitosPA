<?php /* Smarty version 3.1.27, created on 2015-10-19 00:45:31
         compiled from "C:\wamp\www\BuscaFarma\view\clientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:146995624210ba84513_36055301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccdf7d397f266d81ff6eab35861799426e4bd6fb' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\view\\clientes.tpl',
      1 => 1445208327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146995624210ba84513_36055301',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624210bb081f2_48437045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624210bb081f2_48437045')) {
function content_5624210bb081f2_48437045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146995624210ba84513_36055301';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


CLIENTES

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>