<?php

    session_start();  
    $_SESSION["test_email"] = $_POST["test_email"];
    /*
    if(isset($_SESSION["test_email"])){
        $username = $_SESSION["test_email"];
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

    // 參與測驗人員 email 
    if( isset($_POST["test_email"]) ){
        $_SESSION["test_email"] = $_POST["test_email"];
    }
    
    */
    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
    
    $smarty->display("normtest.html");
    
?>