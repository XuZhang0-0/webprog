<style type="text/css">
	.categories {
		margin-bottom: 10px;
	}
	.label-danger{ background-color: maroon; }
	.has-feedback .form-control-feedback {
		top: 0px;
		right: 15px;
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
	
	
	
	
	
	.categories {
		margin-bottom: 10px;
	}
	#shopping-cart-list {
		position: fixed;
		right: 0px;
		top: 20%;
		bottom: 20%;
		height: 60%;
		width: 200px;
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
		height: 95%;
		border-bottom: 1px solid black;
	}
	#shopping-cart-list img {
		float: left;
		width: 30px;
		height: 30px;
	}
	.label-danger{ background-color: maroon; }
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

<div ng-app="homepageApp">
	
	<div ng-view></div>
	
	<script type="text/ng-template" id="list">

		<h2>HOT ITEMS: </h2>
		<div class="row" ng-controller="ItemListCtrl" data-bind="itemList">
		
			<div ng-repeat="item in items | filter:query" class=" col-md-4" >
				<div class="zx_item">
					<img ng-src="{{item.Picture_Url}}" class="img-thumbnail" alt="140x140" style="width: 352px; height: 352px;" >
					<h3 class="panel-title">
						<a href="#/item/{{item.id}}">
						{{item.Name}}	
						</a>

					</h3>
					<p class="pull-right">${{item.Price}}</p>
					
					<a class="btn btn-success" data-bind="click: $root.addToCart">Purchase</a>
				</div>

				
			</div>
		</div>
	</script>	
	
	<script type="text/ng-template" id="details">
		<div class="panel panel-info" data-bind="foreach: itemList">
			<div class="panel-heading">
				<code class="pull-right">${{item.Price}}</code>
				<h3 class="panel-title">{{item.Name}}</h3>
			</div>
			<div class="panel-body">
				<img ng-src="{{item.Picture_Url}}" class="img-thumbnail pull-right" >
				<p>{{item.Description}}</p>
				<a class="btn btn-success" data-bind="click: $root.addToCart">Purchase</a>
			</div>
		</div>
	</script>
	
	
	
</div>
	<div id="shopping-cart-list" class="closed" >
		<div class="scrolling" data-bind="foreach: cart" >
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
		</div>
	</div>


<script type="text/template" id="cart-tmpl">
	<ul class="nav navbar-nav navbar-right ">
		<li>
			<button class="navbar-btn btn" data-bind="click: toggleCartList">
				<i class="glyphicon glyphicon-shopping-cart"></i>
				Cart
				<span class="badge label-danger" data-bind="text: cart().length">0</span>
			</button>	
		</li>
		
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
</div><!-- /.container -->


<? function JavaScripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.0-beta.3/angular-route.js"></script>
	<script src="../Content/js/controllers.js"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
			<script type="text/javascript">
			$(function(){
				
				$(".navbar-collapse").append($("#cart-tmpl").html())
				
				$(".close").click(function(){
					$(this).closest(".alert").slideUp();
				})
				
				var vm = {
					//categoryList: ko.observableArray(),
					currentCategory: ko.observable(),
					itemList: ko.observableArray(),
					cart: ko.observableArray(),
					currentItem: ko.observable(),
								
					selectCategory: function(){
						vm.currentCategory(this);
						$.get("?action=index&format=json",{category_id:this.id},null,'json')
							.always(function (results) {
								vm.itemList(results.data);
							});		    	
					},
					addToCart: function(){
						vm.currentItem(this);
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
				
				/*$.get("?action=categories&format=json",null,null,'json')
					.always(function (results) {
						vm.categoryList(results.data);
					})
					$.get("?action=index&format=json",{{item.id}},null,'json')
					* */
				
				$.get("?action=index&format=json",null,null,'json')
							.always(function (results) {
								vm.itemList(results.data);
							});	
			});
			
		</script>
<? } ?>

