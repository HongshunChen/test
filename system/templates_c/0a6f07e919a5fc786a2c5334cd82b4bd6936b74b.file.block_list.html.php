<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 16:35:51
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/block_list.html" */ ?>
<?php /*%%SmartyHeaderCode:23770592545e7d253b1-59891780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6f07e919a5fc786a2c5334cd82b4bd6936b74b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/block_list.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23770592545e7d253b1-59891780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">碎片管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=block">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=block&f=add">添加碎片</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="5%" class="tc">编号</th>
    <th width="25%">名称</th>
    <th width="26%">标签</th>
    <th width="32%">数据调用</th>
    <th width="12%">操作</th>
  </tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"block",'pages'=>"page")); $_block_repeat=true; smarty_block_loop(array('module'=>"block",'pages'=>"page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr <?php if ($_smarty_tpl->getVariable('r')->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['tag'];?>
</td>
    <td><input name="textfield" type="text" id="textfield" value="{get_block tag='<?php echo $_smarty_tpl->getVariable('r')->value['tag'];?>
'}" size="25" /></td>
    <td><a href="index.php?m=xdcms&c=block&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">编辑</a> | <a href="###" onclick="confirm('真的要删除此碎片吗?','index.php?m=xdcms&c=block&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
')">删除</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"block",'pages'=>"page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

 <tr class="bf">
    <td colspan="6" class="tc"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td>
 </tr>
</table>
<div class="xdcms_bottom"></div>
</body>
</html>
