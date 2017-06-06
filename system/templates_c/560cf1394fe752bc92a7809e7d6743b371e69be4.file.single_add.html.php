<?php /* Smarty version Smarty-3.0.8, created on 2017-06-06 17:16:14
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/single_add.html" */ ?>
<?php /*%%SmartyHeaderCode:26465593672de2e3a38-53626855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560cf1394fe752bc92a7809e7d6743b371e69be4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/single_add.html',
      1 => 1481072920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26465593672de2e3a38-53626855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<script charset="utf-8" src="admin/editor/kindeditor.js"></script>
<script charset="utf-8" src="admin/editor/lang/zh_CN.js"></script>
<script charset="utf-8" src="admin/editor/plugins/code/prettify.js"></script>
<h1 class="xdcms_search_title"><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=content&f=add_save" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="2" class="title"><div class="title_nav_1"><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="15%" align="right">栏目名称：</td>
    <td><?php echo $_smarty_tpl->getVariable('catname')->value;?>
</td>
  </tr>
  <tr>
    <td align="right">标题：</td>
    <td><input type="text" name="title" class="txt" size="45" id="title"></td>
  </tr>
  <tr>
    <td align="right">缩略图：</td>
    <td><input type="text" name="thumb" id="thumb" class="txt" size="25"> <a href="#" onclick="javascript:ShowIframe(400,115,'上传缩略图！','system/function/upload.inc.php?filename=thumb')">上 传</a></td>
  </tr>
  <?php echo $_smarty_tpl->getVariable('fields')->value;?>

  <tr>
    <td align="right">发布时间：</td>
    <td><input type="text" name="updatetime" class="txt" size="20" id="updatetime" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="hidden" name="catid" id="catid" value="<?php echo $_smarty_tpl->getVariable('catid')->value;?>
" /><input type="submit" name="submit" value="确认保存" class="submit" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
