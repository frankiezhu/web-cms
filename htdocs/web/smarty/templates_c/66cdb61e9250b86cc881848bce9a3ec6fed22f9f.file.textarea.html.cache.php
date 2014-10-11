<?php /* Smarty version Smarty-3.1.18, created on 2014-05-31 08:54:13
         compiled from "E:\xampp\htdocs\web\textarea.html" */ ?>
<?php /*%%SmartyHeaderCode:1467353897c9592bf69-90372715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66cdb61e9250b86cc881848bce9a3ec6fed22f9f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\textarea.html',
      1 => 1400837234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1467353897c9592bf69-90372715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53897c95936120_28962025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53897c95936120_28962025')) {function content_53897c95936120_28962025($_smarty_tpl) {?>		<div class="control-group">
			<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['label_name']->value;?>
</label>
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
<?php }} ?>
