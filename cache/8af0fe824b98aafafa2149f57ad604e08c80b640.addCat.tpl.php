<?php
/* Smarty version 3.1.44, created on 2022-01-21 20:09:43
  from 'C:\xampp\htdocs\task\addCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61eb04f7a17f67_69759889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4ab984ba50727fb10d53d67af7484a033573b01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task\\addCat.tpl',
      1 => 1642791335,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_61eb04f7a17f67_69759889 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		
		име:<br>
		<input type="text" name="name">
		<br>
		описание:<br>
		<input type="text" name="descr">
		<br>
		
		
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
</body>
</html><?php }
}
