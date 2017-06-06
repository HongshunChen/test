<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:23:01
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/admin_group_add.html" */ ?>
<?php /*%%SmartyHeaderCode:1283759294575126769-66752110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fa179f10f6e9089523a1bd7b8c8792d03c706d4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/admin_group_add.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1283759294575126769-66752110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">管理组管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=admin&f=admin_group_add_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=admin&f=admin_group">管理组</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=admin&f=admin_group_add">添加组</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="23%" align="right">组名：</td>
    <td width="77%" colspan="3"><input type="text" name="name" class="txt" size="30"></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="submit" value="确认添加" class="submit" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
