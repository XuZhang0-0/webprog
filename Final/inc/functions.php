<?php
   include_once 'password.php';
   
   function GetConnention(){
   	   global $password;
	   
       $conn = mysqli_connect('localhost', 'zhangx5', $password, 'zhangx5_db');
	   return $conn;
   }
   
   $conn = GetConnection();
   print_r($conn);
   
