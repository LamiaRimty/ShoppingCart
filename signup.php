<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	 	<title>Rimty Store</title>
		<link rel="stylesheet"  href="css/bootstrap.min.css">    
	 	<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Rimty Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-model-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer Signup Form</div>
					<div class="panel-body">
					<form action="" method="post">
						<div class="row">
								<div class="col-md-6">
									<label for="fname">First Name</label>
									<input type="text" name="fname" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" name="lname" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="password">Re-enter Password</label>
									<input type="password" name="repassword" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="fname">Mobile</label>
									<input type="text" name="phon" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="address">Address</label>
									<input type="text" name="address" class="form-control">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<input style="float: right;" type="button" name="submit" id="submit" class="btn btn-success btn-lg" value="Sign Up">
								</div>
							</div>
					</form>
					</div>
					<div class="panel-footer">
						
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>