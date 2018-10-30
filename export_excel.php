<?php

    $login_time = date("Y-m-d  H:i:s");

    $servername = "localhost";
    $dbaccount = "root";
    $dbpassword = "";
    $dbname = "ilearning";

    //step 1 connect
    $db = new mysqli($servername, $dbaccount, $dbpassword, $dbname);
        
    //Check connection
    if ($db->connect_error) {
        die("Connection failed:1 " . $db->connect_error);
    }
    //step 2  prepare
    $db->set_charset("utf8");
    $sql = "SELECT * FROM normtest";
    $stmt = $db->prepare($sql);
    if (!$stmt) {
        die("Connection failed:2 " . $db->connect_error);
    } 

    //step 3 bind_param  
    //if(!$stmt->bind_param('ss', $account, $password )) die($stmt->error);

    //step 4 execute
    if (!$stmt->execute()) die("Error:".$stmt->error);
         
    //step 5 fetch
    $result = $stmt->get_result();
    $rows = array();
    $email = array();
    $answer = array();
    $cnt=0;

    while ($row = $result->fetch_assoc()) {
        $email[$cnt] = $row["email"];
        $answer[$cnt] = $row["answer"];
        $cnt++;
    }

    require_once "phpExcel/PHPExcel.php";

    $cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 
        'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 
        'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ'); 
    $file = "test/TestResult.xlsx";
    $file = iconv("utf-8", "gb2312", $file);

    // questuin number
    $q_num = mb_strlen($answer[0],"utf-8");

    $objPHPExcel=new PHPExcel();
    $objSheet=$objPHPExcel->getActiveSheet();
    $objSheet->setTitle('result'); 

    function browser_export($type,$filename){  //聲明一個方法  判斷保存 保存格式
        if($type=='Excel5'){ 
            header('Content-Type: application/vnd.ms-excel');
        }else{
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        }
        header('Content-Disposition: attachment;filename="'.$filename.'"');//告訴瀏覽器 輸出的文檔名稱
        header('Cache-Control: max-age=0');//禁止緩存
    }


    // SHEET COLUMN NAME
    $objSheet->setCellValue("A1","學生編號");
    for($i = 0; $i < $q_num; $i++){
        $objSheet->setCellValue($cellName[$i+1]."1","第".($i+1)."題",PHPExcel_Cell_DataType::TYPE_STRING);
    }


    // 作答結果(0,1) -> $true_false
   

    for($i=0; $i < $cnt; $i++){
        $true_false = array();
        $answer_array = array();
        $answer_array = str_split($answer[$i]);

        for($j=0; $j < $q_num; $j++){
            $true_false[$j] = $answer_array[$j];
        }
        
        // 輸入表格
        $objSheet->setCellValue("A".($i+2),$email[$i]);
        for($k = 0; $k < $q_num; $k++){
            $objSheet->setCellValue($cellName[$k+1].($i+2),$true_false[$k],PHPExcel_Cell_DataType::TYPE_STRING);
        }
        
    }

    // 建立.xlsx
    $objWrite=PHPExcel_IOFactory::createWriter($objPHPExcel,"Excel2007");
    //$objWrite->save("test/TestResult.xlsx");
    
    $date = date("Ymd_His");
    
    browser_export("Excel2007",'TestResult_'.$date.'.xlsx');  //不保存在當前文檔夾下，直接輸出至瀏覽器
    $objWrite->save('php://output');  //保存
    
    $stmt->close();
    $db->close();

    exit;
?>