<?php

  include('lib/conn.php');
  # !-Link up to db

  if (isset($_POST['submit'])){

  //declare query variabes
    $staff_name=mysqli_real_escape_string($conn, $_POST['staff_name']);
    $service_rendered=mysqli_real_escape_string($conn, $_POST['service_rendered']);
    $amount=mysqli_real_escape_string($conn, $_POST['amount']);

    $sql="INSERT INTO salescomm(`staff_name`,`service_rendered`,`amount`,`add_date`)
    VALUES('$staff_name','$service_rendered','$amount',now())";

    //save to db and check
  if(mysqli_query($conn, $sql)){
   //succes
   echo "<script>window.open('index.php','_self');</script>";
  }else{
   echo 'Query error:' .mysqli_error($conn);
  }

};


?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.html" class="logo">Shop</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> </a>
          </li>
          <li>
              <a href="index.php"><span class="fa fa-user mr-3"></span> Add Sales</a>
          </li>
          <li>
            <a href=""><span class=""></span> </a>
          </li>
          <li>
            <a href="staffs.php"><span class="fa fa-sticky-note mr-3"></span> Sales&Commission</a>
          </li>
          <li>
            <a href=""><span class=""></span> </a>
          </li>
          <li>
            <a href="customer.php"><span class="fa fa-paper-plane mr-3"></span> Customer Info</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container-contact100">
          <div class="wrap-contact100">
			   <form  action="" method="post" class="contact100-form validate-form">
  				<span class="contact100-form-title">
  					Add Sales To Record
  				</span>

				<label class="label-input100" for="first-name">Staff Name</label>
        <div class="wrap-input100">
					<select class="wrap-input100 dropdown" name="staff_name" style="height:40px;">
            <option value="">Select Staff</option>
            <option value="PapiTunde">Papi Tunde</option>
            <option value="JamesDavid">James David</option>
            <option value="TerryG">Terry G</option>
            <option value="Ay">AY.com</option>
            <option value="TemiObinna">Temi Obinna</option>
          </select>
				</div>

				<label class="label-input100" for="service_rendered">Service Rendered</label>
				<div class="wrap-input100 validate-input">
					<select class="wrap-input100 dropdown" name="service_rendered" style="height:40px;">
            <option value="Hair cut">Hair Cut</option>
            <option value="Hair Cut Dye">Hair Cut & Dye</option>
            <option value="Children Cut">Children Cut</option>
            <option value="Female">Female Cut</option>
            <option value="Dreadlock">DreadLock</option>
            <option value="Hair Treatment">Hair Treatment</option>
          </select>
				</div>

				<label class="label-input100" for="amount">Amount(#)</label>
				<div class="wrap-input100">
					<input id="amount" class="input100" type="text" name="amount" placeholder="Just the amount, don't add (#)">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						submit
					</button>
				</div>
			</form>

       <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-03.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Account Details
						</span>

						<span class="txt2">
							0000-0000-000
              GTBank
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Call this line if any issue
						</span>

						<span class="txt3">
							+234 7030643062
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Another Remainder
						</span>

						<span class="txt3">
							customers are always right
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

		</div>

    <script src="js/jquery.min.js"></script>
    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>


  </body>
</html>
