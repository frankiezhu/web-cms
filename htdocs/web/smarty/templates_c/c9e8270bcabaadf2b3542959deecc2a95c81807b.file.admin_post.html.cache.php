<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:37:41
         compiled from "E:\xampp\htdocs\web\admin_post.html" */ ?>
<?php /*%%SmartyHeaderCode:780053897c95886829-58055568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9e8270bcabaadf2b3542959deecc2a95c81807b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\admin_post.html',
      1 => 1401521755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '780053897c95886829-58055568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53897c95911f66_88359629',
  'variables' => 
  array (
    'err_msg' => 1,
    'uniqid' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53897c95911f66_88359629')) {function content_53897c95911f66_88359629($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"寄售管理"), 0);?>

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
		  <li class="active"><a href="#"><strong>寄售管理</strong></a></li>
		  <li><a href="/poster/admin_headnews"><strong>头条信息管理</strong></a></li>
		  <li><a href="/poster/admin_my_info"><strong>个人页管理</strong></a></li>
		  <li><a href="/poster/admin_user"><strong>用户管理</strong></a></li>
		</ul>
	</div>
		<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php if ($_smarty_tpl->tpl_vars[\'err_msg\']->value!=\'\') {?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

			<div class="well"><?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php echo $_smarty_tpl->tpl_vars[\'err_msg\']->value;?>
/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>
</div>
		<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php }?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

		<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php if ($_smarty_tpl->tpl_vars[\'uniqid\']->value!=\'\') {?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

		<form id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_post/update/<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>
">
		<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php } else { ?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

		<form id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_post/add">
		<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php }?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

		<div class="control-group ">
				<label class="control-label">置顶：</label>
				<div class="controls">
					<label class="checkbox">
					  <input type="checkbox" id="top" name="top" value="1">
					  置顶
					</label>
				</div>
			</div>
			<div class="control-group ">
				<label class="control-label">标题：</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input" id="title" name="title" placeholder="标题">
					</div>
				</div>
			</div>
			<div class="control-group ">
				<label class="control-label">简述：</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input" id="short_desc" name="short_desc" placeholder="简述">
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">城市：</label>
				<div class="controls">		
					<select class="" id="city" name="city" placeholder="城市"></select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">地址：</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input" id="addr" name="addr" placeholder="地址">
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">经度：</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input" id="lat" name="lat" placeholder="经度">
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">纬度：</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input" id="lng" name="lng" placeholder="纬度">
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">售价：</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input" id="price" name="price" placeholder="售价">
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">状态：</label>
				<div class="controls">
					<label class="checkbox">
					  <input type="checkbox" id="s_done" name="status[]" value="1">
					  <span class="label label-success">成交</span>
					</label>
					<label class="checkbox">
					  <input type="checkbox" id="s_new_price" name="status[]" value="2">
					  <span class="label label-info">新价</span>
					</label>
					<label class="checkbox">
					  <input type="checkbox" id="s_dealing" name="status[]" value="3">
					  <span class="label label-warning">预售</span>
					</label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">缩略图片：</label>
				<div class="controls">
					<input class="input-file" id="img0"  name="img0" type="file" >
				</div>
				<div class="controls">
					<input class="input-file" id="img1"  name="img1" type="file" >
				</div>
				<div class="controls">
					<input class="input-file" id="img2"  name="img2" type="file">
				</div>
				<div class="controls">
					<input class="input-file" id="img3"  name="img3" type="file">
				</div>
				<div class="controls">
					<input class="input-file" id="img4"  name="img4" type="file">
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("textarea.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('label_name'=>"详情："), 0);?>

			<input type="hidden" name="hide_me" id="hide_me" value="">
			<div class="control-group">
				<div class="controls">
					<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php if ($_smarty_tpl->tpl_vars[\'uniqid\']->value!=\'\') {?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

					<button type="submit" class="btn btn-success">修改</button>
					<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php } else { ?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

					<button type="submit" class="btn btn-success">添加</button>
					<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php }?>/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>

				</div>
			</div>
	    </form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 </div>
</body>
 <script>
 var uniqid = "<?php echo '/*%%SmartyNocache:780053897c95886829-58055568%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:780053897c95886829-58055568%%*/';?>
";
 $(document).ready(function(){
	init_admin_post(uniqid);
});
</script>
</html><?php }} ?>
