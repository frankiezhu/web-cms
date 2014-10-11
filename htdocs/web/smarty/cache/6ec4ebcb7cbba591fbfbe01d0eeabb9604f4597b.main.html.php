<?php /*%%SmartyHeaderCode:156253897c7565f990-76428922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec4ebcb7cbba591fbfbe01d0eeabb9604f4597b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\main.html',
      1 => 1401521640,
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
  'nocache_hash' => '156253897c7565f990-76428922',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538989abc99c32_49660212',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538989abc99c32_49660212')) {function content_538989abc99c32_49660212($_smarty_tpl) {?><!DOCTYPE html>
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
	<TITLE>加拿大地产网 主页</TITLE>
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
	<div style="width:900">
		<img src="/web/resource/system/head_img.jpg">  
	</div>
	<div style="margin: 30px 0" >
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#"><strong>待售</strong></a></li>
		  <li><a href="/poster/sold"><strong>已售</strong></a></li>
		  <li><a href="/poster/about"><strong>我要寄售</strong></a></li>
		</ul>
		<div style="margin-left:10">
			<ul id="city" class="nav nav-pills">
				<li><strong style="font-weight: bold;">城市：</strong></li>
			</ul>
			<ul id="price" class="nav nav-pills">
				<li><strong style="font-weight: bold;">总价：</strong></li>
				<li><a href="/poster/price/all">不限</a></li>   
				<li><a href="/poster/price/0-100">0-100</a></li>
				<li><a href="/poster/price/100-1000">100-1000</a></li> 
				<li><a href="/poster/price/1000-10000">1000-10000</a></li> 
				<li><a href="/poster/price/10000_a">10000以上</a></li> 
			</ul>
			<ul id="status" class="nav nav-pills">
				<li><strong style="font-weight: bold;">状态：</strong></li>
				<li><a href="/poster/status/all">不限</a></li> 
				<li><a href="/poster/status/done"><span class="label label-success">成交</span></a></li>				
				<li><a href="/poster/status/new_price"><span class="label label-info">新价</span></a></li>
				<li><a href="/poster/status/dealing"><span class="label label-warning">预售</span></a></li>
			</ul>
			<ul id="time" class="nav nav-pills">
				<li><strong style="font-weight: bold;">时间：</strong></li>
				<li><a href="/poster/time/all">不限</a></li> 
				<li><a href="/poster/time/week">1周内</a></li>				
				<li><a href="/poster/time/month">1月内</a></li>
				<li><a href="/poster/time/year">1年内</a></li> 
			</ul>

		</div>
		<div class="clear"></div>
	</div>
	<hr>
	<div class = "row-fluid">
	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
		<div class="row bkyellow">
			<div class="pic">
				<a href="/poster/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['uniqid'];?>
" target="_blank" title=""><img src="/web/resource/<?php echo $_smarty_tpl->tpl_vars['data']->value['uniqid'];?>
/img0.jpg"></a>
			</div>
			<div class="house">             
				<dl>
					<dt class='dt'>
						<p class="housetitle">
							<a href="/poster/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['uniqid'];?>
" target="_blank" title=""><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</a>
						</p>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['data']->value['short_desc'];?>

						</p>
						<p class="housetitle">
							<a href="/poster/city/<?php echo $_smarty_tpl->tpl_vars['data']->value['city'];?>
" target="_blank" title=""><?php echo $_smarty_tpl->tpl_vars['data']->value['city'];?>
</a>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['addr'];?>

						</p>  
						<p class="gray9">
							发布日期：<?php echo $_smarty_tpl->tpl_vars['data']->value['create_time'];?>

						</p>
					</dt>
					<dd class="area" style="margin-top:2px">
						<ul style="list-style:none;">
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['s_done'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0) {?>
						<li><p class="label label-success">成交</p></li>
						<?php }?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['s_new_price'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=0) {?>
						<li><p class="label label-info">新价</p></li>
						<?php }?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['s_dealing'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=0) {?>
						<li><p class="label label-warning">预售</p></li>
						<?php }?>
						</ul>
					</dd>
					<dd class="money">
						<p class="price"><?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
万元</p>
					</dd>        
				</dl>
			</div>
			<div class="clear"></div>
		</div>
	<?php } ?>
	</div><!--endof houselist-->
	<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	<hr>
	<footer>
		<p>&copy; Company 2013 加拿大地产网</p>
	</footer>

 </div>
</body>
 <script>
 var search = ["<?php echo $_smarty_tpl->tpl_vars['search']->value['city'];?>
","<?php echo $_smarty_tpl->tpl_vars['search']->value['price'];?>
","<?php echo $_smarty_tpl->tpl_vars['search']->value['status'];?>
","<?php echo $_smarty_tpl->tpl_vars['search']->value['time'];?>
"];
 $(document).ready(function(){
	init_index(search);
});
</script>
</html><?php }} ?>
