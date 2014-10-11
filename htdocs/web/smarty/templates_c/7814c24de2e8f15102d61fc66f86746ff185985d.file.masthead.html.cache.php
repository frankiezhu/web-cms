<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 08:53:41
         compiled from "E:\xampp\htdocs\web\masthead.html" */ ?>
<?php /*%%SmartyHeaderCode:1514453897c75762eb0-11842623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7814c24de2e8f15102d61fc66f86746ff185985d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\masthead.html',
      1 => 1401174001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514453897c75762eb0-11842623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_info' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53897c75775f44_02949992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53897c75775f44_02949992')) {function content_53897c75775f44_02949992($_smarty_tpl) {?>	<div class="masthead">
		<ul class="nav nav-pills pull-right">
		  <?php echo '/*%%SmartyNocache:1514453897c75762eb0-11842623%%*/<?php if ($_smarty_tpl->tpl_vars[\'user_info\']->value[\'has_login\']) {?>/*/%%SmartyNocache:1514453897c75762eb0-11842623%%*/';?>

		  <li><a href="#"><?php echo '/*%%SmartyNocache:1514453897c75762eb0-11842623%%*/<?php echo $_smarty_tpl->tpl_vars[\'user_info\']->value[\'user_name\'];?>
/*/%%SmartyNocache:1514453897c75762eb0-11842623%%*/';?>
</a></li>
		  <li><a href="/poster/logout">退出</a></li>
		  <li class="active"><a href="/poster/admin_post">后台管理</a></li>
		  <?php echo '/*%%SmartyNocache:1514453897c75762eb0-11842623%%*/<?php } else { ?>/*/%%SmartyNocache:1514453897c75762eb0-11842623%%*/';?>

		  <li class="active"><a href="/poster/signin">登录</a></li>
		  <?php echo '/*%%SmartyNocache:1514453897c75762eb0-11842623%%*/<?php }?>/*/%%SmartyNocache:1514453897c75762eb0-11842623%%*/';?>

		  <li><a href="/poster/about">联系我</a></li>	  
		</ul>
		<h3 class="muted">加拿大地产网</h3>
	</div><?php }} ?>
