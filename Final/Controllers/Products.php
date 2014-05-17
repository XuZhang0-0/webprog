<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
	
	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];
	@$id	= $_REQUEST['id'];
	@$category_id = $_REQUEST['category_id'];
	$layout	= '_Layout';
	
	//print $format;
	
	switch ($action){
		case 'new':
			$view = 'edit';
			break;
		case 'edit':
			$model = Products::Get($_REQUEST['id']);
			$view = 'index';
			break;
		case 'save':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
			//$errors = Users::Validate($_REQUEST);
			if(!$errors){
				$errors = Products::Save($_REQUEST);
			}
			if(!$errors){
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();
			}else{
				//print_r($errors);
				$model = $_REQUEST;
				$view = 'edit';
			
			}
			break;
		case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				//Promt
				$model = Products::Get($_REQUEST['id']);
			}else{
				$errors = Products::Delete($_REQUEST['id']);
			}
			break;
		case 'index':
			$model = Products::Get($id, $category_id);	
			break;
		case 'categories':
			$model = Products::GetCategories();
			//print_r($model);
			break;
		case 'list':
			$layout = '_PublicLayout';
			$view = 'list';
			break;
		case 'picture':
			$img = $_REQUEST['img'];
			$layout = '_PublicLayout';
			$view = 'home';
			break;
		case 'login':
			Accounts::RequireLogin();
			$layout = '_PublicLayout';
			if($view == null) $view = 'home2';
			//if($view == null) $view = 'login';
			break;
		case 'logout':
			session_unset();
			$user = null;
			$view = 'list';
			$layout = '_PublicLayout';
			break;
		case 'search':
			$layout = '_PublicLayout';
			$view = 'angular';
			break;
		default:
			$layout = '_PublicLayout';
			//if($view == null) $view = 'angular';
			//if($view == null) $view = 'home2';
			if($view == null) $view = 'list';
	}
	
	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors'=> $errors, 'data'=> $model);
			echo json_encode($ret);
			break;

		case 'plain':
			include __DIR__ . "/../Views/Products/$view.php";	
			break;
		default:
			$view = __DIR__ . "/../Views/Products/$view.php";	
			include __DIR__ . "/../Views/Shared/$layout.php";
			break;
	}