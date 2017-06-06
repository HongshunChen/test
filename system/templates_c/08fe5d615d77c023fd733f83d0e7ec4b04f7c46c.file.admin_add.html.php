<?php /* Smarty version Smarty-3.0.8, created on 2017-05-27 17:23:22
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/admin_add.html" */ ?>
<?php /*%%SmartyHeaderCode:204745929458a1a7d05-80418551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08fe5d615d77c023fd733f83d0e7ec4b04f7c46c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/admin_add.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204745929458a1a7d05-80418551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?><?php $_template = new Smarty_Internal_Template("admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1 class="xdcms_search_title">管理员添加</h1>
<div class="line"></div>
<form name="addform" action="index.php?m=xdcms&c=admin&f=addsave" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=xdcms&c=admin">管理列表</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=xdcms&c=admin&f=add">添加管理</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td align="right">用户名：</td>
    <td><input type="text" name="username" class="txt" size="30"></td>
  </tr>
  <tr>
    <td align="right">所属管理组：</td>
    <td>
      <select name="groupid" id="groupid">
      <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"admin_group")); $_block_repeat=true; smarty_block_loop(array('module'=>"admin_group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <option value="<?php echo $_smarty_tpl->getVariable('r')->value['groupid'];?>
"><?php echo $_smarty_tpl->getVariable('r')->value['name'];?>
</option>
      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"admin_group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      </select></td>
  </tr>
  <tr>
    <td align="right">用户密码：</td>
    <td><input type="password" name="password" class="txt" size="33"></td>
  </tr>
  <tr>
    <td align="right">确认用户密码：</td>
    <td><input type="password" name="password2" class="txt" size="33"></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="submit" name="submit" value="确认添加" class="submit" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
