<?php /* Smarty version Smarty-3.0.8, created on 2016-07-11 14:31:35
         compiled from "F:\www\cms_3.0.1_utf8\system/templates/xdcms/qq.html" */ ?>
<?php /*%%SmartyHeaderCode:2183157833d472d64a8-79135000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62555e28d44e8bfb27a3105068534ba0b7b3f48' => 
    array (
      0 => 'F:\\www\\cms_3.0.1_utf8\\system/templates/xdcms/qq.html',
      1 => 1425347763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183157833d472d64a8-79135000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'F:\www\cms_3.0.1_utf8\system\Smarty\plugins\block.loop.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('js_path')->value;?>
qq.js"></script>
<SCRIPT type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('js_path')->value;?>
jquery-1.4.2.js"></SCRIPT>
<SCRIPT type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('js_path')->value;?>
menu.js"></SCRIPT>
<!-- QQ浮动客服  -->
<div id="QQFloatDiv" style="position:absolute; right:0; top:100px;" >
<span style="CURSOR:hand;  position:absolute; padding:9PX 0 0 15PX; " onClick="QQFloatDiv.style.display='none'"><img src="<?php echo $_smarty_tpl->getVariable('image_path')->value;?>
LITT.png" width="11" height="11" /></span>
	<div class="Head"></div>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"qq")); $_block_repeat=true; smarty_block_loop(array('module'=>"qq"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="Body"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
&nbsp;<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->getVariable('r')->value['qq'];?>
&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->getVariable('r')->value['qq'];?>
:41" alt="www.91736.com" title="www.91736.com"></a>&nbsp;</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"qq"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="Foot"></div>    
</div>
<!-- QQ浮动客服 -->
<script type="text/javascript">
// 调用
var ad = new FloatDiv('QQFloatDiv');
ad.Init(ad);
</script> 