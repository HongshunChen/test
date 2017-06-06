<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 15:41:46
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/pinglun/pinglun_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:260165925393a332fa8-94750600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c57b364ebeb8e8c1cb8359a4bd52d565ea2e876' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/pinglun/pinglun_edit.html',
      1 => 1495611220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260165925393a332fa8-94750600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">评论管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=pinglun&c=admin&f=editsave" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=pinglun&c=admin">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td align="right">昵称：</td>
    <td colspan="3"><input name="name" type="text" class="txt" id="name" value="<?php echo $_smarty_tpl->getVariable('rs')->value['name'];?>
" size="10"></td>
  </tr>
  <tr>
    <td align="right">标题：</td>
    <td colspan="3"><?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
</td>
  </tr>
  <tr>
    <td align="right">评论内容：</td>
    <td ><textarea name="content" cols="50" rows="5" id="content" style="margin:10px 0px 10px 0px; padding:5px;"><?php echo $_smarty_tpl->getVariable('rs')->value['content'];?>
</textarea></td>
  </tr>
  <tr>
    <td align="right">评论时间：</td>
    <td colspan="3"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('rs')->value['inputtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="确认修改" class="submit" /><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
