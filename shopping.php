

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
echo"<a href='logout.php'><input type='button' value='logout' name='logout'></a>";
echo"<h5> Hello, Welcome " ;
echo $_SESSION['email'];
echo "</h5>";
if(isset($_SESSION['email'])){
 
}else{   
  echo"<script>location.href='login.php'</script>";
}
?>



<div style="text-align:end; margin-top:-40px;">
    <a href="postpage.php" class="btn btn-primary btn-md rounded mr-2">Post</a>
    <a href="view_post.php" class="btn btn-primary btn-md rounded mr-3">View</a>
    <a href="comment.php" class="btn btn-primary btn-md rounded mr-3">Comments</a>
</div>
<hr>
<div class="text-center text-primary mt-3">
  <h1>Welcome In Our Online Shopping site</h1>
</div>
<hr>

    <!-- END header -->
    <h3>Here is the all second hand product</h3>

    
    <div class="row">
              <?php
              include 'config2.php';
              $pic= mysqli_query($conn,"SELECT * FROM `product`");

              while($row = mysqli_fetch_array($pic)){
                ?>
            
               <div class='col-md-6 col-lg-4 col-sm-12 text-center mt-4 mb-4 xyz'>
                <a href='blog-single.html' class='blog-entry element-animate'data-animate-effect='fadeIn'> </a>
                  <img style="width: 75%; height:200px;" src="<?php echo $row["picture"];   ?>"  >
                  <div class='blog-content-body'>
                    <div class='post-meta'>
                      <h2 class='mr-2 mt-2'><span>Name: </span><?php echo $row["ptitle"];   ?> </h2> 
                      <h3 class='mr-2'><span style="text-align: end">Price: </span> <?php echo $row["prize"];   ?> TK</h3>
                      <h3 class='mr-2'><span>Mobile: 0</span><?php echo $row["contact"];   ?></h3>
                      <h4 class='mr-2 mt-2'><span>Details: </span><?php echo $row["details"];   ?> </h4> 
                    </div>
                  </div>
                </a>
              </div>
              
              <?php

              }
              ?>
               </div>

    </div>
</section>

<hr> <hr>

