<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:36:00
         compiled from "E:\xampp\htdocs\web\admin_user.html" */ ?>
<?php /*%%SmartyHeaderCode:2797353898660f0a872-41985891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a72facaf9f6ba87646b073eede7be309f02f2d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\admin_user.html',
      1 => 1401521753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2797353898660f0a872-41985891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'err_msg' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538986610304b1_51467714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538986610304b1_51467714')) {function content_538986610304b1_51467714($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"登录"), 0);?>

	<script src="/web/assets/js/poster.js"></script>
</HEAD>
<BODY>
<div class="container-narrow">
	<?php echo $_smarty_tpl->getSubTemplate ("masthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<div class="row">
		<ul class="nav nav-tabs">
		  <li><a href="/"><strong>回首页</strong></a></li>
		  <li><a href="/poster/admin_post"><strong>寄售管理</strong></a></li>
		  <li><a href="/poster/admin_headnews"><strong>头条信息管理</strong></a></li>
		  <li><a href="/poster/admin_my_info"><strong>个人页管理</strong></a></li>
		  <li class="active"><a href="#"><strong>用户管理</strong></a></li>
		</ul>
	</div>
    <div class="container">
      <form class="form-signin" id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_user/form">
		<?php echo '/*%%SmartyNocache:2797353898660f0a872-41985891%%*/<?php if ($_smarty_tpl->tpl_vars[\'err_msg\']->value!=\'\') {?>/*/%%SmartyNocache:2797353898660f0a872-41985891%%*/';?>

			<div class="well"><?php echo '/*%%SmartyNocache:2797353898660f0a872-41985891%%*/<?php echo $_smarty_tpl->tpl_vars[\'err_msg\']->value;?>
/*/%%SmartyNocache:2797353898660f0a872-41985891%%*/';?>
</div>
		<?php echo '/*%%SmartyNocache:2797353898660f0a872-41985891%%*/<?php }?>/*/%%SmartyNocache:2797353898660f0a872-41985891%%*/';?>

		<label id="err_msg" class="label label-important">用户管理：</label>
		<br>
		<br>
		<div class="controls">		
			<select name="action" placeholder="操作">
				<option value='add'>添加</option>
				<option value='del'>删除</option>
			</select>
		</div>
        <input id="username" name="username" type="text" class="input-xlarge" placeholder="username">
        <input id="password" name="password" type="text" class="input-xlarge" placeholder="password">
        <button class="btn btn-success" type="submit">提交</button>
      </form>
    </div> <!-- /container -->
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
