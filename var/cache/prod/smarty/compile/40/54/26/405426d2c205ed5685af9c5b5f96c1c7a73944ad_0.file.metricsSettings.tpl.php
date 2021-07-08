<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:08:45
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/ps_metrics/views/templates/admin/metricsSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7311d4fbee8_66280212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '405426d2c205ed5685af9c5b5f96c1c7a73944ad' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/ps_metrics/views/templates/admin/metricsSettings.tpl',
      1 => 1625763714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7311d4fbee8_66280212 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://js.chargebee.com/v2/chargebee.js" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="settingsApp"></div>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathSettingsApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://js.chargebee.com/v2/chargebee.js"><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
