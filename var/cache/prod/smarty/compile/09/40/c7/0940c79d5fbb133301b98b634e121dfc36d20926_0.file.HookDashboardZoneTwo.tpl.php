<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:08:21
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7310534ab86_63234619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0940c79d5fbb133301b98b634e121dfc36d20926' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/ps_metrics/views/templates/hook/HookDashboardZoneTwo.tpl',
      1 => 1625763714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7310534ab86_63234619 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="dashboardApp"></div>

<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathDashboardApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
