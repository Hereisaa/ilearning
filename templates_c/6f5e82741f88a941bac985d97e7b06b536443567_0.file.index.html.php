<?php
/* Smarty version 3.1.33, created on 2018-10-26 10:20:03
  from 'C:\Users\a0979\Documents\GitHub\ilearning\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd2ce332fc9a5_33611821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f5e82741f88a941bac985d97e7b06b536443567' => 
    array (
      0 => 'C:\\Users\\a0979\\Documents\\GitHub\\ilearning\\templates\\index.html',
      1 => 1540541878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd2ce332fc9a5_33611821 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>起始畫面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" type="text/css" href="templates/CSS/mycss.css">
    <link rel="stylesheet" type="text/css" href="templates/CSS/navbar.css">

</head>
<body>
    <!--
    <nav class="navbar navbar-fixed-top" >
        <div class="container-fluid" >
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html" id="nava">越南學習V1</a>
            </div>
            <div class="collapse navbar-collapse" id="link" >
                <ul class="nav navbar-nav navbar-right " >
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" id="nava"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</a></li>
                    <li><a href="#.php" id="nava">管理</a></li>
                    <li><a href="/templates/info.html" id="nava">說明</a></li>
                </ul>
            </div>
        </div>
    </nav> 
    -->
    <ul id="navbar_ul">
        <li id="navbar_li"><a class="active" href="index.php" class="nav navbar-inverse" >Home</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >說明</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >管理</a></li>
		<li id="navbar_li" style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" ><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</a></li>
  	</ul>

    <div class="jumbotron bg-success" id="jumbotron">
        <div class="container" align="center" style="color:white">
            <h3>WELCOME <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
            <h1>NSYSU SMART LEARNING</h1>
        </div>
    </div>

    <div class="container" >
        <a href="normtest.php" id="btn_test" type="btn_test" class="btn btn-primary btn-lg btn-block">測驗</a>
    </div>

    <!-- hidden -->
    <div class="container" style="padding-bottom: 20%; display: none;">
        <div class="row">

            <div class="col-sm-6" id="difficult">
                <h3 align="center">程度列表</h3>
                <div class="list-group" style="font-family: Microsoft JhengHei" align="center">
                    <a href="#1" class="list-group-item list-group-item-action" style="font-weight: bold">字母</a>
                    <a href="#2" class="list-group-item list-group-item-action" style="font-weight: bold">日常對話(1)</a>
                    <a href="#3" class="list-group-item list-group-item-action" style="font-weight: bold">...</a>
                    <a href="#4" class="list-group-item list-group-item-action" style="font-weight: bold">...</a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="col">
                        <div class="col" id="progress" align="center">
                            <h3>學習進度</h3>
                            <p><a href="#">(點擊進入上次學習內容)</a></p>
                         </div>
                        <div class="col" id="review" align="center" >
                            <h3>複習</h3>
                            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">字母</a>
                            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">單字</a>
                            <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">句型</a>     
                            
                        </div>
                </div>
            </div>
        </div>
    </div>

    <hr />
    <p align="center" id="copyright">Designed by HSNL</p>
</body>
</html><?php }
}
