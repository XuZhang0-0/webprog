<?php
   include_once __DIR__ . '/password.php';
   
   function GetConnection(){
   	   global $password;
	   
       $conn = mysqli_connect('localhost', 'zhangx5', $password, 'zhangx5_db');
	   return $conn;
   }
   
   function fetch_all(){
       $conn = GetConnection();
       $results = $conn->query($sql);
	   
       $arr = array(); // real results wants to return
       
       while ($row = $results->fetch_assoc()) {
     		$arr[] = $row;
       }
	   
       $conn->close(); // close as quick as possible

       return $arr;
   }
   // $conn = GetConnection();
   // print_r($conn);
