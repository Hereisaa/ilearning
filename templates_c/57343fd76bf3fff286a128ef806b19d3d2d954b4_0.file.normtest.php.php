<?php
/* Smarty version 3.1.33, created on 2018-10-30 11:30:22
  from 'D:\xampp\htdocs\awei_ilearning\ilearning\normtest.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd832be5bd260_43009702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57343fd76bf3fff286a128ef806b19d3d2d954b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\awei_ilearning\\ilearning\\normtest.php',
      1 => 1540867505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd832be5bd260_43009702 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

    ';?>session_start();  
    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();

/*
    if(isset($_SESSION["account"])){
        $username = $_SESSION["account"];
    }
    else{
        
        $username = NULL;
    }

    if($username==NULL){
        $smarty->assign("login", "login");
        $smarty->assign("login_text","登入");
        $smarty->assign("username","");
        $smarty->assign("login_status",0);
    }else{        
        $smarty->assign("login", "logout");
        $smarty->assign("login_text","登出");
        $smarty->assign("username",$username);
        $smarty->assign("login_status",1);

    }
*/

    $postback = isset($_POST["postback"]);
    if ($postback)
    {
        $_SESSION["test_email"] = $_POST["test_email"];
        $smarty->display("normtest.html");
    }
    else{
        $smarty->display("pre_test_page.html");
    }
<?php echo '?>';
}
}
