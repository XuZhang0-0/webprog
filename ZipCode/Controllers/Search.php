<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../Models/Search.php';
	//include_once __DIR__ . "/../Views/Search.php";
	
	
	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];

	switch ($action){
		case 'search':
			$model = Searching::Search($_REQUEST['q']);
			break;

		default:

			$model = Searching::Get();
			//print_r($model);
			if($view == null) $view = 'Search';
			
	}
	
	switch ($format) {
		case 'json':
			$ret = array('success' => empty($errors), 'errors' => $errors, 'data' => $model);
			echo json_encode($ret);
			break;
		case 'plain':
			include __DIR__ . "/../Views/$view.php";
			break;
		
		default:
			include __DIR__ . "/../Views/Search.php";
			break;
	}
	
	
	