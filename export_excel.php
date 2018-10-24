<?php
    session_start();  
        
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = NULL;
    }

    require_once "phpExcel/PHPExcel.php";
    $objPHPExcel=new PHPExcel();
    $objSheet=$objPHPExcel->getActiveSheet();
    $objSheet->setTitle('result'); 
    /*-------------------------------------------------------------------*/ 
    $q_num = $_POST["q_num"]; //question number

    $true_false = array();

    for($i = 0; $i < $q_num; $i++){
        //$true_false_table[i] = $_POST["Q".i];   
        array_push($true_false, $_POST["Q".($i+1)]);
    }

    $objSheet->setCellValue("A1",$username);

    for($i = 0; $i < $q_num; $i++){
        $objSheet->setCellValue("A".($i+2),$true_false[$i]);
    }
    /*-------------------------------------------------------------------*/ 
    $objWrite=PHPExcel_IOFactory::createWriter($objPHPExcel,"Excel2007");
    $objWrite->save("test/test2.xlsx");

    header("Location: index.php");
?>