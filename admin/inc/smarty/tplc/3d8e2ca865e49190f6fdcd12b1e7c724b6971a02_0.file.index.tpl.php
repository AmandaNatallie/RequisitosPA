<?php /* Smarty version 3.1.27, created on 2015-10-21 02:22:07
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:251865626daafbb70f3_58207836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8e2ca865e49190f6fdcd12b1e7c724b6971a02' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\index.tpl',
      1 => 1445386886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251865626daafbb70f3_58207836',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626daafc67318_95354668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626daafc67318_95354668')) {
function content_5626daafc67318_95354668 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '251865626daafbb70f3_58207836';
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