<?php /* Smarty version Smarty-3.0.8, created on 2017-05-31 10:08:53
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/menu_son_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1620592e25b5c6d9b9-23739260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b7221932da4fc69b9235869fbcb5c0dfd72e802' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/menu_son_list.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1620592e25b5c6d9b9-23739260',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">菜单管理</h1>
<div class="line"></div>
<form name="form"  id="form" action="index.php?m=xdcms&c=menu&f=sort_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=menu">管理菜单</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=menu&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="8%" class="tc">ID</th>
    <th width="10%">排序</th>
    <th>菜单名称</th>
    <th width="34%" class="tc">操作</th>
  </tr>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
?>
<tr <?php if ($_smarty_tpl->tpl_vars['r']->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
<input type="hidden" name="menuid[]" id="menuid[]" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
" /></td>
    <td><input type="text" name="sort<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
" class="txt" size="4" id="sort<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['sort'];?>
"></td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</td>
    <td class="tc"><a href="index.php?m=xdcms&c=menu&f=add&p=<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
">添加子菜单</a> | <a href="index.php?m=xdcms&c=menu&f=edit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
">编辑</a> | <?php if ($_smarty_tpl->tpl_vars['r']->value['menuid']==3){?>删除<?php }else{ ?><a href="#" onclick="confirm('真的要删除此菜单吗?','index.php?m=xdcms&c=menu&f=delete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['menuid'];?>
')">删除</a><?php }?></td>
</tr>
<?php }} ?>
<tr class="bf">
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;      <input type="submit" name="button" id="button" value="排序" class="button" /></td>
</tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
