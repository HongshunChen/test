<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:18:45
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/menu_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:347359294475a00c34-50731189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '828b29e40acc1fced0e759832efbefadf9ff37b9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/menu_edit.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347359294475a00c34-50731189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">编辑菜单</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=menu&f=edit_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=menu">管理菜单</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=menu&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td align="right">上级菜单:</td>
    <td>
      <select name="parentid" id="parentid">
        <option value="0">无(作为一级菜单)</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['menuid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['menuid']==$_smarty_tpl->getVariable('rs')->value['parentid']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
        <?php }} ?>
      </select></td>
  </tr>
  <tr>
    <td align="right">菜单名称:</td>
    <td><input type="text" name="title" class="txt" size="20" id="title" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>
  <tr>
    <td align="right">排序:</td>
    <td><input type="text" name="sort" class="txt" size="4" id="sort" value="<?php echo $_smarty_tpl->getVariable('rs')->value['sort'];?>
"></td>
  </tr>
  <tr>
    <td align="right">是否显示:</td>
    <td>
      <select name="is_show" id="is_show">
        <option value="1" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==1){?>selected="selected"<?php }?>>是</option>
        <option value="0" <?php if ($_smarty_tpl->getVariable('rs')->value['is_show']==0){?>selected="selected"<?php }?>>否</option>
      </select></td>
  </tr>
  <tr>
    <td align="right">管理权限:</td>
    <td>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"admin_group")); $_block_repeat=true; smarty_block_loop(array('module'=>"admin_group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      <input name="groupid[]" type="checkbox" class="checkbox" id="groupid[]" value="<?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
" <?php if (strstr($_smarty_tpl->getVariable('rs')->value['groupid'],$_smarty_tpl->getVariable('r')->value['groupid'])!=''){?>checked="checked"<?php }?> />  <?php echo $_smarty_tpl->getVariable('r')->value['name'];?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"admin_group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span>(注：如果都不选，则默认都具有管理权限)</span>
    </td>
  </tr>
  <tr>
    <td align="right">链接地址:</td>
    <td><input type="text" name="url" class="txt" size="40" id="url" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="确认修改" class="submit" /><input name="menuid" type="hidden" value="<?php echo $_smarty_tpl->getVariable('rs')->value['menuid'];?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
