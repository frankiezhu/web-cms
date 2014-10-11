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
    '2ec57df41d396aba74abd6e9a05da8484d722f0d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\header.html',
      1 => 1401086625,
      2 => 'file',
    ),
    '7814c24de2e8f15102d61fc66f86746ff185985d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\masthead.html',
      1 => 1401174001,
      2 => 'file',
    ),
    'd34eb1a44b0b90305d448a5aab42242fc35459f4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\footer.html',
      1 => 1401521643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2797353898660f0a872-41985891',
  'variables' => 
  array (
    'err_msg' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53898661049d33_64562219',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53898661049d33_64562219')) {function content_53898661049d33_64562219($_smarty_tpl) {?>	<!DOCTYPE html>
<HTML lang="zh">
<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="Montreal地产经纪,Montreal地产,Montreal生意,Montreal出租,Montreal租房,Montreal售房,Montreal投资物业,Montreal房产,Montreal接待站,Montreal地产经纪刘湘漓" >
	<meta name="description" content="刘湘漓 VIP地产经纪-最强大，最权威，最实用，最快速，最精准，最方便，用户体验最佳的专业找房找生意网站。蒙特利尔，多伦多，温哥华，渥太华，卡尔加里，埃德蒙顿......" >
	<meta property="og:title" content="刘湘漓 VIP地产经纪 加拿大专业中文地产网" >
	<meta property="og:type" content="website" >
	<meta property="og:url" content="" >
	<meta property="og:image" content="" >
	<meta property="og:site_name" content="加拿大地产网" >
	<meta http-equiv="X-UA-Compatible" content="IE=7" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<TITLE>加拿大地产网 登录</TITLE>
	<script src="/web/assets/js/1.9.0/jquery.min.js"></script>
	<script src="/web/assets/js/bootstrap.js"></script>
	<link href="/web/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/web/assets/css/poster.css" rel="stylesheet">
	<script src="/web/assets/js/poster.js"></script>
	<script src="/web/assets/js/poster.js"></script>
</HEAD>
<BODY>
<div class="container-narrow">
		<div class="masthead">
		<ul class="nav nav-pills pull-right">
		  <?php if ($_smarty_tpl->tpl_vars['user_info']->value['has_login']) {?>
		  <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_name'];?>
</a></li>
		  <li><a href="/poster/logout">退出</a></li>
		  <li class="active"><a href="/poster/admin_post">后台管理</a></li>
		  <?php } else { ?>
		  <li class="active"><a href="/poster/signin">登录</a></li>
		  <?php }?>
		  <li><a href="/poster/about">联系我</a></li>	  
		</ul>
		<h3 class="muted">加拿大地产网</h3>
	</div>
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
		<?php if ($_smarty_tpl->tpl_vars['err_msg']->value!='') {?>
			<div class="well"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
		<?php }?>
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
		<hr>
	<footer>
		<p>&copy; Company 2013 加拿大地产网</p>
	</footer>

</div>
</body>
</html>
<?php }} ?>
