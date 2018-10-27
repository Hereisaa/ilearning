<?php

    session_start();  
    
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = NULL;
    }

    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
    
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

    $smarty->display("normtest.html");

?>