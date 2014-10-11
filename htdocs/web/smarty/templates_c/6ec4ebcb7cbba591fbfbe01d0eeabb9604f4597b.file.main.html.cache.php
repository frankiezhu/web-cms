<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:34:21
         compiled from "E:\xampp\htdocs\web\main.html" */ ?>
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
  ),
  'nocache_hash' => '156253897c7565f990-76428922',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53897c757376c4_76230888',
  'variables' => 
  array (
    'data_array' => 1,
    'data' => 1,
    'pagination' => 1,
    'search' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53897c757376c4_76230888')) {function content_53897c757376c4_76230888($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"主页"), 0);?>

<script src="/web/assets/js/poster.js"></script>
</HEAD>
<BODY>
<div class="container-narrow">
	<?php echo $_smarty_tpl->getSubTemplate ("masthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
	<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php  $_smarty_tpl->tpl_vars[\'data\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'data\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'num\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'data_array\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'data\']->key => $_smarty_tpl->tpl_vars[\'data\']->value) {
$_smarty_tpl->tpl_vars[\'data\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'num\']->value = $_smarty_tpl->tpl_vars[\'data\']->key;
?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

		<div class="row bkyellow">
			<div class="pic">
				<a href="/poster/detail/<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'uniqid\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
" target="_blank" title=""><img src="/web/resource/<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'uniqid\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
/img0.jpg"></a>
			</div>
			<div class="house">             
				<dl>
					<dt class='dt'>
						<p class="housetitle">
							<a href="/poster/detail/<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'uniqid\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
" target="_blank" title=""><?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'title\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
</a>
						</p>
						<p>
							<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'short_desc\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						</p>
						<p class="housetitle">
							<a href="/poster/city/<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'city\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
" target="_blank" title=""><?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'city\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
</a>&nbsp;&nbsp;<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'addr\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						</p>  
						<p class="gray9">
							发布日期：<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'create_time\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						</p>
					</dt>
					<dd class="area" style="margin-top:2px">
						<ul style="list-style:none;">
						<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_done\'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0) {?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						<li><p class="label label-success">成交</p></li>
						<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php }?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_new_price\'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=0) {?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						<li><p class="label label-info">新价</p></li>
						<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php }?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_dealing\'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=0) {?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						<li><p class="label label-warning">预售</p></li>
						<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php }?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

						</ul>
					</dd>
					<dd class="money">
						<p class="price"><?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'price\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
万元</p>
					</dd>        
				</dl>
			</div>
			<div class="clear"></div>
		</div>
	<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php } ?>/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

	</div><!--endof houselist-->
	<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination\']->value;?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 </div>
</body>
 <script>
 var search = ["<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'search\']->value[\'city\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
","<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'search\']->value[\'price\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
","<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'search\']->value[\'status\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
","<?php echo '/*%%SmartyNocache:156253897c7565f990-76428922%%*/<?php echo $_smarty_tpl->tpl_vars[\'search\']->value[\'time\'];?>
/*/%%SmartyNocache:156253897c7565f990-76428922%%*/';?>
"];
 $(document).ready(function(){
	init_index(search);
});
</script>
</html><?php }} ?>
