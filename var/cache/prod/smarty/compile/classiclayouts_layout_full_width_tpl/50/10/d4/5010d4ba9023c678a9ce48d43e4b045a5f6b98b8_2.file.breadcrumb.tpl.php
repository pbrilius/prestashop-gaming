<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:06:06
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/themes/classic/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7307e7a2dc8_98255723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5010d4ba9023c678a9ce48d43e4b045a5f6b98b8' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/themes/classic/templates/_partials/breadcrumb.tpl',
      1 => 1625763513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7307e7a2dc8_98255723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121204730960e7307e79a5c9_61923186', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_72025697960e7307e79be48_04671693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
              <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
            <?php } else { ?>
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_121204730960e7307e79a5c9_61923186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_121204730960e7307e79a5c9_61923186',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_72025697960e7307e79be48_04671693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72025697960e7307e79be48_04671693', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
