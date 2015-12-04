<?php /* Smarty version 3.1.27, created on 2015-10-21 01:51:47
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76115626d393f3d7f5_41814524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1449abc014168f30091294f2dd3cbb4b891dcd75' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\footer.tpl',
      1 => 1445384299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76115626d393f3d7f5_41814524',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626d39400bbe0_27069008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626d39400bbe0_27069008')) {
function content_5626d39400bbe0_27069008 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76115626d393f3d7f5_41814524';
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