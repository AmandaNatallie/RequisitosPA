<?php /* Smarty version 3.1.27, created on 2015-11-09 21:49:10
         compiled from "view\tpl\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29238564106c62b69a8_55351581%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '554f8f6fa6a29bef3c4eb00a301e4611be58f2b0' => 
    array (
      0 => 'view\\tpl\\index.tpl',
      1 => 1446911460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29238564106c62b69a8_55351581',
  'variables' => 
  array (
    'title' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564106c635a067_17697032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564106c635a067_17697032')) {
function content_564106c635a067_17697032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29238564106c62b69a8_55351581';
echo $_smarty_tpl->getSubTemplate ("view/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
                                    <p class="title">Olá <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
.</p>
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
                

<?php echo $_smarty_tpl->getSubTemplate ("view/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



          <?php }
}
?>