<?php
    include_once __DIR__ . '/../inc/functions.php';
	
	class Users{
		
		static public function Get($id = null)
		{
			if($id == null){
				// Get all records	
				
				return fetch_all("SELECTE * FROM 2013Fall_Users"); // ?????
				
				/**$conn = Getconnection();
				$results = $conn->query("");
				
				$arr = array(); // real results wants to return
					
				while ($row = $results->fetch_assoc()) {
					$arr[] = $row;
				}
				
				$conn->close(); // close as quick as possible 
				
				return $arr; **/ //put to functions file fetch_all function
			}else{
				// Get on record				
			}
		}
		
		static public function Create($row)
		{
			
		}
		
		static public function Blank()
		{
			return array('id' => null);
		}
		
		static public function Update($row)
		{
			
		}
		
		static public function Delete($id)
		{
			
		}
		
		static public function Validate($row)
		{
			
		}
	}
	
	/*****/
