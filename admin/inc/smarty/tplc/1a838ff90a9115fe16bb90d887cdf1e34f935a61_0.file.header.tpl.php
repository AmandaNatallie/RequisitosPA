<?php /* Smarty version 3.1.27, created on 2015-12-04 16:52:59
         compiled from "C:\wamp\www\admin\view\tpl\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:258525661b6db6a1549_49467495%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a838ff90a9115fe16bb90d887cdf1e34f935a61' => 
    array (
      0 => 'C:\\wamp\\www\\admin\\view\\tpl\\header.tpl',
      1 => 1449242525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258525661b6db6a1549_49467495',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5661b6db6b8c76_15212841',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5661b6db6b8c76_15212841')) {
function content_5661b6db6b8c76_15212841 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258525661b6db6a1549_49467495';
?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <base href="http://localhost/admin/view/">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />		
	<link rel="stylesheet" type="text/css" href="assets/dropzone/downloads/css/dropzone.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">
        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body>

        <!--[if lt IE 7]>

            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>

        <![endif]-->





        <!-- BEGIN Navbar -->

        <div id="navbar" class="navbar">

            <div class="navbar-inner">

                <div class="container-fluid">

                    <!-- BEGIN Brand -->

                    <a href="#" class="brand">

                        <small>

                            <i class="icon-desktop"></i>

                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>


                        </small> 

                    </a>

                    <!-- END Brand -->



                    <!-- BEGIN Responsive Sidebar Collapse -->

                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

                        <i class="icon-reorder"></i>

                    </a>

                    <!-- END Responsive Sidebar Collapse -->



                    <!-- BEGIN Navbar Buttons -->

                    <ul class="nav flaty-nav pull-right">

                                                  



                        <!-- BEGIN Button User -->

                        <li class="user-profile">

                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">

                                <img class="nav-user-photo" src="img/logo.png" />

                                <span class="hidden-phone" id="user_info">

                                   Administrador

                                </span>

                                <i class="icon-caret-down"></i>

                            </a>



                            <!-- BEGIN User Dropdown -->

                            <ul class="dropdown-menu dropdown-navbar" id="user_menu">

                                <li class="nav-header">

                                    <i class="icon-time"></i>

                                    Online

                                </li>



                                <li>

                                    <a href="usuario.php">

                                        <i class="icon-user"></i>

                                        Editar Perfil

                                    </a>

                                </li>





                                <li class="divider visible-phone"></li>



                                

                                <li class="divider"></li>



                                <li>

                                    <a href="http://desenvolvimento.criativin.com.br/buscafarma/admin/logout">

                                        <i class="icon-off"></i>

                                        Sair

                                    </a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <?php }
}
?>