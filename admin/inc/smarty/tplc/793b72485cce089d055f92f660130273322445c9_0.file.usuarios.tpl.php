<?php /* Smarty version 3.1.27, created on 2015-12-04 16:52:59
         compiled from "view\tpl\usuarios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209755661b6db5a2741_80860149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '793b72485cce089d055f92f660130273322445c9' => 
    array (
      0 => 'view\\tpl\\usuarios.tpl',
      1 => 1449244368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209755661b6db5a2741_80860149',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661b6db6899f2_02103498',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661b6db6899f2_02103498')) {
function content_5661b6db6899f2_02103498 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209755661b6db5a2741_80860149';
echo $_smarty_tpl->getSubTemplate ("view/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>




<!-- BEGIN Main Content -->

<div class="row-fluid">

    <div class="span12">

        <div class="box">

            <div class="box-title">

                <h3><i class="icon-reorder"></i> Cadastro de Usuários</h3>

                <div class="box-tool">

                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>

                    <a data-action="close" href="#"><i class="icon-remove"></i></a>

                </div>

            </div>

            <div class="box-content">

                <form class="form-horizontal" id="validation-form" method="post">



                    <div class="control-group">

                        <label class="control-label" for="nome">Nome:</label>

                        <div class="controls">

                            <div class="span12">

                                <input type="text" name="nome" id="nome" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />

                            </div>

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="usuario">Usuario:</label>

                        <div class="controls">

                            <div class="span12">

                                <input type="text" name="usuario" id="usuario" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />

                            </div>

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="senha">Senha:</label>

                        <div class="controls">

                            <div class="span12">

                                <input type="password" name="senha" id="senha" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />

                            </div>

                        </div>

                    </div>

                    <div class="control-group">

                        <label class="control-label" for="tipo">Tipo:</label>

                        <div class="controls">

                            <div class="span12">

                                <input type="text" name="tipo" id="tipo" class="input-xlarge" data-rule-required="true"  />

                            </div>

                        </div>

                    </div>





                    <div class="form-actions">

                        <input type="submit" class="btn btn-primary" name="bt_save_df" value="Salvar">

                        <a href="index.php"><button type="button" class="btn">Cancelar</button></a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<!-- END Main Content -->

<div class="row-fluid">

    <div class="span12">

        <div class="box">

            <div class="box-title">

                <h3><i class="icon-table"></i> Gerenciamento de Usuários</h3>

                <div class="box-tool">

                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>

                    <a data-action="close" href="#"><i class="icon-remove"></i></a>

                </div>

            </div>

            <div class="box-content">

                <div class="clearfix"></div>

                <table class="table table-advance" id="table1">

                    <thead>

                        <tr>

                            <th>Nome</th>

                            <th>Usuário</th>

                            <th>Senha</th>

                            <th>Tipo</th>

                            <th style="width:100px">Opções</th>

                        </tr>

                    </thead>

                    <tbody>

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

                        <tr class="table-flag-blue">

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome'];?>
</td>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['senha'];?>
 (Criptografada)</td>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id_tipo'];?>
</td>

                            <td>

                                <div class=btn-group">

                                    <a class="btn btn-small show-tooltip" title="Editar" href="usuarios/<?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
"><i class="icon-edit"></i></a>

                                    <a class="btn btn-small btn-danger show-tooltip" href="http://localhost/admin/usuarios.php?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id_usuario'];?>
" title="Deletar"><i class="icon-trash"></i></a>

                                </div>

                            </td>

                        </tr>

                        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<div class="retorno"></div>



<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>




<?php }
}
?>