<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 09:52:44
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/category_list.html" */ ?>
<?php /*%%SmartyHeaderCode:149335924e76c67ca73-61059552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0ac366dabfcb31f94acca545e74b232dbf1238' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/category_list.html',
      1 => 1481072925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149335924e76c67ca73-61059552',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">栏目管理</h1>
<div class="line"></div>
<form id="form1" name="form1" method="post" action="index.php?m=xdcms&c=category&f=sort_save">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=category">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=category&f=add">添加栏目</a></div><span>|</span><div class="title_nav_3"><a href="index.php?m=xdcms&c=category&f=cache">更新缓存</a></div></th>
  </tr>
  <tr>
    <th width="11%" class="tc">编号</th>
    <th width="11%">排序</th>
    <th>栏目名称</th>
    <th width="13%">绑定模型</th>
    <th width="9%">数据量</th>
    <th width="30%">操作</th>
  </tr>
<?php echo $_smarty_tpl->getVariable('categorylist')->value;?>

<tr class="bf">
    <td width="11%">&nbsp;</td>
    <td colspan=5><input type="submit" name="button" id="button" value="排序" class="button" /></td>
</tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
