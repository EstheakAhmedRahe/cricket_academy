
<?php
include 'config2.php';


$email=$_POST['l_email'];
$passworld=$_POST['l_passworld'];

$result = mysqli_query($conn,"SELECT * FROM `login` WHERE  email='$email' And password='$passworld'");

if(mysqli_num_rows($result)){
    session_start();
    $_SESSION['email']=$email;
    echo"<script>location.href='shopping.php'</script>";
}else{
    
  echo"<script>alert('Email or passworld invalid!!')</script>";
  
  echo"<script>location.href='login.php'</script>";
}
?>