<?php
// include("processor/sessionprofile.php");
session_start();
error_reporting(0);
include('includes/config.php');
// include('processor/get_processor.php');
// if(isset($_POST['submit'])){
// 	$resp=$obj->add_user_profile();
// 	if($resp == "ok"){
//     	header("location:myprofile.php");

// }
// }
// $user_profile=$obj->show_user_profile();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS  | Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>

<!--- banner ---->
<div class="banner-3">

	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TTN- My Profile <?php ?></h1>

	</div>

</div>

<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		<div class="row">
			
	<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Upload Picture</h3>
		<form method="post">
			<p style="width: 350px;">
			<b>Title</b>  <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Title" required="">
			</p>

			<p style="width: 350px;">
			<b>Picture</b>
			<input type="file" class="form-control" name="picture" id="picture" placeholder="Upload picture" required="">
			</p>

			<p style="width: 350px;">
			<input type="submit" name="submit" class="btn-primary btn">
			</p>
			</form>

		
	</div>
</div>

		</div>
		<div class="row">
		<div class="room-bottom">
			<h3>Gallery</h3>
					

			<div class="rom-btm1">
				<img src="<?php foreach ($user_profile as $key => $value) { ?>
                        <?php echo $value->picture; ?>
                    <?php } ?>" width="50%" alt="img" />
			</div>

			
		
		
		</div>
		</div>
	</div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>