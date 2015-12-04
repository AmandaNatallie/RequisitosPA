<?php /* Smarty version 3.1.27, created on 2015-11-03 22:44:54
         compiled from "view\tpl\upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2949856392ad67e8254_99798930%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e4f18d5e1e3865c2385287e225e5305e9f8a6d' => 
    array (
      0 => 'view\\tpl\\upload.tpl',
      1 => 1446587053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2949856392ad67e8254_99798930',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56392ad6877f63_18119758',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56392ad6877f63_18119758')) {
function content_56392ad6877f63_18119758 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2949856392ad67e8254_99798930';
echo $_smarty_tpl->getSubTemplate ("view/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- BEGIN Main Content -->
<div class="row-fluid">
<?php echo '<script'; ?>
 src="../model/funcoes.js" type="text/javascript"><?php echo '</script'; ?>
>
    <div class="span12">
        <div class="box">
            <div class="box-title">
                <h3><i class="icon-reorder"></i> Cadastro de Arquivo</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
<form action="../Upload.php" id="formulario" name="formulario" method="post"class="form-horizontal" id="validation-form"  enctype="multipart/form-data">
   <input type="hidden" id="action" name="action" />
    <input type="file" name="file" id="file">               
    <div class="form-actions">
        <input type="submit" class="btn btn-primary" name="bt_save_df" onclick="javascript:doPost('formulario', 'Arquivar');" value="Salvar">
                        <a href="http://desenvolvimento.criativin.com.br/buscafarma/templates/admin/"><button type="button" class="btn">Cancelar</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Main Content -->

<div class="retorno"></div>

<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>