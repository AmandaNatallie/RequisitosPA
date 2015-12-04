<?php /* Smarty version 3.1.27, created on 2015-11-07 18:07:42
         compiled from "view\tpl\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23925563e2fde71a595_35979034%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501edcb10ad871ca91a60828d539ef99a4547115' => 
    array (
      0 => 'view\\tpl\\login.tpl',
      1 => 1446906885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23925563e2fde71a595_35979034',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563e2fde7a2487_38757338',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563e2fde7a2487_38757338')) {
function content_563e2fde7a2487_38757338 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23925563e2fde71a595_35979034';
?>
​<!DOCTYPE html>
<html class="no-js">
    <head>
        <base href='http://desenvolvimento.criativin.com.br/buscafarma/templates/admin/view/'>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Criativin Gestion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/favicon.png">

        <?php echo '<script'; ?>
 src="assets/modernizr/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
    </head>
    <body class="login-page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form-login" method="post"  enctype="multipart/form-data">
                <h3>Entrar no Sistema</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" placeholder="Usuário" class="input-block-level" name="usuario" id="usuario" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="password" placeholder="Senha" class="input-block-level" name="senha" id="senha" />
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary input-block-level">Entrar</button>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->

           
    </body>
</html>​<?php }
}
?>