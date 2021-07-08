<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:08:21
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/welcome/views/templates/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7310559f799_48741581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb41f0276dca6119a924444ba1d83e4bb793e254' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/welcome/views/templates/tooltip.tpl',
      1 => 1625763512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7310559f799_48741581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
