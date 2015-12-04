<?php /* Smarty version 3.1.27, created on 2015-12-04 16:52:59
         compiled from "C:\wamp\www\admin\view\tpl\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:305975661b6db6cccd1_36634117%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129f84e4901618e91441c3924b111b20fbb5d062' => 
    array (
      0 => 'C:\\wamp\\www\\admin\\view\\tpl\\menu.tpl',
      1 => 1449240183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305975661b6db6cccd1_36634117',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661b6db6d4d77_44421560',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661b6db6d4d77_44421560')) {
function content_5661b6db6d4d77_44421560 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '305975661b6db6cccd1_36634117';
?>
        <div class="container-fluid" id="main-container">

            <div id="sidebar" class="nav-collapse">

                <ul class="nav nav-list">

                    <li>

                       <a href="index.php" class="dropdown-toggle">

                            <i class="icon-desktop"></i>

                            <span>Home</span>

                        </a>

                        </li>

         

                   

                   

                    

                    <li>

                        <a href="#" class="dropdown-toggle">

                            <i class="icon-group"></i>

                            <span>Usuários</span>

                            <b class="arrow icon-angle-right"></b>

                        </a>

                        <ul class="submenu">

                        	<li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/usuarios">Gerenciar Usuários</a></li>

                        </ul>

                    </li>

                

                <div id="sidebar-collapse" class="visible-desktop">

                    <i class="icon-double-angle-left"></i>

                </div>

            </div>

            <div id="main-content">

                <div class="page-title">

                    <div>

                        <h1><i class="icon-desktop"></i> <img src="img/logo.png" width="200"  /></h1>

                        <h4>Seu Painel Administrativo</h4>

                    </div>

                </div>

                <div id="breadcrumbs">

                    <ul class="breadcrumb">

                        <li class="active"><i class="icon-home"></i> BuscaFarma Gestion</li>

                    </ul>

                </div>

<?php }
}
?>