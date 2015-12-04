<?php /* Smarty version 3.1.27, created on 2015-10-19 13:02:10
         compiled from "C:\wamp\www\BuscaFarma\teste\BuscaFarma\view\clientes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187035624cdb2ce9083_45643473%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '940b1856aaa26db528c501383817054d3cf86669' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\teste\\BuscaFarma\\view\\clientes.tpl',
      1 => 1445208327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187035624cdb2ce9083_45643473',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624cdb2d3e8a9_12913367',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624cdb2d3e8a9_12913367')) {
function content_5624cdb2d3e8a9_12913367 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187035624cdb2ce9083_45643473';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


CLIENTES

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>