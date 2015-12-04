<?php /* Smarty version 3.1.27, created on 2015-10-20 23:49:33
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\farmacias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:61845626b6ed5bf1d8_46976722%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a42427c4f2664e4093b7eb2be253559df5589a2' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\farmacias.tpl',
      1 => 1445208107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61845626b6ed5bf1d8_46976722',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626b6ed622478_59490840',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626b6ed622478_59490840')) {
function content_5626b6ed622478_59490840 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '61845626b6ed5bf1d8_46976722';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


FARMACIAS

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>