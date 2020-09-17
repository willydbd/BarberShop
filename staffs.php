<?php

include('lib/conn.php');


// write query for all staffs
$sql= "SELECT * from `staffs`";

#make query and get mysqli_more_result
$result=mysqli_query($conn, $sql);

#fetch the resulting rows as an array
$staffs =mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result from memory
  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);
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

         <div class="container">
           <div class="row">

                  <table class="table table-responsive table-striped">
									<tr>
										<th style="border-top:none">S/N</th>
										<th style="border-top:none">Name</th>
                    <th style="border-top:none">View Sales</th>

									</tr>
                  <?php foreach ($staffs as $staff) { ?>

                  <tr>
                	<td><?php echo htmlspecialchars($staff['id']); ?></td>
                	<td><?php echo htmlspecialchars($staff['staff_name']); ?></td>
                  <td> <a href="commission.php?staff=<?php echo $staff['staff_name'] ?>">Sales</a></td>
                	</tr>

             <?php } ?>

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
