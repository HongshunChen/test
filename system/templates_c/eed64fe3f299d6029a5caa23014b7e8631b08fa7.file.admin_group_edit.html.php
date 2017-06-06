<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:22:55
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/admin_group_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:261405929456f799600-69187925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eed64fe3f299d6029a5caa23014b7e8631b08fa7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/admin_group_edit.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261405929456f799600-69187925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">管理组管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=admin&f=admin_group_edit_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=admin&f=admin_group">管理组</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=admin&f=admin_group_add">添加组</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="23%" align="right">组名：</td>
    <td width="77%" colspan="3"><input type="text" name="name" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['name'];?>
"></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="submit" value="确认修改" class="submit" /><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['groupid'];?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
