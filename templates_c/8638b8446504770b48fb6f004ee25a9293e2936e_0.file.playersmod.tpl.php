<?php
/* Smarty version 3.1.39, created on 2021-11-23 20:43:56
  from 'C:\xampp\htdocs\Web2TPE\templates\playersmod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d447c1cca60_49662258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8638b8446504770b48fb6f004ee25a9293e2936e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\templates\\playersmod.tpl',
      1 => 1637696616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/playerFinder.tpl' => 1,
    'file:templates/playersForm.tpl' => 1,
  ),
),false)) {
function content_619d447c1cca60_49662258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<a href="logout" class="btn btn-warning" > Cerrar sesión</a>
<h1>Jugadores del club 2021</h1>
<?php $_smarty_tpl->_subTemplateRender("file:templates/playerFinder.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
    <li class="list-group-item">
        <?php echo $_smarty_tpl->tpl_vars['player']->value->nombre;?>
 | <?php echo $_smarty_tpl->tpl_vars['sports']->value[$_smarty_tpl->tpl_vars['player']->value->id_deporte-1]->deporte;?>

        <a href="viewPlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
" class="btn btn-info">Ver</a>
        <a class="btn btn-danger" href="deletePlayer/<?php echo $_smarty_tpl->tpl_vars['player']->value->id;?>
'">Borrar</a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:templates/playersForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
