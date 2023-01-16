<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/css/btn.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>

    .xyz{
        border-radius: 5%;
        padding-top:20px;
        padding-bottom:5px;
        box-shadow:2px 1px 2px black;
         background-image: url("https://media.istockphoto.com/vectors/abstract-creative-background-vector-id1219872152?k=20&m=1219872152&s=612x612&w=0&h=w-nyobYAq-iUL7-ZxBWGdwEiuv8a6UWph5rOmS9f8YY=");
         background-repeat: no-repeat;
         background-size: 100%;
         background-color:black;
      }
     
        body{
        background-image: url("https://images.unsplash.com/photo-1540747913346-19e32dc3e97e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y3JpY2tldHxlbnwwfHwwfHw%3D&w=1000&q=80");
         background-repeat: no-repeat;
         background-size: 100%;
         height: auto;
         background-color: rgb(18, 18, 86);

      }
 

</style>
    <title>Log In</title>
  </head>
  <body >
    
   <div class="container-fluid pb-5">
    <div class="row justify-content-center mt-3">
      <div class="col-lg-4 col-md-6 col-sm-12 xyz">
    
      <form action="insertregi.php" method="post" data-aos="zoom-in-down">
          <div class="w-75 m-auto">
      <div class="mb-3">    
      <h3 style="display: flex;align-items: center;justify-content: center; color:white;">Sign Up</h3>  
  </div>
  <div class="mb-3">
      <span class="text-light">Name:</span>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="name">
    
  </div>

  

  <div class="mb-3">
  <span class="text-light">Email:</span>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    
  </div>

  <div class="mb-3">
  <span class="text-light">Phone:</span>
    <input type="phone" class="form-control" name="mobile">
  </div>

  <div class="mb-3">
  <span class="text-light">Password:</span>
    <input type="password" class="form-control" name="passworld">
  </div>

  <div class="mb-3">
  <span class="text-light">Confirm Password: </span>
    <input type="password" class="form-control" name="cpassworld">
  </div>
  
  
  <button type="submit" class=" btn btn-primary col-12" name="btn2">Submit</button>
  <p class="text-center  text-white">Have an accont<a href="login.php">Log In</a></p>

  </div>
</form>
      </div>
    </div>
   </div>

   
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
     <!-- for trasatio -->
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init( {
          offset: 400,
          duration: 1000,
        }
         );
      </script>
  </body>
</html>