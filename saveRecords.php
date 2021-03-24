<?php
    include 'functions.php';
	require_once 'login.php';
    
    $b_no = $_POST["b_no"];     //bill_no
    $o_no = $_POST["o_no"];     //order_no
    $b_d = $_POST["b_d"];       //bill_date
    $o_d = $_POST["o_d"];       //order_date
    $comp_id = $_POST["c_n"];
    $val = $_POST["vals"];
    

	$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
				
	if (!$db_server) {
		die("connection not successful " . mysqli_connect_error());
	}
    
    
    echo "$b_no";
    echo "$o_no";
    echo "$b_d";
    echo "$o_d";
    echo "$c_n";
    echo "$val";
	
	
	$query = "SELECT * FROM invoice i WHERE i.bill_no = '$b_no'";    
    $result = getQueryResult($query);            
    $rows = mysqli_num_rows($result);
	
	if($rows === 0) {
		
		$query1 = "INSERT INTO invoice VALUES" . "('$b_no','$b_d','$o_no','$o_d',$comp_id)";
        $result1 = getQueryResult($query1);
		
		for ($j = 0 ; $j < sizeof($val); ++$j) {
			
			$arr = $val[$j];
			$query2 = "INSERT INTO invoice_items (serial_no,bill_no,quantity,description,rate,per,taka,ps,category_id) VALUES (NULL,'$b_no',$arr[0],'$arr[1]',$arr[2],'$arr[3]',$arr[4],'$arr[5]',9)";
			$result2 = getQueryResult($query2);
			
		}
		
		
	}
	else {
		echo "hello";
		$sql1 = "DELETE FROM invoice_items WHERE invoice_items.bill_no = '$b_no'";
		$result1 = getQueryResult($sql1);
		
		$sql2 = "DELETE FROM invoice WHERE invoice.bill_no = '$b_no'";
		$result2 = getQueryResult($sql2);
		
		$query1 = "INSERT INTO invoice VALUES" . "('$b_no','$b_d','$o_no','$o_d',$comp_id)";
        $result1 = getQueryResult($query1);
		
		for ($j = 0 ; $j < sizeof($val); ++$j) {
			
			$arr = $val[$j];
			$query2 = "INSERT INTO invoice_items (serial_no,bill_no,quantity,description,rate,per,taka,ps,category_id) VALUES (NULL,'$b_no',$arr[0],'$arr[1]',$arr[2],'$arr[3]',$arr[4],'$arr[5]',9)";
			$result2 = getQueryResult($query2);
			
		}

	}
    
?>