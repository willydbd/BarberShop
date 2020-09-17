<?php
# !-setup connection to db
$srv = "localhost";
$dtb = "barbershop";
$usr = "admin";
$pwd = "admin123";

$conn = mysqli_connect($srv, $usr, $pwd, $dtb);
//check connection
if(!$conn){
echo 'Connection error:' .mysqli_connect_error();
}

?>
