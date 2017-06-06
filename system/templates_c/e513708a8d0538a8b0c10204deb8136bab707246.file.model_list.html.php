<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 09:54:14
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/model_list.html" */ ?>
<?php /*%%SmartyHeaderCode:310325924e7c63f9070-86491004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e513708a8d0538a8b0c10204deb8136bab707246' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/model_list.html',
      1 => 1481072919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310325924e7c63f9070-86491004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">模型管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=model">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=model&f=cache">更新缓存</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td width="8%" class="tc">编号</td>
    <td>模型名称</td>
    <td width="15%">数据表</td>
    <td width="15%">状态</td>
    <td width="25%">操作</td>
  </tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"model")); $_block_repeat=true; smarty_block_loop(array('module'=>"model"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr <?php if ($_smarty_tpl->getVariable('r')->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['model_name'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('pre')->value;?>
<?php echo $_smarty_tpl->getVariable('r')->value['model_table'];?>
</td>
    <td><?php if ($_smarty_tpl->getVariable('r')->value['is_lock']==0){?><a href="index.php?m=xdcms&c=model&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=1"><font color='#FF0000'>已锁定</font></a><?php }else{ ?><a href="index.php?m=xdcms&c=model&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=0">正常</a><?php }?></td>
    <td><a href="index.php?m=xdcms&c=model&f=field&modelid=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">管理字段</a> | <a href="index.php?m=xdcms&c=model&f=model_edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">编辑</a> | <?php if ($_smarty_tpl->getVariable('r')->value['is_fixed']==0){?><a href="###" onclick="confirm('真的要删除此模型吗?','index.php?m=xdcms&c=model&f=model_delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
')">删除</a><?php }else{ ?><font color='#FF0000'>删除</font><?php }?></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"model"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<div class="xdcms_bottom"></div>
</body>
</html>
