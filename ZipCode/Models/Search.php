<?php
    include_once __DIR__ . '/../inc/functions.php';
	
	class Searching {
		static public function Search($query)
		{
			/*$sql = "SELECT *
                    FROM US_Zip_Codes
				   ";*/
			$sql = "SELECT * FROM US_Zip_Codes WHERE city LIKE '%$query%' or state LIKE '%$query%' or zip LIKE '%$query%' Limit 10 ";
			return fetch_all($sql);

	
		}
		
		static public function Get()
		{
			$sql = "SELECT *
                    FROM US_Zip_Codes
				   ";
			
			return fetch_all($sql);

	
		}
	}