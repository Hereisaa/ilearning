<?php

<<<<<<< HEAD
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
    }else{
        $smarty->assign("login", "logout");
    }
=======
	require_once "libs/Smarty.class.php";
    $smarty = new Smarty();

  


    
>>>>>>> aa8ad666fb998b25ed077c76f6c5f5eeebed941c

    $smarty->display("normtest.html");

?>