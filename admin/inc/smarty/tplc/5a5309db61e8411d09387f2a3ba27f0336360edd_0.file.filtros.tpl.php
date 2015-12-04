<?php /* Smarty version 3.1.27, created on 2015-11-05 00:58:38
         compiled from "view\tpl\filtros.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6767563a9bae8f0321_09844712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a5309db61e8411d09387f2a3ba27f0336360edd' => 
    array (
      0 => 'view\\tpl\\filtros.tpl',
      1 => 1446679405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6767563a9bae8f0321_09844712',
  'variables' => 
  array (
    'est' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563a9bae980471_66769262',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563a9bae980471_66769262')) {
function content_563a9bae980471_66769262 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6767563a9bae8f0321_09844712';
?>
           
<div class="control-group">
    <label for="select" class="control-label">Cidade:</label>
    <div class="controls">
        <select class="input-xlarge" name="cidade" id="cidade" data-rule-required="true">

            <option>-- Selecione uma Cidade --</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['est']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$foreach_r_Sav = $_smarty_tpl->tpl_vars['r'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cidade'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['cidade'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['r'] = $foreach_r_Sav;
}
?>
        </select>
    </div>
</div> 
               
					  
					 
						  
						 <?php }
}
?>