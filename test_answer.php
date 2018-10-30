<?php  
    session_start();  
    // account -> test_email 暫時代替(為了測驗只要求email)
    if(isset($_SESSION["test_email"])){
        $email = $_SESSION["test_email"];
    }
    else{
        $email = NULL;
    }
    
    if ($email != NULL)
    {
        // questuin number
        $q_num = $_POST["q_num"];

        // 作答結果(0,1) -> $true_false
        $true_false = array();
        $answer = "";
        
        for($i = 0; $i < $q_num; $i++){ 
            array_push($true_false, $_POST["Q".($i+1)]);
        }
        for($i = 0; $i < $q_num; $i++){ 
            $answer .= $true_false[$i];
        }


        $servername = "localhost";
        $dbaccount = "root";
        $dbpassword = "";
        $dbname = "ilearning";

        // step 1 connect
        $db = new mysqli($servername, $dbaccount, $dbpassword, $dbname);
        
        // Check connection
        if ($db->connect_error)  die("Connection failed:1 " . $db->connect_error);

        //step 2  prepare
        $db->set_charset("utf8");
        
        $sql = "INSERT INTO  normtest (email, answer)
                values (?, ?)";

        $stmt = $db->prepare($sql);
        if (!$stmt) {
            die("Connection failed:2 " . $db->connect_error);
        } 
                    
        //step 3 bind_param  
        if(!$stmt->bind_param('ss', $email, $answer)) die($stmt->error);

        //step 4 execute
        if (!$stmt->execute()) 
            die("Error:".$stmt->error);
        else
        {
            //echo $stmt->insert_id;
            $stmt->close();
            $db->close();
            header("Location: normtest.php");
        }
    }

    else
    {
        /*顯示登入網頁
        require_once "libs/Smarty.class.php";
        $smarty = new Smarty();
        $smarty->display("normtest.php");
        */
        
    }
?>