<?php /* Smarty version 3.1.27, created on 2015-11-07 18:07:58
         compiled from "C:\wamp\www\BuscaFarma\templates\admin\view\tpl\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13470563e2fee7acf12_26847071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d034fed584caacee74b61edd2dc1a9408d235c3' => 
    array (
      0 => 'C:\\wamp\\www\\BuscaFarma\\templates\\admin\\view\\tpl\\menu.tpl',
      1 => 1446912258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13470563e2fee7acf12_26847071',
  'variables' => 
  array (
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563e2fee7dcfb9_76050279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563e2fee7dcfb9_76050279')) {
function content_563e2fee7dcfb9_76050279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13470563e2fee7acf12_26847071';
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
                   <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 1) {?> 
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
                            <span>Farm�cias</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	 <li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/farmacias">Gerenciar Farm�cias</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-group"></i>
                            <span>Usu�rios</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/usuarios">Gerenciar Usu�rios</a></li>
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
                   <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-barcode"></i>
                            <span>Upload Din�mico</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/upload/">Enviar Dados</a></li>
                        </ul>
                    </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['tipo']->value == 2) {?> 
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-beaker"></i>
                            <span>Farm�cias</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	 <li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/farmacias">Gerenciar Farm�cias</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-barcode"></i>
                            <span>Produtos</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/produtos">Gerenciar Produtos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-barcode"></i>
                            <span>Upload Din�mico</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                        <ul class="submenu">
                        	<li><a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/upload/">Enviar Dados</a></li>
                        </ul>
                    </li>
                    <?php }?>
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