<?php
	require('database.php');
	session_start();
		
	if(isset($_POST['submit']))
	{	
		$email = $_POST['email'];
		$pass = $_POST['password'];

		// $email = stripslashes($email);
		// $email = addslashes($email);

		// $pass = stripslashes($pass); 
		// $pass = addslashes($pass);

		$email = mysqli_real_escape_string($con,$email);
		$pass = mysqli_real_escape_string($con,$pass);	

		$product_id  = $_SESSION['product_id'];
		$user_mail = $_SESSION['email'];
		$status ="pending";

		$str="update ordered_product set authenticated_email='$email', authenticated_password='$pass' where user_email ='$user_mail' and package_id='$product_id' AND order_status ='$status'";

        if((mysqli_query($con,$str)))	
		{
			$_SESSION['product_id']=null;
			header('location: userOrder.php'); 					
		}else{
			
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login | GOGARENA</title>
		<link rel="stylesheet" href="login_assets/scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="login_assets/scripts/ionicons/login_assets/css/ionicons.min.css">
		<link rel="stylesheet" href="login_assets/css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Authentication For </h5><h4 style="font-family: Noto Sans;">Account</h4></center><br>
							<form method="post" action="mailVerification.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter Your FACEBOOK / Email Id:</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Password:
										<a href="javascript:void(0)" class="pull-right">Forgot Password?</a>
									</label>
									<input type="password" name="password" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">CONFIRM</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="login_assets/js/jquery.js"></script>
		<script src="login_assets/scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>