<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:36:06
         compiled from "E:\xampp\htdocs\web\admin_headnews.html" */ ?>
<?php /*%%SmartyHeaderCode:27083538986660b7419-27351442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77991e714ca482e41b6a9e6b73af4682a1afe75' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\admin_headnews.html',
      1 => 1401521756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27083538986660b7419-27351442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'err_msg' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389866612a421_06951297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389866612a421_06951297')) {function content_5389866612a421_06951297($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"基本信息管理"), 0);?>

	<link href="/web/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<script src="/web/assets/js/google-code-prettify/prettify.js"></script>
	<link href="/web/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<script src="/web/assets/js/jquery.hotkeys.js"></script>
	<script src="/web/assets/js/bootstrap-wysiwyg.js"></script>
	<script src="/web/assets/js/poster.js"></script>
</HEAD>
<BODY>
<div class="container-narrow">
	<?php echo $_smarty_tpl->getSubTemplate ("masthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<div class="row">
		<ul class="nav nav-tabs">
		  <li><a href="/"><strong>回首页</strong></a></li>
		  <li><a href="/poster/admin_post"><strong>寄售管理</strong></a></li>
		  <li class="active"><a href="#"><strong>头条信息管理</strong></a></li>
		  <li><a href="/poster/admin_my_info"><strong>个人页管理</strong></a></li>
		  <li><a href="/poster/admin_user"><strong>用户管理</strong></a></li>
		</ul>
	</div>
	<form id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_headnews/form">
		<?php echo '/*%%SmartyNocache:27083538986660b7419-27351442%%*/<?php if ($_smarty_tpl->tpl_vars[\'err_msg\']->value!=\'\') {?>/*/%%SmartyNocache:27083538986660b7419-27351442%%*/';?>

			<div class="well"><?php echo '/*%%SmartyNocache:27083538986660b7419-27351442%%*/<?php echo $_smarty_tpl->tpl_vars[\'err_msg\']->value;?>
/*/%%SmartyNocache:27083538986660b7419-27351442%%*/';?>
</div>
		<?php echo '/*%%SmartyNocache:27083538986660b7419-27351442%%*/<?php }?>/*/%%SmartyNocache:27083538986660b7419-27351442%%*/';?>

		<div class="control-group">
			<label class="control-label">头条图片：</label>
			<div class="controls">
				<input class="input-file" name="head_img" id="head_img" type="file">
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("textarea.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('label_name'=>"详情："), 0);?>

		<input type="hidden" name="hide_me" id="hide_me" value="">
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-success" onclick="validate" >提交</button>
			</div>
		</div>
	</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 </div>
 </body>
 <script>
 $(document).ready(function(){
	init_admin_headnews();
});
</script>
</html><?php }} ?>
