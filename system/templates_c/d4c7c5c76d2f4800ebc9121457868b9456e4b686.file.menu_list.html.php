<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:18:38
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/menu_list.html" */ ?>
<?php /*%%SmartyHeaderCode:70965929446e4c9af4-36152028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4c7c5c76d2f4800ebc9121457868b9456e4b686' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/menu_list.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70965929446e4c9af4-36152028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">菜单管理</h1>
<div class="line"></div>
<form name="form"  id="form" action="index.php?m=xdcms&c=menu&f=sort_save" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=menu">管理菜单</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=menu&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="8%" class="tc">ID</th>
    <th width="10%">排序</th>
    <th>菜单名称</th>
    <th width="34%" class="tc">操作</th>
  </tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."menu where parentid=0")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."menu where parentid=0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr <?php if ($_smarty_tpl->getVariable('r')->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
<input type="hidden" name="menuid[]" id="menuid[]" value="<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
" /></td>
    <td><input type="text" name="sort<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
" class="txt" size="4" id="sort<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
" value="<?php echo $_smarty_tpl->getVariable('r')->value['sort'];?>
"></td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td class="tc"><?php if ($_smarty_tpl->getVariable('r')->value['menuid']==3){?>添加子菜单<?php }else{ ?><a href="index.php?m=xdcms&c=menu&f=add&p=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
">添加子菜单</a><?php }?> | <a href="index.php?m=xdcms&c=menu&f=lists&id=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
">查看子菜单</a> | <a href="index.php?m=xdcms&c=menu&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
">编辑</a> | <?php if ($_smarty_tpl->getVariable('r')->value['menuid']==3){?>删除<?php }else{ ?><a href="#" onclick="confirm('真的要删除此菜单吗?','index.php?m=xdcms&c=menu&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['menuid'];?>
')">删除</a><?php }?></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."menu where parentid=0"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<tr class="bf">
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;      <input type="submit" name="button" id="button" value="排序" class="button" /></td>
</tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
