<?php
/* Smarty version 3.1.33, created on 2018-12-07 09:17:48
  from 'C:\Users\a0979\Documents\GitHub\ilearning\templates\game.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0a2cac987b84_65589611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c48acede1554da8c2f342b268f7a1f6b27fe558' => 
    array (
      0 => 'C:\\Users\\a0979\\Documents\\GitHub\\ilearning\\templates\\game.html',
      1 => 1544170485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0a2cac987b84_65589611 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/game.js"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" type="text/css" href="templates/CSS/mycss.css">
    <link rel="stylesheet" type="text/css" href="templates/CSS/navbar.css">

    <title>補救遊戲</title>
</head>
<body>
    <ul id="navbar_ul" style="font-family: Microsoft JhengHei" align="center">
        <li id="navbar_li"><a class="active" href="index.php" class="nav navbar-inverse" >Home</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >說明</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >管理</a></li>
        <li id="navbar_li" style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" ><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</a></li>
    </ul>


	<div class="container" style="padding-top: 30px;">
		<canvas class="row" id='canvas' width="1000" height="760" style="background: #eee"></canvas>
		<button id="complete_btn" type="button" class="container btn btn-default" style="font-size: 32px; display: none;" onclick="complete(); ">很棒! 完成</button>

	</div>

	
</body>
</html><?php }
}
