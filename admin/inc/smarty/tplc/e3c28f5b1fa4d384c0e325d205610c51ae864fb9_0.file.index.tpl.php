<?php /* Smarty version 3.1.27, created on 2015-10-21 01:48:33
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\tpl\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:259335626d2d1d0da60_97437866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3c28f5b1fa4d384c0e325d205610c51ae864fb9' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\tpl\\index.tpl',
      1 => 1445384912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259335626d2d1d0da60_97437866',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626d2d1d641d1_41149700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626d2d1d641d1_41149700')) {
function content_5626d2d1d641d1_41149700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '259335626d2d1d0da60_97437866';
?>
{include file="../tpl/header.php"}
{include file="../view/tpl/menu.tpl"}

<!-- BEGIN Main Content -->
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



                <!-- END Main Content -->
                

{include file="../view/footer.tpl"}


          <?php }
}
?>