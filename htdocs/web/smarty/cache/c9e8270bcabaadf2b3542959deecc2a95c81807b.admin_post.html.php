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
  'nocache_hash' => '780053897c95886829-58055568',
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538986c5ac0649_32247667',
  'variables' => 
  array (
    'err_msg' => 1,
    'uniqid' => 1,
  ),
  'has_nocache_code' => true,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538986c5ac0649_32247667')) {function content_538986c5ac0649_32247667($_smarty_tpl) {?><!DOCTYPE html>
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
	<TITLE>加拿大地产网 寄售管理</TITLE>
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
		  <li class="active"><a href="#"><strong>寄售管理</strong></a></li>
		  <li><a href="/poster/admin_headnews"><strong>头条信息管理</strong></a></li>
		  <li><a href="/poster/admin_my_info"><strong>个人页管理</strong></a></li>
		  <li><a href="/poster/admin_user"><strong>用户管理</strong></a></li>
		</ul>
	</div>
		<?php if ($_smarty_tpl->tpl_vars['err_msg']->value!='') {?>
			<div class="well"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['uniqid']->value!='') {?>
		<form id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_post/update/<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
">
		<?php } else { ?>
		<form id="form" class="form-horizontal" method="post" enctype="multipart/form-data"  action="/poster/admin_post/add">
		<?php }?>
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
					<?php if ($_smarty_tpl->tpl_vars['uniqid']->value!='') {?>
					<button type="submit" class="btn btn-success">修改</button>
					<?php } else { ?>
					<button type="submit" class="btn btn-success">添加</button>
					<?php }?>
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
 var uniqid = "<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
";
 $(document).ready(function(){
	init_admin_post(uniqid);
});
</script>
</html><?php }} ?>
