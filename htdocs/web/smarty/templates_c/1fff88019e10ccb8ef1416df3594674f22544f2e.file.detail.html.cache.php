<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:38:07
         compiled from "E:\xampp\htdocs\web\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:185853898379c1a832-32705165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fff88019e10ccb8ef1416df3594674f22544f2e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\detail.html',
      1 => 1401200339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185853898379c1a832-32705165',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53898379d11298_10458471',
  'variables' => 
  array (
    'data' => 1,
    'err_msg' => 1,
    'user_info' => 1,
    'uniqid' => 1,
    'imgs' => 1,
    'num' => 1,
    'img' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53898379d11298_10458471')) {function content_53898379d11298_10458471($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(\'title\'=>"详情 ".((string)$_smarty_tpl->tpl_vars[\'data\']->value[\'title\'])), 0);?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
	<script src="/web/assets/js/poster.js"></script>
	<script>init_google_map(<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'lat\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
, <?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'lng\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
)</script>
</HEAD>
<BODY>
<div class="container-narrow">
	<?php echo $_smarty_tpl->getSubTemplate ("masthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <div class="row">
		<div class="span6">
		<ul class="breadcrumb">
		  <li>
			<a href="/">首页</a><span class="divider">></span>
		  </li>
		  <li class="active"><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'title\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
</li>
		</ul>
		</div>
	</div>
	<div class="row well">
		<?php echo $_smarty_tpl->getSubTemplate ("resource/system/head_info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	</div>
	<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php if ($_smarty_tpl->tpl_vars[\'err_msg\']->value!=\'\') {?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

		<div class="row well"><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'err_msg\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php }?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

	<div class="row well">
		<div id="special_tags" style="margin:8 20">
			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_done\'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0) {?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<span class="label label-success">成交</span>
			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php }?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_new_price\'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=0) {?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<span class="label label-info">新价</span>
			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php }?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_dealing\'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=0) {?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<span class="label label-warning">预售</span>
			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php }?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php if ($_smarty_tpl->tpl_vars[\'user_info\']->value[\'has_login\']) {?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

			<div class="btn-group pull-right">
                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
					管理<span class="caret"></span>
				</button>
                <ul class="dropdown-menu">
                  <li><a href="/poster/admin_post/top/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
">置顶</a></li>
                  <li><a href="/poster/admin_post/delete/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
">删除</a></li>
                  <li><a href="/poster/admin_post/edit/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
">修改</a></li>
                  <!--li class="divider"></li-->
                </ul>
            </div>
			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php }?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

		</div>
        <div class="span4">
		    <div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div id="thumbnail" class="carousel-inner">
					<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php  $_smarty_tpl->tpl_vars[\'img\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'img\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'num\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'imgs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'img\']->key => $_smarty_tpl->tpl_vars[\'img\']->value) {
$_smarty_tpl->tpl_vars[\'img\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'num\']->value = $_smarty_tpl->tpl_vars[\'img\']->key;
?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

					<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'num\']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==0) {?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

					<div class="active item"><img src="/web/resource/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'img\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
" alt="" width="300" height="99" /></div>
					<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php } else { ?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

					<div class="item"><img src="/web/resource/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'uniqid\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
/<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'img\']->value;?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
" alt="" width="300" height="99" /></div>
					<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php }?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

					<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php } ?>/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
		<div id="detail_info" class="span6 well" style="margin-left:30;">
			<div class = "detail_info">
				<dl>
					<dd><span class="gray6">城市：</span><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'city\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
</dd>
					<dd><span class="gray6">价格：</span><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'price\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
</dd>
					<dd><span class="gray6">地址：</span><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'addr\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
</dd>
					<dd><span class="gray6">简述：</span><?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'short_desc\'];?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>
</dd>
					
				</dl>
			</div>
		</div>
	</div>
	<div class="row well">
		<div id="map_titile">
			<a class="btn btn-info" data-toggle="collapse" href="#map_img"  data-toggle="collapse">地图信息>></a>
		</div>
		<div id="map_img" class="collapse in">
			<div id="googleMap" style="width:50%;height:400px;"></div>
		</div>
		<hr style="border:0;background-color:#ddd;height:1px;">
		<div id="desc_titile">
			<a class="btn btn-info"  href="#desc_main"  data-toggle="collapse">详细介绍>></a>
		</div>
		<div id="desc_main" class="collapse in">
			<?php echo '/*%%SmartyNocache:185853898379c1a832-32705165%%*/<?php echo $_smarty_tpl->getSubTemplate ("resource/".((string)$_smarty_tpl->tpl_vars[\'uniqid\']->value)."/detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:185853898379c1a832-32705165%%*/';?>

		</div>
	</div>
	<hr>
   <footer>
        <p>&copy; Company 2013 加拿大地产网</p>
   </footer>
 </div>
</body>
</html><?php }} ?>
