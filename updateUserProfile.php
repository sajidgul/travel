<?php
session_start();
error_reporting(0);
if(isset($_SESSION['login'])==true){
}else{
	header("location:includes/signin.php");
}
include('processor/get_processor.php');
$resp="";
if(isset($_POST['update'])){
	$resp=$obj->updateUser();
}
$userid=$_GET['userid'];
$get_user=$obj->get_user_record($userid);
$user_profile=$obj->show_user_profile();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS  | Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- Custom Theme files -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- image magnifier start -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- image magnifier end -->
<!--animate-->
<!-- hello i am commits -->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<style type="text/css">
	
</style>
</head>
<body>
<?php include('includes/header.php');?>



<!--- banner ---->
<div class="banner-3">

	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn; text-transform: uppercase; color: #4DB321;">Update Profile</h1>

	</div>

</div>

<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		<div class="row">
			
	<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Update Profile</h3>
		<form id="updateUser" method="post" action="updateUserProfile.php?userid=<?php echo $get_user->id; ?>">
			<p class="text-info"><?php echo $resp; ?></p>
			<p style="width: 350px;">
			<b>Title</b>  <input type="text" id="title" name="title" class="form-control" value="<?php echo $get_user->title; ?>" placeholder="Title" required="required">
			</p>

			<p style="width: 350px;">
			<b>Change Image</b>
			<input type="file" class="form-control" name="picture" required="required">
			</p>

			<div>
				<img id="photos" src="images/<?php echo $get_user->photos; ?>" width="200">
			</div>

			<p style="width: 350px;">
      <input type="hidden" name="userid" value="<?php echo $userid; ?>">
			<input type="submit" name="update" value="update" class="btn-primary btn">
			</p>
			</form>
			<a href="myprofile.php" class="fa-solid fa-arrow-left" style="text-decoration:none">  Back to User Profile</a>
</div>
</div>
</div>
</div>		
</div>

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>