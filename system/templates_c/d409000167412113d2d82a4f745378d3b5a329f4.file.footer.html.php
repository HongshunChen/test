<?php /* Smarty version Smarty-3.0.8, created on 2016-07-11 14:31:35
         compiled from "F:\www\cms_3.0.1_utf8\system/templates/xdcms/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2594557833d474263f5-79770837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd409000167412113d2d82a4f745378d3b5a329f4' => 
    array (
      0 => 'F:\\www\\cms_3.0.1_utf8\\system/templates/xdcms/footer.html',
      1 => 1425347763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2594557833d474263f5-79770837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_loop')) include 'F:\www\cms_3.0.1_utf8\system\Smarty\plugins\block.loop.php';
?><!-- 页尾 -->
<div id="foot">
<?php echo $_smarty_tpl->getVariable('lang')->value['copyright'];?>
 
<br> 
<div>友情链接：<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('module'=>"link")); $_block_repeat=true; smarty_block_loop(array('module'=>"link"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<?php echo $_smarty_tpl->getVariable('r')->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('r')->value['title'];?>
</a> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('module'=>"link"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
</div>
<!-- 页尾 END -->