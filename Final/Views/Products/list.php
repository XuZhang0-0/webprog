<style type="text/css">
	.categories {
		margin-bottom: 10px;
	}

	#shopping-cart-list {
		position: fixed;
		right: 	0px;
		top: 	20%;
		bottom: 20%;
		height: 60%;
		width: 	200px;
		background: #FFFFFF;
		border-radius: 5px 0px 0px 5px;
		border: 1px solid #000;
		padding: 5px;
		transition: right .5s;
		-webkit-transition: right .5s;
	}

	.closed#shopping-cart-list {
		right: -180px;
	}

	#shopping-cart-list .scrolling {
		overflow-y: scroll;
		height: 90%;
		border-bottom: 1px solid black;
	}

	#shopping-cart-list img {
		float: left;
		width: 30px;
		height: 30px;
	}

	.label-danger{ 
		background-color: maroon; 
	}
	
	
	.zx_top{margin: 15px auto 15px auto}
	.zx_item{margin:15px 0 10px 0;}
	.zx_item h3{
		display:inline-block;
		line-height: 30px;
		width:250px;
		white-space:nowrap;
		overflow:hidden;
		text-overflow : ellipsis;
		padding-right: 20px;
		
		
	}
	.zx_item p{
		display:inline-block;
		line-height: 30px;
		text-align: right;
		
		color:#EC971F;

	}
</style>


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

	<h3 class="pull-left">Select Category <span class="glyphicon glyphicon-circle-arrow-right">_<span class="glyphicon glyphicon-circle-arrow-right"></span></h3>	
	<ul class="nav nav-pills categories pull-right margin_pill" data-bind="foreach: categoryList">
	  <li data-bind="css: { active: $data == $root.currentCategory() }" >
	  	<a href="#" data-bind="text: category_name, click: $root.selectCategory"></a>
	  </li>
	</ul>
	
	<div class="clearfix"></div>
	



	
	<div class="row" data-bind="foreach: itemList">
		<div class=" col-md-4" >
				<div class="zx_item">
					<img data-bind="attr: { src: Picture_Url }" class="img-thumbnail pull-right" alt="140x140" style="width: 352px; height: 352px;" >
					<h3 class="panel-title"  data-bind="text: Name"></h3>
					<p class="pull-right" data-bind="text: '$' + Price"></p>
					
					<a class="btn btn-success" data-bind="click: $root.addToCart">Purchase</a>
				</div>

				
			</div>
	</div>
	
	<form action="?action=selectAddress&id=<?=$model['id']?>" method="post" data-bind="submit: doSomething">
	<div id="shopping-cart-list" class="closed" >
		<div class="scrolling"  data-bind="foreach: cart" >
			<input type="hidden" data-bind="value: id, uniqueName: true" />
			<div class="well well-sm clearfix">
				<img alt="item image" data-bind="attr: {src: Picture_Url}" />  
				<h6 data-bind="text: Name"></h6>
				<p data-bind="text: Description"></p>
				$<span data-bind="text: Price"></span>
				<button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.removeFromCart">
					<span class="glyphicon glyphicon-shopping-del"></span>
					Remove
				</button>
			</div>
		</div>
		<div>
			Total: $ <span data-bind="text: cartTotal"></span>
		<button type="submit" class="btn btn-warning btn-xs pull-right" style="margin:5px; position:fixed" value="Save">
					Check Out
		</button>
		</div>
	</div>
	</form>

<script type="text/template" id="cart-tmpl">
	<ul class="nav navbar-nav navbar-right ">
		<li>
			<button class="navbar-btn btn" data-bind="click: toggleCartList">
				<i class="glyphicon glyphicon-shopping-cart"></i>
				Cart
				<span class="badge label-danger" data-bind="text: cart().length">0</span>
				</button>			
		</li>
		<li><a></a></li>  <!--fixes navbar spacing -->
		<?php 
	    	if(!Accounts::IsLoggedIn()){
				$login = "show";
				$logout = "hidden";
				
			} else{
				$login = "hidden";
				$logout = "show";
				$arr = Accounts::GetCurrentUser();
				$username = $arr['FirstName'];
				print "<li><a>Welcome $username !</a></li>";}
	    ?>
	    <li class= "<?print $login?> "><a href="?action=login">Log In</a></li>
	    <li class= "<?print $logout?> "><a href="?action=logout">Log Out</a></li>
		<li><a></a></li>
	</ul>
</script>



</div>


	<? function JavaScripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
		<script type="text/javascript">
			$(function(){
				
				$(".navbar-collapse").append($("#cart-tmpl").html())
				
				$(".close").click(function(){
					$(this).closest(".alert").slideUp();
				})
				
				var vm = {
					categoryList: ko.observableArray(),
					currentCategory: ko.observable(),
					itemList: ko.observableArray(),
					cart: ko.observableArray(),
								
					selectCategory: function(){
						vm.currentCategory(this);
						$.get("?action=index&format=json",{category_id:this.id},null,'json')
							.always(function (results) {
								vm.itemList(results.data);
							});		    	
					},
					addToCart: function(){
						vm.cart.push(this);
					},
					removeFromCart: function(){
						vm.cart.remove(this);
					},
					toggleCartList: function(){
						$("#shopping-cart-list").toggleClass("closed");
					},
					//help: http://stackoverflow.com/questions/5035547/pass-javascript-array-php
					checkOut: function(){
					},
					doSomething : function() {
			            return true;
			        }
					
				}
				
				vm.cartTotal = ko.computed(function(){
						var tot = 0;
						$.each(vm.cart(), function(i,x){
							tot += +x.Price;
						})
						return tot.toFixed(2);
				});
				ko.applyBindings(vm);
				
				$.get("?action=categories&format=json",null,null,'json')
					.always(function (results) {
						vm.categoryList(results.data);
					})
			});
			
		</script>
	<? } ?>