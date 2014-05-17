<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	    <title>Handmade Shop!</title>
	
	    <!-- Bootstrap core CSS -->
	    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	
	    <style type="text/css">
	    </style>
	    <style>
	    	header{margin:0;}
	    	
	    	.margin0_zx {margin-bottom : 0 !important; padding-bottom: 0}
	    	.bottom { text-align: center; 
	    			line-height:100pxl; 
	    			font-size: 16px; 
	    			margin: 30px auto;
	    			position:fixed;_position:absolute;bottom:0;_bottom:auto;
	    			}
	    	.margin_zx {margin-top : 52px !important; padding-top: 0}
	    	.margin_pill {margin-top : 14px !important; padding-top: 0}
	    </style>
	</head>

	<body>

		<header>
			<div class="container margin0_zx">
			    <div class="navbar navbar-default navbar-fixed-top" role="navigation" role="navigation">
				    <div class="container">
				        <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					        </button>
					        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-music"></span>　Handmade Unique Shop</a>
				        </div>
				        <div class="collapse navbar-collapse">
					        <ul class="nav navbar-nav">
					            <li class="active"><a href="Products.php">Home</a></li>
					            <li><a href="?action=list">Categories</a></li>
					            <li><a href="#about">About</a></li>
							    <li><a href="#contact">Contact</a></li>
							    <li><a href="?action=search">Search</a></li>


					        </ul>
				        </div><!--/.nav-collapse -->
					</div>
				</div>
				

		</header>
	
		
	    
		    
	   		<? include $view; ?>

	
		


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<?
	     if(function_exists("JavaScripts")){
	     JavaScripts();
	     }
		 
    ?>
    <div class="clearfix"></div>
    
    <div id="footer margin_zx">
      <div class="container margin_zx">
        <p class="text-muted">Handmade Shop - 2014</p>
      </div>
    </div>
</body>
</html>