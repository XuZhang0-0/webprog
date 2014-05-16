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
	    	.margin_zx {margin-top : 20px !important; padding-top: 0}
	    	.margin0_zx {margin-bottom : 0 !important; padding-bottom: 0}
	    	.bottom { text-align: center; line-height:100pxl; font-size: 16px; margin: 30px auto;}
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
					            <li><a href="#about">About</a></li>
							    <li><a href="#contact">Contact</a></li>
							    <li><a href="?action=search">Search</a></li>
							    
							    <li><a href="?action=login">Log In</a></li>

					        </ul>
				        </div><!--/.nav-collapse -->
					</div>
				</div>
				

		</header>
		
		
		
		 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide  margin_zx" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://cs.newpaltz.edu/~zhangx5/spring2014/Final/Content/images/0001.jpg" alt="First slide">

        </div>
        <div class="item">
          <img src="http://cs.newpaltz.edu/~zhangx5/spring2014/Final/Content/images/0002.jpg" alt="Second slide">
      
        </div>
        <div class="item">
          <img src="http://cs.newpaltz.edu/~zhangx5/spring2014/Final/Content/images/0003.jpg" alt="Third slide">

        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

		
		
		
		
	    <div class="container">
		    
	   		<? include $view; ?>

	
		</div><!-- /.container -->


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
    <div class="bottom"><p>Handmade Shop - 2014</p></div>
</body>
</html>