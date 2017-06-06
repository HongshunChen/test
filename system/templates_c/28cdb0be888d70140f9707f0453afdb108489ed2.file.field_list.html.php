<?php /* Smarty version Smarty-3.0.8, created on 2017-06-05 11:23:06
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/field_list.html" */ ?>
<?php /*%%SmartyHeaderCode:56345934ce9a1b9804-94056504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28cdb0be888d70140f9707f0453afdb108489ed2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/field_list.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56345934ce9a1b9804-94056504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">字段管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=model&f=field&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=model&f=field_add&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">添加字段</a></div><span>|</span><div class="title_nav_3"><a href="index.php?m=xdcms&c=model&f=update_field_cache&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">更新缓存</a></div></th>
  </tr>
  <tr>
    <td width="5%" class="tc">排序</td>
    <td width="20%">文字</td>
    <td width="10%">字段名称</td>
    <td width="10%">类型</td>
    <td width="10%">操作</td>
  </tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<tr class="bf"> 
    <td class="tc"><?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['formtype'];?>
</td>
    <td><a href="index.php?m=xdcms&c=model&f=field_edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fieldid'];?>
&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">编辑</a> | <?php if ($_smarty_tpl->tpl_vars['value']->value['is_fixed']==0){?><a href="###" onclick="confirm('真的要删除此字段吗?','index.php?m=xdcms&c=model&f=field_delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fieldid'];?>
&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
')">删除</a><?php }else{ ?><font color='#FF0000'>删除</font><?php }?></td>
</tr>
<?php }} ?>
</table>
<div class="xdcms_bottom"></div>
</body>
</html>
