<?php /* Smarty version 3.1.27, created on 2015-10-21 02:19:07
         compiled from "C:\wamp\www\BuscaFarma\site\templates\admin\view\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:174725626d9fb071308_21537121%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e14edc53ad0ec26b8a07deb806903bd6dda6e6e' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\site\\templates\\admin\\view\\menu.tpl',
      1 => 1445386744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174725626d9fb071308_21537121',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626d9fb0b1127_37023700',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626d9fb0b1127_37023700')) {
function content_5626d9fb0b1127_37023700 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '174725626d9fb071308_21537121';
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