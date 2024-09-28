<?php
   $con = mysqli_connect('localhost','root');
   if($con) {
   	echo "connection successful";
   }
   else {
   	echo "connection failed";
   }
   mysqli_select_db($con, 'online_book_store_db');

   $nam = $_POST['name'];
   $ema = $_POST['email'];
   $mes = $_POST['message'];

   $query = "INSERT INTO users (name, email, message) VALUES ('$nam', '$ema', '$mes')";
   mysqli_query($con, $query);
   header('location:index.php#contact');

?>