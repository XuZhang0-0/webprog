<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->

    <title>Administration Interface</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
    	body {
           padding-top: 50px;
        }
        .starter-template {
           padding: 40px 15px;
           text-align: center;
			}
           
        .zx_top { margin-top:50px;}
        .zx_margin10 { margin: 10px auto;}
    </style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Administration</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="Products.php?action=edit">Products</a></li>
            <li><a href="Supliers.php">Supplier</a></li>
            <li><a href="Orders.php">Orders</a></li>
            <li><a href="Contacts.php">Contacts</a></li>
            <li><a href="Addresses.php">Addresses</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <? include $view; ?>

    </div><!-- /.container -->

	<div id="footer">
      <div class="container zx_top divider ">
        <p class="text-muted">Handmade Shop - 2014</p>
      </div>
    </div>
    <!-- Bootstrap core JavaScript 
    ================================================== 
    <script src="../Content/js/jquery-1.11.1.min.js"></script>
    -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <?
        if(function_exists("JavaScripts")){
        	JavaScripts();
        }
    ?>
  </body>
</html>
