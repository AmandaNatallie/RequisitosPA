<?php /* Smarty version 3.1.27, created on 2015-10-22 02:01:39
         compiled from "view\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:482156282763584853_14505357%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1445386886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482156282763584853_14505357',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56282763609115_10582585',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56282763609115_10582585')) {
function content_56282763609115_10582585 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '482156282763584853_14505357';
echo $_smarty_tpl->getSubTemplate ("../view/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../view/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                <div class="row-fluid">
                    <div class="span12">
                        <div class="box">
                            <div class="row-fluid tiles-group">
                            <div class="span12 tile-active">
                                <div class="tile tile-light-blue" data-stop="4000">
                                    <div class="img img-center">
                                        <i class="icon-cogs"></i>
                                    </div>
                                    <p class="title text-center">Bem Vindo ao <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
                                </div>

                                <div class="tile tile-light-blue" data-stop="7000">
                                    <p class="title">Olá (nome do usuario).</p>
                                    <p>Este painel foi desenvolvido com as linguagens mais atuais do mercado e com um layout que se adapta em diversas resoluÃ§Ãµes de tablet's, notebooks e computadores. <br />
                                    Com ele terá total autonomia para editar todos os conteúdos do seu site de forma simples, rápida e fácil.
                                    <br />
                                    Estamos sempre trabalhando para melhorar este sistema e esperamos que aprecie.</p>
                                    
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                </div>


                <!-- END Main Content -->
                

<?php echo $_smarty_tpl->getSubTemplate ("../view/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



          <?php }
}
?>