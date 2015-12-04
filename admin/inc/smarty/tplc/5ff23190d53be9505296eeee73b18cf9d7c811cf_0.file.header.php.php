<?php /* Smarty version 3.1.27, created on 2015-10-21 01:50:51
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\header.php" */ ?>
<?php
/*%%SmartyHeaderCode:139835626d35b5b3380_83024665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff23190d53be9505296eeee73b18cf9d7c811cf' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\header.php',
      1 => 1445385001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139835626d35b5b3380_83024665',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626d35b5bfed3_07236039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626d35b5bfed3_07236039')) {
function content_5626d35b5bfed3_07236039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '139835626d35b5b3380_83024665';
echo '<?php

';?>require_once 'smarty.php';

$title = "BuscaFarma Gestion - Seu Painel Administrativo";
$author = "PA - 2B ";
$description = "comparador de pre&ccedil;os de Medicamentos e Produtos Farmaceuticos ";

//criando um indice que será usado para retornar o valor no arquivo HTML
$smarty->assign('title', $title);
$smarty->assign('author', $author);
$smarty->assign('description', $description);

$smarty->display("header.tpl");
<?php }
}
?>