<?php
/* Smarty version 3.1.33, created on 2018-12-09 12:46:23
  from 'D:\xampp\htdocs\awei_ilearning\ilearning\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0d008f13b649_69390533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bf491174a1333326cec2aa1b847433f1e7551ac' => 
    array (
      0 => 'D:\\xampp\\htdocs\\awei_ilearning\\ilearning\\templates\\login.html',
      1 => 1544270048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0d008f13b649_69390533 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <title>登入</title>

    <style>
            body
            {
                font-size: 12pt;
                line-height: 1.5;
            }

            .loginbox
            {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 280px;
            margin-top: -200px;
            margin-left: -150px;
            padding: 20px;
            background-color: rgba(80, 180, 180, 0.9);
            color:white;
            }
    </style>

</head>

<body>
    
    <div class="loginbox">
        <form id="form1" name="form1" action="login.php" method="post">
            <input type="hidden" name="postback" value="true">
            <div class="form-group">
                <label for="account">帳號</label>
                <input type="text" name="account" id="account" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div>
                <input type="submit" name="login" id="login" value="登入" class="btn btn-lg btn-danger" />
                <!-- 已將location更改，index.php改為normtest.php -->
                <input type="button" value="返回首頁" onclick="location.href='index.php'" class="btn btn-lg btn-danger"/>
                <td><a href="register.php"> 註冊會員 </a></td>
            </div>
            

        </form>
    </div>
</body>

</html><?php }
}
