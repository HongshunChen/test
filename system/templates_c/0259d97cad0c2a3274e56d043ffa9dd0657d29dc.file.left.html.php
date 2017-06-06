<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 09:37:17
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/xdcms/left.html" */ ?>
<?php /*%%SmartyHeaderCode:213185924e3cd6edf36-42048249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0259d97cad0c2a3274e56d043ffa9dd0657d29dc' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/xdcms/left.html',
      1 => 1481072921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213185924e3cd6edf36-42048249',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- 二级导航 -->
<div id="body3_l">
    <div class="body3_l1"><?php echo $_smarty_tpl->getVariable('left_title')->value;?>
</div>
    <div class="body3_l2">
        <ul>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('left_menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
            <li><div class="body3_l2_t">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['catname'];?>
</a></div></li>
        <?php }} ?>
        </ul> 
    </div>
</div>
<!-- 二级导航 END  -->