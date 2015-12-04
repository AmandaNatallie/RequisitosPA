<?php /* Smarty version 3.1.27, created on 2015-10-21 01:56:42
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\footer.php" */ ?>
<?php
/*%%SmartyHeaderCode:23775626d4bad578c8_61953775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00d556af97332a26c958601bf1f7bd7754ac0ce0' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\footer.php',
      1 => 1445385277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23775626d4bad578c8_61953775',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626d4bad61032_72856771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626d4bad61032_72856771')) {
function content_5626d4bad61032_72856771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23775626d4bad578c8_61953775';
echo '<?php
';?>require_once 'smarty.php';
$data =  date('Y');
$smarty->assign("data", $data);
$smarty->display("menu.tpl");
<?php }
}
?>