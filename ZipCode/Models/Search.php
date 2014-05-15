<?php
    include_once __DIR__ . '/../inc/functions.php';
	
	class Search {
		static public function Get()
		{
			$sql = "SELECT *
                    FROM US_Zip_Codes
				   ";
			return fetch_all($sql);

	
		}
	}