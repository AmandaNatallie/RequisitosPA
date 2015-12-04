<?php /* Smarty version 3.1.27, created on 2015-11-07 18:07:58
         compiled from "view\tpl\farmacias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10528563e2fee5daad8_34469586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18836990076dab583471b9758c099dd30a301fd0' => 
    array (
      0 => 'view\\tpl\\farmacias.tpl',
      1 => 1446815686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10528563e2fee5daad8_34469586',
  'variables' => 
  array (
    'est' => 0,
    'r' => 0,
    'cid' => 0,
    'e' => 0,
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563e2fee7513f2_86807206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563e2fee7513f2_86807206')) {
function content_563e2fee7513f2_86807206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10528563e2fee5daad8_34469586';
echo $_smarty_tpl->getSubTemplate ("view/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen.min.css" />
<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<!-- BEGIN Main Content -->
<div class="row-fluid">
    <div class="span12">
        <div class="box collapsed">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> Cadastro de Farm�cias</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" enctype="multipart/form-data" id="validation-form" method="post" >
                    <input type="hidden" name="tipo" id="tipo" value="2">
                    <div class="control-group">
                        <label class="control-label" for="nome">Raz�o Social:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="text" name="nome" id="nome" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="cnpj">CNPJ:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="text" name="cnpj" id="cnpj" data-mask="99.999.999/9999-99" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="endereco">Endere�o:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="text" name="endereco" id="endereco" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telefone">Telefone:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="text" name="telefone" data-mask="(99) 9999-9999?9" id="telefone" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">E-mail:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="text" name="email" id="email" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="select" class="control-label">Estado:</label>
                        <div class="controls">
                            <select class="chosen" name="estado" id="estado" data-rule-required="true">

                                <option>-- Selecione um Estado --</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['est']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['estado'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['descricao'];?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
                            </select>
                        </div>
                        
                    </div> 
                    <div class="control-group">
                        <label class="control-label">Cidade</label>
                        <div class="controls">
                            <select data-placeholder="Selecione a Cidade" name="cidade" id="cidade" class="chosen" tabindex="-1" id="selS0V">
                              <option value=""> </option>
                                 <?php
$_from = $_smarty_tpl->tpl_vars['cid']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['e']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
$foreach_e_Sav = $_smarty_tpl->tpl_vars['e'];
?>
                                 <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['id_cidade'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['cidade'];?>
 - <?php echo $_smarty_tpl->tpl_vars['e']->value['uf'];?>
</option>
                                  <?php
$_smarty_tpl->tpl_vars['e'] = $foreach_e_Sav;
}
?>

                           </select>
                        </div>
                     </div>
                     <div class="control-group">
                        <label class="control-label">Logotipo em Alta Resolu��o:</label>
                        <div class="controls">
                           <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                 <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=sem+imagem" alt="" />
                              </div>
                              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                              <div>
                                 <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                 <span class="fileupload-exists">Alterar</span>
                                 <input type="file" class="default" name="foto" id="foto" data-rule-required="true"   /></span>
                                 <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                              </div>
                           </div>

                        </div>
                     </div>
                    <div class="control-group">
                        <label class="control-label" for="usuario">Usu�rio do painel:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="text" name="usuario" id="usuario" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="password">Senha:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="password" name="password" id="password" class="input-xlarge" data-rule-required="true" data-rule-minlength="6" />
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="confirm-password">Confirma��o de Senha:</label>
                        <div class="controls">
                            <div class="span12">
                                <input type="password" name="confirm-password" id="confirm-password" class="input-xlarge" data-rule-required="true" data-rule-minlength="6" data-rule-equalTo="#password" />
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary" name="bt_save_df_farm" id="bt_save_df_farm" value="Salvar">
                        <a href="http://desenvolvimento.criativin.com.br/buscafarma/admin"><button type="button" class="btn">Cancelar</button></a>
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
                <h3><i class="icon-table"></i> Gerenciamento de Farm�cias</h3>
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
                            <th>Logotipo</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CNPJ</th>
                            <th>E-mail</th>
                            <th style="width:100px">Op��es</th>
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
                            <td><img src="/BuscaFarma/templates/midias/farmacias/<?php echo $_smarty_tpl->tpl_vars['row']->value['logotipo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['nome'];?>
" style="width: 200px; border: 1px solid #444"></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefone'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cnpj'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                            <td>
                                <div class=btn-group">
                                    <a class="btn btn-small show-tooltip" title="Editar" href="?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['id_farmacia'];?>
"><i class="icon-edit"></i></a>
                                    <a class="btn btn-small btn-danger show-tooltip" href="http://desenvolvimento.criativin.com.br/buscafarma/admin/farmacias?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id_farmacia'];?>
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

<?php echo '<script'; ?>
 type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"><?php echo '</script'; ?>
>
<?php }
}
?>