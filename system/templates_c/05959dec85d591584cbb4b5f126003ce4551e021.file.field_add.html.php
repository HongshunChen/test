<?php /* Smarty version Smarty-3.0.8, created on 2017-06-05 11:23:35
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/field_add.html" */ ?>
<?php /*%%SmartyHeaderCode:136065934ceb7d91381-09528053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05959dec85d591584cbb4b5f126003ce4551e021' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/field_add.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136065934ceb7d91381-09528053',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">字段管理</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=model&f=field_add_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=model&f=field&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=model&f=field_add&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">添加字段</a></div><span>|</span><div class="title_nav_3"><a href="index.php?m=xdcms&c=model&f=update_field_cache&modelid=<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
">更新缓存</a></div></th>
  </tr>
  <tr>
    <td align="right">文字名称:</td>
    <td colspan="3"><input type="text" name="name" class="txt" size="30" id="name"></td>
  </tr>
  <tr>
    <td align="right">字段名称:</td>
    <td colspan="3"><input type="text" name="field" class="txt" size="30" id="field"></td>
  </tr>
  <tr>
    <td align="right">字段类型:</td>
    <td colspan="3"><select name="formtype" id="formtype" class="formtype" onChange="fieldtype(this.value)">
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
    <?php }} ?>
      </select> <div id="text_show" style="display:none;">宽：<input type="text" name="width" class="txt" size="4" id="width"></div><div id="textarea_show" style="display:none;"> 高：<input type="text" name="height" class="txt" size="4" id="height"></div></td>
  </tr>
  
  <tr>
    <td align="right">排序:</td>
    <td colspan="3"><input type="text" name="sort" class="txt" size="10" id="sort" value="0"></td>
  </tr>
  <tr>
    <td align="right">字段说明:</td>
    <td colspan="3"><input type="text" name="explain" class="txt" size="30" id="explain"></td>
  </tr>
  <tr>
    <td align="right">是否固定:</td>
    <td colspan="3">
      <input name="is_fixed" type="radio" id="is_fixed" value="1" />
      是 
      <input name="is_fixed" type="radio" id="is_fixed" value="0" checked="checked" />
      否</td>
  </tr>
  <tr>
    <td align="right">默认值:</td>
    <td colspan="3"><font color="#ff0000">当选择为选项时,此即选项列表内容,列表值之间用英文逗号(,)分隔</font><br><textarea name="initial" id="initial" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="hidden" name="modelid" id="modelid" value="<?php echo $_smarty_tpl->getVariable('modelid')->value;?>
" /><input type="submit" name="submit" value="确认添加" class="submit" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
