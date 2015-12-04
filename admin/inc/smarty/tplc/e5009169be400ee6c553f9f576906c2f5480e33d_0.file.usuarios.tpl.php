<?php /* Smarty version 3.1.27, created on 2015-10-19 13:02:04
         compiled from "C:\wamp\www\BuscaFarma\teste\BuscaFarma\view\usuarios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:314295624cdaceff8a6_79260811%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5009169be400ee6c553f9f576906c2f5480e33d' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\teste\\BuscaFarma\\view\\usuarios.tpl',
      1 => 1445215359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314295624cdaceff8a6_79260811',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5624cdad06a9c2_98679458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5624cdad06a9c2_98679458')) {
function content_5624cdad06a9c2_98679458 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '314295624cdaceff8a6_79260811';
echo $_smarty_tpl->getSubTemplate ("../view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<form method="post">
    Nome<input name="usuario" type="text"/>
    Senha<input name="senha" type="password"/>
    Tipo de Usuário<input name="tipo" type="text"/>
    <input type="submit" value="Cadastrar"/>
</form>

<hr/>

<table border="1">
    <tr>
        <td align="center">Nome</td>
        <td align="center">Senha</td>
        <td align="center">Tipo Usuário</td>
        <td align="center">Edições</td>
        
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
    <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['senha'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['row']->value['id_tipo'];?>
</td>
        <td align="center"><a href="?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
">Editar |  <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id_usuario'];?>
">Deletar</td>
        
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("../view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>