<?php /* Smarty version 3.1.27, created on 2015-10-19 13:02:12
         compiled from "C:\wamp\www\BuscaFarma\teste\BuscaFarma\view\farmacias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:239645624cdb4519727_72342764%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86133db0d84b7e29b3bd68c5364db468f270ff85' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\teste\\BuscaFarma\\view\\farmacias.tpl',
      1 => 1445208107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239645624cdb4519727_72342764',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624cdb456c8f5_16324837',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624cdb456c8f5_16324837')) {
function content_5624cdb456c8f5_16324837 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '239645624cdb4519727_72342764';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


FARMACIAS

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>