<?php
/* Smarty version 3.1.44, created on 2022-01-21 20:00:40
  from 'C:\xampp\htdocs\task\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61eb02d8184663_08490091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcb6b6306564c120025499b949ed51966f82b6e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\task\\add.tpl',
      1 => 1642791017,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_61eb02d8184663_08490091 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		кат:<br>
		<input type="text" name="category_id">
		<br>
		име:<br>
		<input type="text" name="name">
		<br>
		снимка:<br>
		<input type="text" name="image">
		<br>
		цена:<br>
		<input type="text" name="price">
		<br>
		
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
</body>
</html><?php }
}
