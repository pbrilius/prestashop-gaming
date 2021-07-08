<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:07:17
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/admin421fxp9hm/themes/default/template/helpers/modules_list/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e730c59637a3_11880326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42c232ca99028003cf646fce17aa2f3b83ad00f1' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/admin421fxp9hm/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1625763511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e730c59637a3_11880326 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
