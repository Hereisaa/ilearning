<?php
    
    require_once "phpExcel/PHPExcel.php";
    session_start();  
    // account -> test_email 暫時代替(為了測驗只要求email)
    if(isset($_SESSION["test_email"])){
        $username = $_SESSION["test_email"];
    }
    else{
        $username = NULL;
    }
    // questuin number
    $q_num = $_POST["q_num"];

    // 作答結果(0,1) -> $true_false
    $true_false = array();
    for($i = 0; $i < $q_num; $i++){ 
        array_push($true_false, $_POST["Q".($i+1)]);
    }

    // cell name
    $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 
        'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 
        'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ'); 

    $file = "test/TestResult.xlsx";
    $file = iconv("utf-8", "gb2312", $file);

    if(empty($file) OR !file_exists($file)) {  
        //die('file not exists!');  
        $objPHPExcel=new PHPExcel();
        $objSheet=$objPHPExcel->getActiveSheet();
        $objSheet->setTitle('result'); 

        // SHEET COLUMN NAME
        $objSheet->setCellValue("A1","學生編號");
        for($i = 0; $i < $q_num; $i++){
            $objSheet->setCellValue($cellName[$i+1]."1","第".($i+1)."題");
        }

        // 輸入表格
        $objSheet->setCellValue("A2",$username);
        for($i = 0; $i < $q_num; $i++){
            $objSheet->setCellValue($cellName[$i+1]."2",$true_false[$i]);
        }

        // 建立.xlsx
        $objWrite=PHPExcel_IOFactory::createWriter($objPHPExcel,"Excel2007");
        $objWrite->save("test/TestResult.xlsx");
    } 
    
    else{
        //include('phpExcel/PHPExcel.php');  //引入PHP EXCEL類  
        $objRead = new PHPExcel_Reader_Excel2007();   //創建reader對象  
        if(!$objRead->canRead($file)){  
            $objRead = new PHPExcel_Reader_Excel5();  
            if(!$objRead->canRead($file)){  
                die('No Excel!');  
            }  
        }  

        $objPHPExcel = $objRead->load($file);  //創建excel對象  
        $objSheet = $objPHPExcel->getSheet(0);   //獲取sheet表  
        $columnH = $objSheet->getHighestColumn();   //獲取最大的列號  
        $columnCnt = array_search($columnH, $cellName);  
        $rowCnt = $objSheet->getHighestRow();   //獲取總行數 

        // 輸入表格
        $objSheet->setCellValue("A".($rowCnt+1),$username);
        for($i = 0; $i < $q_num; $i++){
            $objSheet->setCellValue($cellName[$i+1]."".($rowCnt+1),$true_false[$i]);
        }

        $objWrite=PHPExcel_IOFactory::createWriter($objPHPExcel,"Excel2007");
        $objWrite->save("test/TestResult.xlsx");

    }

    header("Location: normtest.php");
?>