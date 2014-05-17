<?php
	include_once __DIR__ . '/../inc/functions.php';

	class Products  {

		static public function Get($id = null, $category_id = null)
		{
			$sql = "SELECT *
					FROM 2014Spring_Products
				   ";
			if($id){
				// Get one record
				$sql .= " WHERE id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0){
					return $results[0];
				}else{
					return null;
				}
			}elseif($category_id){
				$sql .= " WHERE Product_Category_id = $category_id ";
				return fetch_all($sql);
			}else{
				//	Get all records
				return fetch_all($sql);
			}
		}

		static public function GetCategories()
		{
			$sql = "SELECT * FROM 2014Spring_Product_Categories";
			return fetch_all($sql);
		}
		
		static public function GetSupliers() {
				$sql = "SELECT * FROM 2014Spring_Supliers ";
				return fetch_all($sql);
		}

		static public function Save(&$row)
		{
			$conn = GetConnection();

			$row2 = escape_all($row, $conn); //you need to do this so you clean up input (prevents SQL injection)
			if (!empty($row['id'])) {
				$sql = "Update 2014Spring_Products
						set Suplier_id='$row2[Suplier_id]', Name='$row2[Name]', Price='$row2[Price]', 
						Description='$row2[Description]', Picture_Url='$row2[Picture_Url]', 
						Catergory_Keyword_id='$row2[Catergory_Keyword_id]'
						WHERE id = $row2[id]";
			}else {
				$sql = "INSERT INTO 2014Spring_Products 
					(created_at, Suplier_id, Name, Price, Description, Picture_Url, Catergory_Keyword_id) 
					VALUES (current_timestamp, '$row2[Suplier_id]', '$row2[Name]', '$row2[Price]', '$row2[Description]',
						 '$row2[Picture_Url]', '$row2[Catergory_Keyword_id]')";
			}	

			$results = $conn->query($sql);
			$error = $conn->error;

			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}

			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Blank()
		{
			return array( 'id' => null);
		}

		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2014Spring_Products WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Name'])) $errors['Name'] = "is required";

			return count($errors) > 0 ? $errors : false ;
		}

	}

