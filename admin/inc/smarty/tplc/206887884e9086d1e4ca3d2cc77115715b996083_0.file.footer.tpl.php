<?php /* Smarty version 3.1.27, created on 2015-11-09 21:49:10
         compiled from "C:\wamp\www\BuscaFarma_local\templates\admin\view\tpl\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4109564106c641ae61_44021912%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206887884e9086d1e4ca3d2cc77115715b996083' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma_local\\templates\\admin\\view\\tpl\\footer.tpl',
      1 => 1446916973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4109564106c641ae61_44021912',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564106c6426407_04607811',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564106c6426407_04607811')) {
function content_564106c6426407_04607811 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4109564106c641ae61_44021912';
?>

                <footer>
                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
© <a href="#" target="_blank">BuscaFarma</a></p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>

            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="assets/jquery/jquery-1.10.1.min.js"><\/script>')<?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="assets/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/nicescroll/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>

        <!--page specific plugin scripts-->
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"><?php echo '</script'; ?>
>
        <!--flaty scripts-->
        <?php echo '<script'; ?>
 src="js/flaty.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 type="text/javascript" src="assets/dropzone/downloads/dropzone.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
>
      
       
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"><?php echo '</script'; ?>
>
        
        
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/data-tables/jquery.dataTables.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/data-tables/DT_bootstrap.js"><?php echo '</script'; ?>
>
        
        
      

    </body>
</html><?php }
}
?>