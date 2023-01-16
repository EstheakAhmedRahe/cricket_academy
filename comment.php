

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <link rel="stylesheet" href="shopping.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <style>
    body{
      background-image: url("  https://img.freepik.com/free-vector/smooth-white-wave-background_52683-55288.jpg?w=2000");
     background-size: 100%;
     height: auto;
     }
     .xyz:hover{
      border: 1px solid white;
      box-shadow: 2px 2px 2px gray;
     }
    </style>
  </head>
<body>


<section class="container">

<!-- php start -->
<?php
session_start();
echo"<h5> Hello, Welcome " ;
echo $_SESSION['email'];
echo "</h5>";
if(isset($_SESSION['email'])){
 
}else{   
  echo"<script>location.href='login.php'</script>";
}
?>

<div>
  
<form action="" method="post" class='ml-5 mt-4'>
  <h3>If You face any problem, Comments Here: </h3><br>
<textarea name="Comment" placeholder="Enter your valueable comments" class="w-50 " style="height:80px"></textarea> <br>
<div style="margin-left:200px ; margin-top:10px"><button type="submit" name="Submit" class="btn btn-primary btn-lg w-25">Submit</button>
 </form>    
    </div>



</section>

</body>

</html>

<?php
if(isset($_POST["Submit"])){
  $email=$_SESSION["email"];
  $Comment = $_POST["Comment"];

  //old comment
  $Old= fopen("comments.txt","r+t");
  $Old_Comments = fread($Old,1024);

  //Add new comment
  $Write = fopen("comments.txt","w+");

  $String=
     "<div class='comment'><span>".$email."</span> <br/>
     <span>".date("d/m/y")." | ".date("h:i A")."</span><br />
     <span>".$Comment."</span></div>\n".$Old_Comments;

     fwrite($Write,$String);
     fclose($Write);
     fclose($Old);
}
//display all comment
$Read= fopen("comments.txt","r+t");
echo"<h1>Comments: </h1><hr>".fread($Read, 1024);
?>



