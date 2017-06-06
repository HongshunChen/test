<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 09:53:39
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/template_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:95635924e7a33f5258-40468971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e7953d8c3d4d3ec67193f9724d0ae4c75f6f11' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/template_edit.html',
      1 => 1481072920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95635924e7a33f5258-40468971',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">模板管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=template&f=edit_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=template">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=template&f=calls">调用说明</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="19%" align="right">模板地址：</td>
    <td width="81%" colspan="3"><?php echo $_smarty_tpl->getVariable('filename')->value;?>
</td>
  </tr>
  
  <tr>
    <td align="right">源代码:</td>
    <td colspan="3"><textarea name="content" id="content" cols="85" rows="35"><?php echo $_smarty_tpl->getVariable('content')->value;?>
</textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="submit" value="确认保存" class="submit" /><input name="file" type="hidden" id="file" value="<?php echo $_smarty_tpl->getVariable('filename')->value;?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
