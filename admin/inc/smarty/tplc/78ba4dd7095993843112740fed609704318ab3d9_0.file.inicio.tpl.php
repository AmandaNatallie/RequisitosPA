<?php /* Smarty version 3.1.27, created on 2015-10-19 00:36:44
         compiled from "C:\wamp\www\BuscaFarma\view\inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1386556241efc043356_45028631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ba4dd7095993843112740fed609704318ab3d9' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\view\\inicio.tpl',
      1 => 1445207547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386556241efc043356_45028631',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56241efc05d925_77429047',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56241efc05d925_77429047')) {
function content_56241efc05d925_77429047 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1386556241efc043356_45028631';
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