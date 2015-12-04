<?php

define('SMARTY_RESOURCE_CHAR_SET', 'ISO-8859-1');
define('SMARTY_DIR', 'inc/smarty/libs/');
// 2 - inclu?ndo a classe do Smarty
include(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();
$smarty->cache_dir      = "inc/smarty/cache";
$smarty->config_dir     = "inc/smarty/config";
$smarty->template_dir   = "view/tpl/";
$smarty->compile_dir    = "inc/smarty/tplc";
$smarty->left_delimiter = '<!--{';
$smarty->right_delimiter ='}-->';
$smarty->force_compile = 1;
        