<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">`
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
      .icon1{
        font-size:30px;
      }
 

</style>
    <title>Registration</title>
  </head>
  <body >
    
   <div class="container-fluid pb-5">
    <div class="row justify-content-center mt-3">
      <div class="col-lg-6 col-md-6 col-sm-12 xyz">
      <a href="home.php"><i class="fa-solid fa-right-from-bracket icon1"></i></a>
      <form action="bca_insert.php" method="post"data-aos="zoom-in-down">
        <div class="w-75 m-auto">
        <div class="mb-4">    
      <h3 style="display: flex;align-items: center;justify-content: center; color:white;">BCA Student Registration</h3>  
  </div>
  <div class="mb-3">
      <span class="text-light">Full Name:</span>
    <input type="text" class="form-control" id="fullname" placeholder="Enter your name"  name="fullname">
    
  </div>

  

  <div class="mb-3">
  <span class="text-light">Email:</span>
    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    
  </div>

  <div class="mb-3">
  <span class="text-light">Mobile Number:</span>
    <input type="number" class="form-control" placeholder="Enter your mobile" name="mobile">
  </div>

  <div class="mb-3">
  <span class="text-light">NID (optional):</span>
    <input type="number" class="form-control" placeholder="Enter your nid number" name="nid">
  </div>

  <div class="mb-3">
  <span class="text-light">Date of Birth: </span>
    <input type="date" class="form-control" name="birth">
  </div>

  <div class="mb-3">
  <span class="text-light"> experiance:</span>
    <input type="text" class="form-control" placeholder="Enter your experiance" name=" experiance">
  </div>

  <div class="mb-3">
  <span class="text-light">Address: </span>
    <input type="text" class="form-control" placeholder="Enter your address" name="address">
  </div>
  
  
            <div class="mb-3 text-center pt-3 pb-3">
                <button class="btn btn-outline-info mr-2" style="width: 200px;" type="submit"> submite </button>
              </div>

      </form>
         </div>  
         </header>
      
    </div>

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