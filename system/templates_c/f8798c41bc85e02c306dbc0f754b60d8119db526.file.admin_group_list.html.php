<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:22:51
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/admin_group_list.html" */ ?>
<?php /*%%SmartyHeaderCode:91035929456b022de2-78410006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8798c41bc85e02c306dbc0f754b60d8119db526' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/admin_group_list.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91035929456b022de2-78410006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">管理组管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=admin&f=admin_group">管理组</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=admin&f=admin_group_add">添加组</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="5%" class="tc">ID号</th>
    <th>管理员组名称</th>
    <th width="10%">操作</th>
  </tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"admin_group")); $_block_repeat=true; smarty_block_loop(array('module'=>"admin_group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr <?php if ($_smarty_tpl->getVariable('r')->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['name'];?>
</td>
    <td><a href="index.php?m=xdcms&c=admin&f=admin_group_edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
">编辑</a> | <a href="###" onclick="confirm('真的要删除此管理组吗?','index.php?m=xdcms&c=admin&f=admin_group_delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
')">删除</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"admin_group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<div class="xdcms_bottom"></div>
</body>
</html>
