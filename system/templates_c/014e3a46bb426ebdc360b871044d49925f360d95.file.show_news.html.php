<?php /* Smarty version Smarty-3.0.8, created on 2017-05-24 16:47:06
         compiled from "D:\phpStudy\WWW\guoxun\system/templates/xdcms/en/show_news.html" */ ?>
<?php /*%%SmartyHeaderCode:156195925488ac8fda9-40169516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014e3a46bb426ebdc360b871044d49925f360d95' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\guoxun\\system/templates/xdcms/en/show_news.html',
      1 => 1481072924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156195925488ac8fda9-40169516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_get_block')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\function.get_block.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\phpStudy\WWW\guoxun\system\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('rs')->value['keywords'];?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->getVariable('rs')->value['description'];?>
" />
<base href="<?php echo $_smarty_tpl->getVariable('config')->value['siteurl'];?>
">
<link href="<?php echo $_smarty_tpl->getVariable('css_path')->value;?>
css.css" type=text/css rel=stylesheet>
</head>

<body>
<?php $_template = new Smarty_Internal_Template("xdcms/en/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  <div id="banner1"><?php echo smarty_function_get_block(array('tag'=>'banner'),$_smarty_tpl);?>
</div>
  <div id="body3">
	<?php $_template = new Smarty_Internal_Template("xdcms/left.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <div id="body3_r">
      <div class="body3_r1">
        <p><a href="/index.php?l=2">Home</a> > <?php echo get_guide($_smarty_tpl->getVariable('cat')->value['catid']);?>
</p><?php echo $_smarty_tpl->getVariable('cat')->value['catname'];?>
</div>
        <div class="body3_r2">
            <div class="body3_r3 <?php if ($_smarty_tpl->getVariable('rs')->value['style']!=''){?><?php echo $_smarty_tpl->getVariable('rs')->value['style'];?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('rs')->value['title'];?>
</div>
            <div class="body3_r4">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('rs')->value['inputtime'],'%Y-%m-%d %H:%M:%S');?>
 点击浏览：<script src="index.php?m=content&c=index&f=hits&contentid=<?php echo $_smarty_tpl->getVariable('rs')->value['contentid'];?>
"></script>次</div>
            <div class="body3_r5">
            <!-- 文本   -->
             <?php echo $_smarty_tpl->getVariable('rs')->value['content'];?>

            <!-- 文本 END  -->
            </div>
            <?php if ($_smarty_tpl->getVariable('keywords')->value!=''){?>
            <div>热点标签：<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
</div>
            <?php }?>
            <div>上一篇：<?php echo $_smarty_tpl->getVariable('previous')->value;?>
    下一篇：<?php echo $_smarty_tpl->getVariable('next')->value;?>
</div>
        </div>
    </div>
    <div class="Cle"></div>
  </div>
<?php $_template = new Smarty_Internal_Template("xdcms/en/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</div>
</body>
</html>