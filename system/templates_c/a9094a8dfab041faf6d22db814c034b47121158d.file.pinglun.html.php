<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 16:00:31
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/xdcms/pinglun.html" */ ?>
<?php /*%%SmartyHeaderCode:2657259253d9f089a58-43142215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9094a8dfab041faf6d22db814c034b47121158d' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/xdcms/pinglun.html',
      1 => 1495612815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2657259253d9f089a58-43142215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\block.loop.php';
?>  <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."pinglun where parentid = ".($_smarty_tpl->getVariable('rs')->value['id'])." and is_lock = '0' order by id desc",'pages'=>"page")); $_block_repeat=true; smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."pinglun where parentid = ".($_smarty_tpl->getVariable('rs')->value['id'])." and is_lock = '0' order by id desc",'pages'=>"page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  <table width="90%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #CCC; margin-top:5px;">
    <tr>
      <td width="18%">昵称：<?php echo $_smarty_tpl->getVariable('r')->value['name'];?>
</td>
      <td width="82%">标题：<?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</td>
    </tr>
	<tr>
      <td colspan="2"><?php echo $_smarty_tpl->getVariable('r')->value['content'];?>
</td>
    </tr>
  </table>
  <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('sql'=>"select * from ".($_smarty_tpl->getVariable('pre')->value)."pinglun where parentid = ".($_smarty_tpl->getVariable('rs')->value['id'])." and is_lock = '0' order by id desc",'pages'=>"page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->getVariable('r')->value['id']!=''){?> 
    <table width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><?php echo $_smarty_tpl->getVariable('pages')->value;?>
</td>
      </tr>
  </table>
<?php }?>
<form name="pinglun" method="post" action="index.php?m=pinglun&c=index&f=add&contentid=<?php echo $_smarty_tpl->getVariable('rs')->value['id'];?>
">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="10%" height="40" align="left">昵称：</td>
      <td width="90%"><label>
        <input name="name" type="text" id="name" value="匿名" size="15" maxlength="20">
      </label></td>
    </tr>
    <tr>
      <td height="35" align="left">评论内容</td>
      <td><label>
        <textarea name="content" cols="40" rows="5" id="content"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="35">&nbsp;</td>
      <td><label>
        <input name="title" type="hidden" id="title" value="[<?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
]<?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
">
		
        <input type="submit" name="Submit" value="提交">
      </label></td>
    </tr>
  </table>
</form>
