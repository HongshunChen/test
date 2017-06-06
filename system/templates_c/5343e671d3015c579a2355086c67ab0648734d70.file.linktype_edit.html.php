<?php /* Smarty version Smarty-3.0.8, created on 2017-06-03 17:14:24
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/link/linktype_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1300059327df0c80638-10259444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5343e671d3015c579a2355086c67ab0648734d70' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/link/linktype_edit.html',
      1 => 1496472040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1300059327df0c80638-10259444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">友情链接类型管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=link&c=linktype&f=editsave" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=linktype&c=admin">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=link&c=linktype&f=add">添加链接类型</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td align="right">名称：</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="确认保存" class="submit" /><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
