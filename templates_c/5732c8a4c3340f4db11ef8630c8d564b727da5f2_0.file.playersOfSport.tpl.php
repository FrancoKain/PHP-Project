<?php
/* Smarty version 3.1.39, created on 2021-11-21 00:52:42
  from 'C:\xampp\htdocs\Web2TPE\templates\playersOfSport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61998a4aebe251_74639687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5732c8a4c3340f4db11ef8630c8d564b727da5f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\templates\\playersOfSport.tpl',
      1 => 1637450489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61998a4aebe251_74639687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="<?php echo BASE_URL;?>
viewSports"> Volver </a>
<ul class="list-group">
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
        <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
 
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
