<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	 	<title>Rimty Store</title>
		<link rel="stylesheet"  href="css/bootstrap.min.css">    
	 	<script src="js/jquery.js"></script>
	 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Rimty Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-model-window"></span>Product</a></li>
				<li style="width: 300px; left: 10px; top: 10px;"><input type="text" class="form-control "  id="search"></li>
				<li style=" left: 20px; top: 10px;"><input type="submit" class="btn btn-primary "  id="search-btn"></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">O</span></a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Tk.</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>

						</div>
					</div>
				</li>

				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
					<ul class="dropdown-menu">
						<li><a href="">User Name</a></li>
						<li><a href="">change password</a></li>
						<li><a href="">logout</a></li>
					</ul>
				</li>
				<li>
					
				</li>
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
					
				</div>
				<!-- <div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->

				<!-- <div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">
				<div class="panel panel-info">
				<div class="panel-heading">Products</div>
				<div class="panel-body">
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">Samsung Galaxy</div>
							<div class="panel-body">
								<img src="Product_images/samsung galaxy S8.jpg">
							</div>
							<div class="panel-heading">$.500.00

								<button style="float:right;" class="btn btn-danger">AddToCart</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">Samsung Galaxy</div>
							<div class="panel-body">
								<img src="Product_images/samsung galaxy S8.jpg">
							</div>
							<div class="panel-heading">$.500.00

								<button style="float:right;" class="btn btn-danger">AddToCart</button>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">Samsung Galaxy</div>
							<div class="panel-body">
								<img src="Product_images/samsung galaxy S8.jpg">
							</div>
							<div class="panel-heading">$.500.00

								<button style="float:right;" class="btn btn-danger">AddToCart</button>
							</div>
						</div>
					</div>

				</div>
				<div class="panel-footer">&copy; 2018</div>	
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>