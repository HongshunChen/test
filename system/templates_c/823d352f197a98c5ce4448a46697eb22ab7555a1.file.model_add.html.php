<?php /* Smarty version Smarty-3.0.8, created on 2017-06-05 11:22:05
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/model_add.html" */ ?>
<?php /*%%SmartyHeaderCode:114065934ce5dd14d82-27348220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823d352f197a98c5ce4448a46697eb22ab7555a1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/model_add.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114065934ce5dd14d82-27348220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">模型管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=model&f=model_add_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=model">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=model&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td align="right">模型名称：</td>
    <td colspan="3"><input type="text" name="modelname" class="txt" size="30" id="modelname"></td>
  </tr>
  <tr>
    <td align="right">模型数据表：</td>
    <td colspan="3"><input type="text" name="modeltable" class="txt" size="30" id="modeltable"></td>
  </tr>
  <tr>
    <td align="right">是否开启：</td>
    <td colspan="3">
      <input name="is_lock" type="radio" id="is_lock" value="1" checked="checked" />
      是 
      <input type="radio" name="is_lock" id="is_lock" value="0" />
      否</td>
  </tr>
  <tr>
    <td align="right">是否固定：</td>
    <td colspan="3">
      <input name="is_fixed" type="radio" id="is_fixed" value="1" />
      是 
      <input name="is_fixed" type="radio" id="is_fixed" value="0" checked="checked" />
      否</td>
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
