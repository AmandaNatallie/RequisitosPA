<?php /* Smarty version 3.1.27, created on 2015-10-22 02:45:48
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\tpl\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20663562831bc55aa40_23212851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c82478f4f9040e28e84bc3246565d421fde14687' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\tpl\\menu.tpl',
      1 => 1445386744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20663562831bc55aa40_23212851',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562831bc566489_77907655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562831bc566489_77907655')) {
function content_562831bc566489_77907655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20663562831bc55aa40_23212851';
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
                            <i class="icon-coffee"></i>
                            <span>Clientes</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="clientes.php">Gerenciar Clientes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-beaker"></i>
                            <span>Farmácias</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="farmacias.php">Gerenciar Farmácias</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span>Usuários</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="usuarios.php">Gerenciar Usuários</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-barcode"></i>
                            <span>Produtos</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="produtos.php">Gerenciar Produtos</a></li>
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