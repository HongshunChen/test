<?php /* Smarty version Smarty-3.0.8, created on 2017-06-03 17:24:05
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/link/link_list.html" */ ?>
<?php /*%%SmartyHeaderCode:3237759328035213e09-69201591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25455aa823e7de1d48ed736e6f135fcdb2a464e9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/link/link_list.html',
      1 => 1496481837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3237759328035213e09-69201591',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">友情链接管理</h1>
<div class="line"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=link&c=admin">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=link&c=admin&f=add">添加链接</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <th width="5%" class="tc">编号</th>
    <th width="20%">名称</th>
    <th width="20%">链接类型</th>
    <th width="40%">链接地址</th>
    <th width="5%">是否显示</th>
    <th width="10%">操作</th>
  </tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link order by id desc",'pages'=>"page")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link order by id desc",'pages'=>"page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr <?php if ($_smarty_tpl->getVariable('r')->value['_index']%2==0){?>class="bf"<?php }?>> 
    <td class="tc"><?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link_type where id=".($_smarty_tpl->getVariable('r')->value['typeid']),'return'=>"r1")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link_type where id=".($_smarty_tpl->getVariable('r')->value['typeid']),'return'=>"r1"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <td> <?php if ($_smarty_tpl->getVariable('r1')->value['title']!=''){?> <?php echo $_smarty_tpl->getVariable('r1')->value['title'];?>
 <?php }else{ ?>无类别<?php }?> </td>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link_type where id=".($_smarty_tpl->getVariable('r')->value['typeid']),'return'=>"r1"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <td><?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
</td>
    <td><?php if ($_smarty_tpl->getVariable('r')->value['is_lock']==1){?><a href="index.php?m=link&c=admin&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=0"><font color='#FF0000'>已锁定</font></a><?php }else{ ?><a href="index.php?m=link&c=admin&f=lock&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
&lockid=1">正常</a><?php }?></td>
    <td><a href="index.php?m=link&c=admin&f=edit&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
">编辑</a> | <a href="###" onclick="confirm('真的要删除此链接吗?','index.php?m=link&c=admin&f=delete&id=<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
')">删除</a></td>
</tr>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link order by id desc",'pages'=>"page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

 <tr class="bf">
    <td colspan="6" class="tc"><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td>
 </tr>
</table>
<div class="xdcms_bottom"></div>
</body>
</html>
