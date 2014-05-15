<?php
   function GetConnection(){
   	   $password = 'FaceBooK';
	   
       $conn = mysqli_connect('localhost', 'plotkinm', $password, 'plotkinm_db');
	   echo(mysqli_connect_error($conn));
	   return $conn;
	   
   }

   function fetch_all($sql){
       $conn = GetConnection();
       $results = $conn->query($sql);
	   $error = $conn->error;
	   if($error) return $error;
	   
       $arr = array(); // real results wants to return
       
       while ($row = $results->fetch_assoc()) {
     		$arr[] = $row;
       }
	   
       $conn->close(); // close as quick as possible
	   
       return $arr;
   }
   
   function escaoe_all($row, $conn){
   	   $row2 = array();
	   foreach ($row as $key => $value){
	   	   $row2[$key] = $conn->real_escape_string($value);
	   }
	   return $row2;
   }