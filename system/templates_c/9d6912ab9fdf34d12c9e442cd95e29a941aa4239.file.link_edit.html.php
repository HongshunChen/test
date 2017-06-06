<?php /* Smarty version Smarty-3.0.8, created on 2017-06-05 10:05:14
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/admin/link/link_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:110855934bc5a70e797-03899865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6912ab9fdf34d12c9e442cd95e29a941aa4239' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/admin/link/link_edit.html',
      1 => 1496628280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110855934bc5a70e797-03899865',
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
<form name="addform" action="index.php?m=link&c=admin&f=editsave" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xdcms_add_table">
  <tr>
    <th colspan="7" class="title"><div class="title_nav_1"><a href="index.php?m=link&c=admin">管理首页</a></div><span>|</span><div class="title_nav_2"><a href="index.php?m=link&c=admin&f=add">添加链接</a></div><span>|</span><div class="title_nav_3"><a href="javascript:location.reload()">刷新页面</a></div></th>
  </tr>
  <tr>
    <td align="right">名称：</td>
    <td colspan="3"><input type="text" name="title" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
"></td>
  </tr>
  <tr>
  <td align="right">链接类型：</td>
      <td ><select  name="typeid">
              <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link_type order by id asc ")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link_type order by id asc "), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

              <option value="<?php echo $_smarty_tpl->getVariable('r')->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('rs')->value['typeid']==$_smarty_tpl->getVariable('r')->value['id']){?> "selected" <?php }?>><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</option>
              <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."link_type order by id asc "), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

          </select> 
      </td>
  </tr>
  <tr>
    <td align="right">链接地址：</td>
    <td colspan="3"><input type="text" name="url" class="txt" size="30" value="<?php echo $_smarty_tpl->getVariable('rs')->value['url'];?>
"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="确认保存" class="submit" /><input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
" /></td>
  </tr>
</table>
</form>
<div class="xdcms_bottom"></div>
</body>
</html>
