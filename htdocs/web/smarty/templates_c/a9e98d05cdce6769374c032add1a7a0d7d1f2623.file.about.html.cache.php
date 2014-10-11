<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:34:26
         compiled from "E:\xampp\htdocs\web\about.html" */ ?>
<?php /*%%SmartyHeaderCode:1764253897c9337c584-51405525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9e98d05cdce6769374c032add1a7a0d7d1f2623' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\about.html',
      1 => 1401521659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764253897c9337c584-51405525',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53897c934003b8_26646157',
  'variables' => 
  array (
    'user_info' => 1,
    'err_msg' => 1,
    'data' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53897c934003b8_26646157')) {function content_53897c934003b8_26646157($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"联系我"), 0);?>

	<link href="/web/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</HEAD>
<BODY>
<div class="container-narrow">
	<div class="masthead">
		<ul class="nav nav-pills pull-right">
		  <?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php if ($_smarty_tpl->tpl_vars[\'user_info\']->value[\'has_login\']) {?>/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>

		  <li><a href="#"><?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php echo $_smarty_tpl->tpl_vars[\'user_info\']->value[\'user_name\'];?>
/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>
</a></li>
		  <li><a href="/poster/logout">退出</a></li>
		  <li><a href="/poster/admin_post">后台管理</a></li>
		  <?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php } else { ?>/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>

		  <li><a href="/poster/signin">登录</a></li>
		  <?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php }?>/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>

		  <li class="active"><a href="#">联系我</a></li>
		</ul>
		<h3 class="muted">加拿大地产网</h3>
	</div>
    <div class="row">
		<div class="span6">
		<ul class="breadcrumb">
		  <li>
			<a href="/">首页</a><span class="divider">></span>
		  </li>
		  <li class="active">关于</li>
		</ul>
		</div>
	</div>
	<div id='content' class='row-fluid'>
	  <div class='span9 main'>
	  	<?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php if ($_smarty_tpl->tpl_vars[\'err_msg\']->value!=\'\') {?>/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>

			<div class="well"><?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php echo $_smarty_tpl->tpl_vars[\'err_msg\']->value;?>
/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>
</div>
		<?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php }?>/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>

		<div class="well">
			<?php echo $_smarty_tpl->getSubTemplate ("resource/system/my_info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		</div>
	  </div>
	  <div class='span3 sidebar'>
		<div class="row ">
			<img src="/web/resource/system/photo.jpg" width="100" height="69" style="float:left; margin:20;" />
		</div>
		<ul class="nav nav-tabs nav-stacked">
		  <li><a href=""><i class="icon-phone"></i> 电话：<?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'tel\'];?>
/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>
</a></li>
		  <li><a href=""><i class="icon-envelope"></i> 邮箱：<?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'mail\'];?>
/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>
</a></li>
		  <li><a href=""><i class="icon-mobile-phone"></i> 微信：<?php echo '/*%%SmartyNocache:1764253897c9337c584-51405525%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'wechat\'];?>
/*/%%SmartyNocache:1764253897c9337c584-51405525%%*/';?>
</a></li>
		</ul>
		<div class="row ">
			<img src="/web/resource/system/wechat_img.jpg"  width="100" height="69" style="float:left; margin:20;" />
		</div>		
	  </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 </div>
</body>
</html><?php }} ?>
