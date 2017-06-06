<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:22:44
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/admin_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2942259294564baaa81-38863749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf93844ee9f9e15989d41284de144798bbfefec' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/admin_list.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2942259294564baaa81-38863749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">管理员管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=admin">管理列表</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=admin&f=add">添加管理</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="8%" class="tc">编号</th>
    <th width="20%">管理员账号</th>
    <th width="10%">登录IP</th>
    <th width="18%">创建时间</th>
    <th width="18%">登录时间</th>
    <th width="9%">是否锁定</th>
    <th width="10%">操作</th>
  </tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"admin")); $_block_repeat=true; smarty_block_loop(array('module'=>"admin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr <?php if ($_smarty_tpl->getVariable('r')->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['username'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['last_ip'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['creat_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('r')->value['last_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
    <td><?php if ($_smarty_tpl->getVariable('r')->value['is_lock']==1){?><a href="index.php?m=xdcms&c=admin&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=0"><font color='#FF0000'>已锁定</font></a><?php }else{ ?><a href="index.php?m=xdcms&c=admin&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=1">正常</a><?php }?></td>
    <td><a href="index.php?m=xdcms&c=admin&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">编辑</a> | <a href="###" onclick="confirm('真的要删除此管理员吗?','index.php?m=xdcms&c=admin&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
')">删除</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"admin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</table>
<div class="xdcms_bottom"></div>
</body>
</html>
