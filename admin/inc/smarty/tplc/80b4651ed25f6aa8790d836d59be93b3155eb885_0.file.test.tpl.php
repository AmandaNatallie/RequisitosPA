<?php /* Smarty version 3.1.27, created on 2015-10-19 00:18:53
         compiled from "C:\wamp\www\BuscaFarma\view\test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1197156241acd29f4f1_72249350%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b4651ed25f6aa8790d836d59be93b3155eb885' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\view\\test.tpl',
      1 => 1445206008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197156241acd29f4f1_72249350',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56241acd312205_23732456',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56241acd312205_23732456')) {
function content_56241acd312205_23732456 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1197156241acd29f4f1_72249350';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Olá</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
, ei</div>
    </body>
</html>

<?php }
}
?>