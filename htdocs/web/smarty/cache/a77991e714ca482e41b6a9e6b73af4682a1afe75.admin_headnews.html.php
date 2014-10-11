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
    '66cdb61e9250b86cc881848bce9a3ec6fed22f9f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\textarea.html',
      1 => 1400837234,
      2 => 'file',
    ),
    'd34eb1a44b0b90305d448a5aab42242fc35459f4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\footer.html',
      1 => 1401521643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27083538986660b7419-27351442',
  'variables' => 
  array (
    'err_msg' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389866614b108_31877648',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389866614b108_31877648')) {function content_5389866614b108_31877648($_smarty_tpl) {?><!DOCTYPE html>
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
	<TITLE>加拿大地产网 基本信息管理</TITLE>
	<script src="/web/assets/js/1.9.0/jquery.min.js"></script>
	<script src="/web/assets/js/bootstrap.js"></script>
	<link href="/web/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/web/assets/css/poster.css" rel="stylesheet">
	<script src="/web/assets/js/poster.js"></script>
	<link href="/web/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<script src="/web/assets/js/google-code-prettify/prettify.js"></script>
	<link href="/web/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<script src="/web/assets/js/jquery.hotkeys.js"></script>
	<script src="/web/assets/js/bootstrap-wysiwyg.js"></script>
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
		  <li class="active"><a href="#"><strong>头条信息管理</strong></a></li>
		  <li><a href="/poster/admin_my_info"><strong>个人页管理</strong></a></li>
		  <li><a href="/poster/admin_user"><strong>用户管理</strong></a></li>
		</ul>
	</div>
	<form id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_headnews/form">
		<?php if ($_smarty_tpl->tpl_vars['err_msg']->value!='') {?>
			<div class="well"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
		<?php }?>
		<div class="control-group">
			<label class="control-label">头条图片：</label>
			<div class="controls">
				<input class="input-file" name="head_img" id="head_img" type="file">
			</div>
		</div>
				<div class="control-group">
			<label class="control-label">详情：</label>
			<div class="controls">
				<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
				  <div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="字体"><i class="icon-font"></i><b class="caret"></b></a>
					  <ul class="dropdown-menu">
					  </ul>
					</div>
				  <div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" title="大小"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
					  <ul class="dropdown-menu">
					  <li><a data-edit="fontSize 5"><font size="5">大</font></a></li>
					  <li><a data-edit="fontSize 3"><font size="3">中</font></a></li>
					  <li><a data-edit="fontSize 1"><font size="1">小</font></a></li>
					  </ul>
				  </div>
				  <div class="btn-group">
				   <a class="btn dropdown-toggle" data-toggle="dropdown" title="颜色"><i class="icon-pencil"></i>&nbsp;<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a data-edit="foreColor #ff0000"><font color="#ff0000">红</font></a></li>
					<li><a data-edit="foreColor #00ff00"><font color="#00ff00">绿</font></a></li>
					<li><a data-edit="foreColor #0000ff"><font color="#0000ff">蓝</font></a></li>
					</ul>
				  </div>
				  <div class="btn-group">
					<a class="btn" data-edit="bold" title="加粗 (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
					<a class="btn" data-edit="italic" title="倾斜 (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
					<a class="btn" data-edit="underline" title="下划线 (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
				  </div>
				  <div class="btn-group">
					<a class="btn" data-edit="outdent" title="减小缩进 (Shift+Tab)"><i class="icon-indent-left"></i></a>
					<a class="btn" data-edit="indent" title="缩进 (Tab)"><i class="icon-indent-right"></i></a>
				  </div>
				  <div class="btn-group">
					<a class="btn" data-edit="justifyleft" title="左对齐 (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
					<a class="btn" data-edit="justifycenter" title="居中 (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
					<a class="btn" data-edit="justifyright" title="右对齐(Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
				  </div>
				  <div class="btn-group">
					<a class="btn" title="插入图片(或者拖拽)" id="pictureBtn">
						<i class="icon-picture"></i>
					</a>
					<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
				  </div>
				  <div class="btn-group">
					<a class="btn" data-edit="undo" title="撤销 (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
					<a class="btn" data-edit="redo" title="恢复 (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
				  </div>
				</div>

				<div id="editor">
				</div>
			</div>
		</div>

		<input type="hidden" name="hide_me" id="hide_me" value="">
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-success" onclick="validate" >提交</button>
			</div>
		</div>
	</form>
	<hr>
	<footer>
		<p>&copy; Company 2013 加拿大地产网</p>
	</footer>

 </div>
 </body>
 <script>
 $(document).ready(function(){
	init_admin_headnews();
});
</script>
</html><?php }} ?>
