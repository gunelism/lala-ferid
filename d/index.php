<!DOCTYPE html>
<html>
<head>
	<title></title>


	<link rel="stylesheet" type="text/css" href="bootstrap.css">


	<style type="text/css">
		body{
			background-color : #EDEFF0;
			color: #7F8FA4;
		}
		.col-md-4{
			padding: 20px 50px;
			background-color: white;
		}
		img{
			border: 1px solid lightgrey;
		}

	</style>
</head>
<body>
<?php
// session_start();
// if (isset($_SESSION['giris'])) {
    // header('Location:admin.php');
// }

?>
<section class="container">
	<div class="row text-center">
		<div class="col-md-4 col-md-offset-4">
		<img class="img-circle" src="../images/1.png">
			 <h3 class="title">Admin Login</h3>
			 <p>Sign in to your account</p>
			 <br>
			 <br>

              <form action="check.php"  method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Email Adress">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                        <button type='submit' class="btn btn-success" name="submitcontact">Log in</button>
                        <br>
                        <br>
                </form>
		</div>
	</div>
</section>
<?php 
session_start();
// if (isset($_SESSION['msj'])) {
//    echo $_SESSION['msj'];
// }
 ?>
</body>
</html>
