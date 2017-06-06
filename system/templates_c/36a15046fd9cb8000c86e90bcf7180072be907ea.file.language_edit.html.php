<?php /* Smarty version Smarty-3.0.8, created on 2017-05-26 13:23:03
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/language_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:48915927bbb7acfd14-13575415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a15046fd9cb8000c86e90bcf7180072be907ea' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/language_edit.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48915927bbb7acfd14-13575415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">版本管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=language&f=editsave" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=language">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=language&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="24%" align="right">版本名称：</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
">
      × 非开发人员勿改</td>
  </tr>
  <tr>
    <td width="24%" align="right">公司名称：</td>
    <td colspan="3"><input type="text" name="sitename" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['sitename'];?>
"></td>
  </tr>
  <tr>
    <td align="right">目录：</td>
    <td colspan="3"><input type="text" name="dir" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['dir'];?>
">
      × 非开发人员勿改</td>
  </tr>
  <tr>
    <td align="right">SEO标题：</td>
    <td colspan="3"><input type="text" name="seo_title" class="txt" size="50" value="<?php echo $_smarty_tpl->getVariable('rs')->value['seo_title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">SEO关键词：</td>
    <td colspan="3"><textarea name="seo_key" cols="60" rows="4"><?php echo $_smarty_tpl->getVariable('rs')->value['seo_key'];?>
</textarea></td>
  </tr>
  <tr>
    <td align="right">SEO描述：</td>
    <td colspan="3"><textarea name="seo_des" cols="60" rows="4"><?php echo $_smarty_tpl->getVariable('rs')->value['seo_des'];?>
</textarea></td>
  </tr>
  <tr>
    <td align="right">版权信息：</td>
    <td colspan="3"><textarea name="copyright" cols="60" rows="5"><?php echo $_smarty_tpl->getVariable('rs')->value['copyright'];?>
</textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="submit" value="确认保存" class="submit" /><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
