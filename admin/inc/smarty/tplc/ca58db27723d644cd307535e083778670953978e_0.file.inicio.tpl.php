<?php /* Smarty version 3.1.27, created on 2015-10-20 23:49:25
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:297565626b6e52f4785_66869430%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca58db27723d644cd307535e083778670953978e' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\inicio.tpl',
      1 => 1445207547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297565626b6e52f4785_66869430',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626b6e530c329_25497631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626b6e530c329_25497631')) {
function content_5626b6e530c329_25497631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '297565626b6e52f4785_66869430';
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