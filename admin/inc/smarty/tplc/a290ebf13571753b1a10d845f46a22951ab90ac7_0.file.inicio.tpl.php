<?php /* Smarty version 3.1.27, created on 2015-10-19 13:02:01
         compiled from "C:\wamp\www\BuscaFarma\teste\BuscaFarma\view\inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212955624cda9937474_10667194%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a290ebf13571753b1a10d845f46a22951ab90ac7' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\teste\\BuscaFarma\\view\\inicio.tpl',
      1 => 1445207547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212955624cda9937474_10667194',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624cda9946e36_30360090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624cda9946e36_30360090')) {
function content_5624cda9946e36_30360090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212955624cda9937474_10667194';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Gerenciamento de informações - <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style="text-align: center">Gerenciamento de informações - <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h1>
        <a href="usuarios.php">Usuarios</a> 
        | <a href="clientes.php">Clientes</a> 
        | <a href="produtos.php">Produtos</a> 
        | <a href="farmacias.php">Farmacias</a>
        
        <hr/>
                
        <div>   <?php }
}
?>