<?php
include 'config2.php';

$userName=$_POST['name'];
$email=$_POST['email'];
$passworld=$_POST['passworld'];
$cPassworld=$_POST['cpassworld'];
$mobile=$_POST['mobile'];


$duplicate_username= mysqli_query($conn,"SELECT * FROM `login` WHERE username='$userName'");
$duplicate_mobile= mysqli_query($conn,"SELECT * FROM `login` WHERE mobile='$mobile'");
$duplicate_email= mysqli_query($conn,"SELECT * FROM `login` WHERE email='$email'");

$username_patt = "/[A-Za-z _]{3,20}/";
$mobile_patt ="/(\+88 |88)?-?01[3-9]{1}[0-9]{8}$/";
$pass_patt="/[a-zA-Z0-9]/";
$email_patt="/[a-z _]{1}[a-z 0-9 _]{3,20}@(gmail|yahoo|outlook){1}\.com/";

if(mysqli_num_rows(
  $duplicate_username)){
    echo"<script>alert('Username Already taken!!')</script>";

  }

  else if(mysqli_num_rows(
    $duplicate_mobile)){
      echo"<script>alert('Mobilee Already taken!!')</script>";
  
    }
    else if(mysqli_num_rows(
      $duplicate_email)){
        echo"<script>alert('Email Already taken!!')</script>";
    
      }
      

else if(!preg_match($username_patt,$userName)){

  echo"<script>alert('Invalid Username!!')</script>";
  
  echo"<script>location.href='regi.php'</script>";
}

else if(!preg_match($pass_patt,$passworld)){

  echo"<script>alert('Invalid Passworld!!')</script>";
  
  echo"<script>location.href='regi.php'</script>";
}


else if($passworld !== $cPassworld){

  echo"<script>alert('Pass and Confirm is not matching!!')</script>";
  
  echo"<script>location.href='regi.php'</script>";
}


else if(!preg_match($mobile_patt,$mobile)){

  echo"<script>alert('Mobile invalid!!')</script>";
  
  echo"<script>location.href='regi.php'</script>";
}

else if(!preg_match($email_patt,$email)){

  echo"<script>alert('email invalid!!')</script>";
  
  echo"<script>location.href='regi.php'</script>";
}

else{
  $inserQuery="INSERT INTO `login`( `username`, `password`, `email`, `mobile`) VALUES ('$userName','$passworld','$email','$mobile')";
 if(  !mysqli_query($conn, $inserQuery)){
  die ("Registration Not Completed!");
 }else{
    
  echo"<script>alert('Registration Completed')</script>";
    
  echo"<script>location.href='login.php'</script>";
 }
}







?>