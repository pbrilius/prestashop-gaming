<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:08:18
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7310296a470_26390552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c7fe13b3e37db118f2385e0d05cab9035a4b55' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl',
      1 => 1625763512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7310296a470_26390552 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconBgColor']->value,'javascript' ));?>
',
      textColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconTxtColor']->value,'javascript' ));?>
',
      notificationGetUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconUrl']->value,'javascript' ));?>
',
      CHECKBOX_ORDER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconOrder']->value);?>
,
      CHECKBOX_CUSTOMER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconCustomer']->value);?>
,
      CHECKBOX_MESSAGE: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconMsg']->value);?>
,
      timer: 120000, // Refresh every 2 minutes
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
