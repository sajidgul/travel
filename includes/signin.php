<?php
// session_name("profile");
// session_start();

// if ( isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true ){
//        header("location:myprofile.php");
// }
include("includes/config.php");
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$name=$_POST['fname'];
$password=md5($_POST['password']);
$sql ="SELECT FullName, EmailId, Password FROM tblusers WHERE EmailId=:email";
$query= $dbh -> prepare($sql);
// $query-> bindParam(':fname', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
// $query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
// $_SESSION['fullname']=$results->FullName;
$_SESSION['login']=$_POST['email'];

echo "<script type='text/javascript'> document.location = 'myprofile.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
										
									<div class="login-right">
										<form method="post">
											<h3>Signin with your account </h3>
	<input type="text" name="email" id="email" placeholder="Enter your Email"  required="">	
	<input type="password" name="password" id="password" placeholder="Password" value="" required="">	
											<h4><a href="forgot-password.php">Forgot password</a></h4>
											<!-- <h4><a href="" data-toggle="modal" data-target="#myModal">Don't have an account?singup</a></h4> -->
											
											<input type="submit" name="signin" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>							
								</div>
								<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>