<?php
/* Smarty version 3.1.33, created on 2018-10-29 10:33:20
  from 'D:\xampp\htdocs\awei_ilearning\ilearning\templates\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd6d3e0b50850_47540936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '271ef322e83bb6352461d4eda65905d5d98f0ea0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\awei_ilearning\\ilearning\\templates\\register.html',
      1 => 1540805600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6d3e0b50850_47540936 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>註冊</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
           height: 320px;
           margin-top: -200px;
           margin-left: -150px;
           padding: 20px;
           background-color: rgba(80, 180, 180, 0.9);
           color:white;
          }
</style>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
</head>

<body>
    <div class="loginbox">
        <form id="form1" name="form1" action="register.php" method="post">
            <input type="hidden" name="postback" value="true">
            <div class="form-group">
              <!-- 帳號暫時用電子郵件替代 -->
                <label for="account">電子郵件</label>
                <input type="text" name="account" id="account" value="" placeholder="請填入電子郵件" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" name="password" id="password" value="" placeholder="請填入密碼" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">密碼確認</label>
                <input type="password" name="password" id="passwordcheck" value="" placeholder="請填入密碼" class="form-control">
            </div>

            <!-- <div class="form-group">
                <label for="username">姓名</label>
                <input type="text" name="username" id="username" value="" placeholder="請填入姓名" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">電子郵件</label>
                <input type="text" name="email" id="email" value="" placeholder="請填入email" class="form-control">
            </div> -->

            <div>
                <input type="submit" name="register" id="register" value="註冊" class="btn btn-lg btn-danger" />
                <input type="button" value="返回" onclick="location.href='login.php'" class="btn btn-lg btn-danger"/>
            </div>
            
        </form>
    </div>
</body>

</html><?php }
}
