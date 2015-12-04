<?php /* Smarty version 3.1.27, created on 2015-10-20 23:49:25
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\produtos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56795626b6e51dfc83_53850709%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdd993e224e26e8ba52d728805d072c99c3f949' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\produtos.tpl',
      1 => 1445208162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56795626b6e51dfc83_53850709',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626b6e52d7093_37398492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626b6e52d7093_37398492')) {
function content_5626b6e52d7093_37398492 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56795626b6e51dfc83_53850709';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


PRODUTOS

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>