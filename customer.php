<?php

include('lib/conn.php');
# !-Link up to db

if (isset($_POST['add_customer'])){

//declare query variabes
  $email=mysqli_real_escape_string($conn, $_POST['email']);
  $phone_number=mysqli_real_escape_string($conn, $_POST['phone_number']);
  $customer_name=mysqli_real_escape_string($conn, $_POST['customer_name']);
  $address=mysqli_real_escape_string($conn, $_POST['address']);

  $sql="INSERT INTO customer(`email`,`phone_number`,`customer_name`,`address`)
  VALUES('$email','$phone_number','$customer_name','$address')";

  //save to db and check
if(mysqli_query($conn, $sql)){
 //succes
 echo "<script>window.open('index.php','_self');</script>";
 //free result from memory
 mysqli_free_result($result);
}else{
 echo 'Query error:' .mysqli_error($conn);
}

  //close connection
  mysqli_close($conn);

}
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
             <a href="#"><span class="fa fa-paper-plane mr-3"></span> Customer Info</a>
           </li>
         </ul>

     	</nav>

         <!-- Page Content  -->
       <div id="content" class="p-4 p-md-5 pt-5">
         <div class="container">
           <div class="col-md-6">
             <form action="" method="POST">
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="inputEmail4">Email</label>
                   <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="name">Phone Number</label>
                   <input name="phone_number" type="number" class="form-control" id="customerName" placeholder="Customer Number">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputAddress">Name</label>
                 <input name="customer_name" type="text" class="form-control" id="inputAddress" placeholder="Name of customer">
               </div>
               <div class="form-group">
                 <label for="inputAddress2">Address </label>
                 <input name="address" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
               </div>

               <button name="add_customer" type="submit" class="btn btn-primary">Add Customer Info</button>
             </form>

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
