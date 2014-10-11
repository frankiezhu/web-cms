<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 09:36:14
         compiled from "E:\xampp\htdocs\web\sold.html" */ ?>
<?php /*%%SmartyHeaderCode:1229253897c78e33727-96155399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35a5896bf56ac35713c08db3f0722203be4e3153' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\sold.html',
      1 => 1401521651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229253897c78e33727-96155399',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53897c78ef21a5_12419027',
  'variables' => 
  array (
    'data_array' => 1,
    'data' => 1,
    'pagination' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53897c78ef21a5_12419027')) {function content_53897c78ef21a5_12419027($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"已售"), 0);?>

</HEAD>
<BODY>
<div class="container-narrow">
	<?php echo $_smarty_tpl->getSubTemplate ("masthead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<div style="width:900">
		<img src="/web/resource/system/head_img.jpg">  
	</div>
	<div style="margin: 30px 0">
		<ul class="nav nav-tabs">
		  <li><a href="/"><strong>待售</strong></a></li>
		  <li class="active"><a href="#"><strong>已售</strong></a></li>
		  <li><a href="/poster/about"><strong>我要寄售</strong></a></li>
		</ul>
		<div class="clear"></div>
	</div>
	<div class = "row-fluid">
	<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php  $_smarty_tpl->tpl_vars[\'data\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'data\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'num\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'data_array\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'data\']->key => $_smarty_tpl->tpl_vars[\'data\']->value) {
$_smarty_tpl->tpl_vars[\'data\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'num\']->value = $_smarty_tpl->tpl_vars[\'data\']->key;
?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

		<div class="bkyellow">
			<div class="pic">
				<a href="/poster/detail/<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'uniqid\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
" target="_blank" title=""><img src="/web/resource/<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'uniqid\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
/img0.jpg"></a>
			</div>
			<div class="house">             
				<dl>
					<dt class='dt'>
						<p class="housetitle">
							<a href="/poster/detail/<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'uniqid\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
" target="_blank" title=""><?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'title\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
</a>
						</p>
						<p>
							<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'short_desc\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						</p>
						<p class="housetitle">
							<a href="/poster/city/<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'city\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
" target="_blank" title=""><?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'city\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
</a>&nbsp;&nbsp;<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'addr\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						</p>  
						<p class="gray9">
							发布日期：<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'create_time\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						</p>
					</dt>
					<dd class="area" style="margin-top:2px">
						<ul style="list-style:none;">
						<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_done\'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0) {?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						<li><p class="label label-success">成交</p></li>
						<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php }?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_new_price\'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=0) {?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						<li><p class="label label-info">新价</p></li>
						<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php }?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'s_dealing\'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=0) {?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						<li><p class="label label-warning">预售</p></li>
						<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php }?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

						</ul>
					</dd>
					<dd class="money">
						<p class="price"><?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'data\']->value[\'price\'];?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>
万元</p>
						<p></p>
					</dd>        
				</dl>
			</div>
			<div class="clear"></div>
		</div>
	<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php } ?>/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:1229253897c78e33727-96155399%%*/<?php echo $_smarty_tpl->tpl_vars[\'pagination\']->value;?>
/*/%%SmartyNocache:1229253897c78e33727-96155399%%*/';?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 </div>
</body>
</html><?php }} ?>
