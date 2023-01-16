<?php
include 'config2.php';

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$nid=$_POST['nid'];
$birth=$_POST['birth'];
$experiance=$_POST['experiance'];
$address=$_POST['address'];

$duplicate_mobile= mysqli_query($conn,"SELECT * FROM `csca_ragistration` WHERE mobile='$mobile'");
$duplicate_email= mysqli_query($conn,"SELECT * FROM `csca_ragistration` WHERE email='$email'");

$username_patt = "/[A-Za-z _]{3,20}/";
$mobile_patt ="/(\+88 |88)?-?01[3-9]{1}[0-9]{8}$/";
$email_patt="/[a-z _]{1}[a-z 0-9 _]{3,20}@(gmail|yahoo|outlook){1}\.com/";

if(mysqli_num_rows(
  $duplicate_mobile)){
    echo"<script>alert('Mobilee Already taken!!')</script>";

  }

  else if(mysqli_num_rows(
    $duplicate_mobile)){
      echo"<script>alert('Mobilee Already taken!!')</script>";
  
    }
    else if(mysqli_num_rows(
      $duplicate_email)){
        echo"<script>alert('Email Already taken!!')</script>";
    
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
   $sql="INSERT INTO `csca_ragistration`( `name`, `email`,`mobile`,`nid`, `birth`,`experience`,`address`) VALUES ('$fullname','$email','$mobile','$nid','$birth','$experiance','$address')";
   if( !mysqli_query($conn, $sql)){
  die ("Registration Not Completed!");
 }else{
    
  echo"<script>alert('Registration Completed')</script>";

  // ob_start() i find it from google error solution, i use it for including database
  ob_start();
    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',18); //16 size  B=bold C=center
    $pdf->Cell(0,20,'Registration Details',0,1,'C');  //40 width 0 hole 100% 10 height first 1 border 2nd 1 newline
    $pdf->Cell(0,5,'Clemon Shurma Cricket Academy',0,1,'C'); 
    $pdf->Cell(0,10,' ',0,1); 

    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,15,'Your Information',1,1,'C');

    $pdf->Cell(60,12,'     Your Name ',1,0); 
    $pdf->Cell(0,12,$fullname,1,1,'C');

    $pdf->Cell(60,12,'     Your Mobile ',1,0); 
    $pdf->Cell(0,12,$mobile,1,1,'C');

    $pdf->Cell(60,12,'     Your NID',1,0); 
    $pdf->Cell(0,12,$nid,1,1,'C');

    $pdf->Cell(60,12,'     Your Birth',1,0); 
    $pdf->Cell(0,12,$birth,1,1,'C');

    $pdf->Cell(60,12,'     Your Email ',1,0); 
    $pdf->Cell(0,12,$email,1,1,'C');

    $pdf->Cell(60,12,'     Your Experiance ',1,0); 
    $pdf->Cell(0,12,$experiance,1,1,'C');
    
    $pdf->Cell(60,12,'     Your Address ',1,0); 
    $pdf->Cell(0,12,$address,1,1,'C');

    $pdf->Cell(0,20,' ',0,1,'C'); 
    $pdf->Cell(0,5,'Thankyou For your responsed, Best of luck...',0,1,'C'); 


    $pdf->Output();
    ob_end_flush(); 

 }
}

?>