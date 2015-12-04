<?php /* Smarty version 3.1.27, created on 2015-10-19 00:43:12
         compiled from "C:\wamp\www\BuscaFarma\view\farmacias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1722562420807517d9_80172981%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd75208f6f4b4229820a7a187051d42aa63d5fcc6' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\view\\farmacias.tpl',
      1 => 1445208107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722562420807517d9_80172981',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562420807dcd20_26353201',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562420807dcd20_26353201')) {
function content_562420807dcd20_26353201 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1722562420807517d9_80172981';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


FARMACIAS

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>