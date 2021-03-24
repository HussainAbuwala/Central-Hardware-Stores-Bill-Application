<?php

    include 'functions.php';
	require_once 'login.php';
	$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
				
	if (!$db_server) {
		die("connection not successful " . mysqli_connect_error());
	}
    
    $b_no = $_POST["b_no"];     //bill_no
    
    $query = "SELECT * FROM invoice i WHERE i.bill_no = '$b_no'";
    
    $result = getQueryResult($query);            
    $rows = mysqli_num_rows($result);
    
    if ($rows === 0) {
        echo "<span>Correct</span>";
    }
    

?>