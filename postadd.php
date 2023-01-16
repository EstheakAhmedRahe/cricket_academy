<?php
include 'config2.php';

$pname=$_POST['pname'];
$ptitle=$_POST['ptitle'];
$contact=$_POST['contact'];
$usedinfo=$_POST['usedinfo'];
$details=$_POST['details'];
$picture=$_FILES['picture'];
$prize=$_POST['prize'];
$email=$_SESSION['email'];
$img_loaction=$_FILES['picture']['tmp_name'];
$img_name=$_FILES['picture']['name'];
$img_des="loadimage/.$img_name";
move_uploaded_file($img_loaction,$img_des);

   
   
   $sql="INSERT INTO `product`(`pname`, `ptitle`, `contact`, `usedinfo`, `details`, `picture`, `prize`,`email`) VALUES ('$pname','$ptitle','$contact','$usedinfo','$details','$img_des','$prize','$email')";
   
   if( !mysqli_query($conn, $sql)){
  die ("Registration Not Completed!");
 }else{
    
  echo"<script>alert('Post Completed')</script>";
  echo"<script>alert('Customer will be contact with you as soon. ThankYOU')</script>";
   
  echo"<script>location.href='shopping.php'</script>";
    
  
 }



?>