<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 13:03:46
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/module_list.html" */ ?>
<?php /*%%SmartyHeaderCode:10667592514326f43f6-10245305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64def4703734f9b4a910e31cd5a071da4d64ebe9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/module_list.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10667592514326f43f6-10245305',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">模块管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=module">管理首页</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="5%" class="tc">编号</th>
    <th width="20%">模块名称</th>
    <th width="8%">模块目录</th>
    <th width="8%">开发者</th>
    <th width="8%">发布日期</th>
    <th width="6%">操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('config')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
<tr class="bf"> 
    <td class="tc"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['folder'];?>
</td>
    <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['author'];?>
</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['install'];?>
</td>
</tr>
<?php }} ?>
</table>
<div class="xdcms_bottom"></div>
</body>
</html>
