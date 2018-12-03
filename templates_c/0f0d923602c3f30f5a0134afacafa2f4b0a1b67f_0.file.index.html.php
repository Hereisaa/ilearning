<?php
/* Smarty version 3.1.33, created on 2018-12-03 05:06:40
  from 'D:\xampp\htdocs\awei_ilearning\ilearning\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c04abd04f6ec2_84528496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0d923602c3f30f5a0134afacafa2f4b0a1b67f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\awei_ilearning\\ilearning\\templates\\index.html',
      1 => 1543808617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c04abd04f6ec2_84528496 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>

        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
            <META HTTP-EQUIV="EXPIRES" CONTENT="0">
            <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>起始畫面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
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
    <ul id="navbar_ul" style="font-family: Microsoft JhengHei" align="center">
        <li id="navbar_li"><a class="active" href="index.php" class="nav navbar-inverse" >Home</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >說明</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >管理</a></li>
		<li id="navbar_li" style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" ><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</a></li>
  	</ul>

    <div class="jumbotron bg-success" id="jumbotron">
        <div class="container" align="center" style="color:white">
            <h3 style="font-size: 45px; font-weight: bold;">WELCOME <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
            <h1 style="font-size: 60px; ">NSYSU SMART LEARNING</h1>
        </div>
    </div>

    <div class="container" style="font-family: Microsoft JhengHei" align="center">
        <a href="normtest.php" id="btn_test" type="btn_test" class="btn btn-primary btn-lg btn-block">測驗</a>
    </div>

    <!-- hidden -->
    <div class="container" style="padding-top: 30px;">
        <div class="row">
            <div class="col-sm-6" id="difficult">
                <h3 style="font-family: Microsoft JhengHei; font-weight: bold;" align="center">程度列表</h3>
                <div class="list-group" align="center">
                    <a href="#1" class="list-group-item list-group-item-action">字母</a>
                    <a href="#2" class="list-group-item list-group-item-action">日常對話(1)</a>
                    <a href="#3" class="list-group-item list-group-item-action">...</a>
                    <a href="#4" class="list-group-item list-group-item-action">...</a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="col">
                        <div class="col" id="progress" align="center">
                            <h3 style="font-family: Microsoft JhengHei; font-weight: bold;" align="center">學習進度</h3>
                            <p style="font-family: Microsoft JhengHei;"><a href="#">(點擊進入上次學習內容)</a></p>
                         </div>
                       
                </div>
            </div>
        </div>
    </div>
    <hr />

    <div class="col" align="center" >
        <h3 style="font-family: Microsoft JhengHei; font-weight: bold;" align="center">複習</h3>   
        <p>
            <a class="btn btn-primary btn-lg active" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                字母
            </a>
            <a class="btn btn-primary btn-lg active" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                單字
            </a>
            <a class="btn btn-primary btn-lg active" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                句型
            </a>
        </p>
        <div class="collapse" id="collapse1">
            <div class="card card-body" style="border-color: black;">
                東西放這邊1
            </div>
        </div>
        <div class="collapse" id="collapse2" style="padding-top: 5px;">
            <div class="card card-body" style="border-color: black;">
                東西放這邊2
            </div>
        </div>
        <div class="collapse" id="collapse3" style="padding-top: 5px;">
            <div class="card card-body" style="border-color: black;">
                東西放這邊3
            </div>
        </div>
    </div>
    
    <hr />
    <p align="center" id="copyright">Designed by HSNL</p>
</body>
</html><?php }
}
