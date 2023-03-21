<?php
/* Smarty version 3.1.39, created on 2021-11-21 21:30:05
  from 'C:\xampp\htdocs\Web2TPE\templates\userLogInForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619aac4de3d4a7_50929764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85af607ce34fd59f5239c8a9974431d25da6ca5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\templates\\userLogInForm.tpl',
      1 => 1637526559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619aac4de3d4a7_50929764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Login:</h2>
<form action="verify" method="post">
    <input type="text" name="username" id="username" placeholder="Ingrese su usuario">
    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" >
    <input type="submit" class="btn btn-primary" value="Entrar">
</form>
<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
<a href="showCheckIn">Pulsa aqui para registrarte</a>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
