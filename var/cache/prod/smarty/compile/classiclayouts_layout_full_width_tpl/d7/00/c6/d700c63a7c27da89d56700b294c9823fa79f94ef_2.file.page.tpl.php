<?php
/* Smarty version 3.1.39, created on 2021-07-08 20:06:06
  from '/var/www/vhosts/evg.lt/subdomains/povilas-test/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e7307e59afd8_45897100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd700c63a7c27da89d56700b294c9823fa79f94ef' => 
    array (
      0 => '/var/www/vhosts/evg.lt/subdomains/povilas-test/themes/classic/templates/page.tpl',
      1 => 1625763513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e7307e59afd8_45897100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100870069360e7307e593663_03934431', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_70837417260e7307e5949b4_54671829 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_16860752360e7307e593e15_53940654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70837417260e7307e5949b4_54671829', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_27533826560e7307e5977f6_59180379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_53741919560e7307e598230_07069333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_105607066760e7307e5970e1_37582670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27533826560e7307e5977f6_59180379', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53741919560e7307e598230_07069333', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_25529940360e7307e599b58_88507398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_43206231460e7307e599483_88804092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25529940360e7307e599b58_88507398', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_100870069360e7307e593663_03934431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_100870069360e7307e593663_03934431',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16860752360e7307e593e15_53940654',
  ),
  'page_title' => 
  array (
    0 => 'Block_70837417260e7307e5949b4_54671829',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_105607066760e7307e5970e1_37582670',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_27533826560e7307e5977f6_59180379',
  ),
  'page_content' => 
  array (
    0 => 'Block_53741919560e7307e598230_07069333',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_43206231460e7307e599483_88804092',
  ),
  'page_footer' => 
  array (
    0 => 'Block_25529940360e7307e599b58_88507398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16860752360e7307e593e15_53940654', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105607066760e7307e5970e1_37582670', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43206231460e7307e599483_88804092', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
