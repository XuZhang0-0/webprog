
<?php
   //include_once __DIR__ . '/password.php';
   include_once __DIR__ . '/password.php';

   function GetConnection(){
   	   global $password;
	   
	   //print $password;

       $conn = mysqli_connect('localhost', 'zhangx5', $password, 'zhangx5_db');
	   //echo(mysqli_connect_error($conn));
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
   // $conn = GetConnection();
   
