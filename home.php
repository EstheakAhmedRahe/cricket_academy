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
      body{
      background-image: url("  https://img.freepik.com/free-vector/smooth-white-wave-background_52683-55288.jpg?w=2000");
     background-size: 100%;
     height: auto;
     }
     .card1:hover{
      background-color: rgba(184, 219, 226,0.4);
     }
    </style>

</head>
<body>
  <!-- d-flex flex-row-reverse -->
  <div class="container" id="home">
    <header>
      <!--Nav part start-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light row">

        <img class="navbar-brand img1 " src="logo.webp" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
          <div class="form-inline my-2 my-lg-0 col-lg-5">
            <h3 class="m-sm-auto m-md-auto m-lg-1">Sylhet Cricket Academy</h3>
          </div>
        
    <div style="text-align: center; font-size: 18px;" class="col-lg-7 d-lg-flex flex-row-reverse">
          <ul class="navbar-nav pr-lg-2" style="text-align:center ;">
            <li class="nav-item ">
              <a class="nav-link text-info" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="login.php">Shoping</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#contact">Contact</a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Academy
              </a>
              <div class="dropdown-menu  text-center" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100068991086004">BCA</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://www.facebook.com/greensca">GCA</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://www.facebook.com/csca2008">CSCA</a>
               
              </div>
            </li>

            <div style="text-align:center;" class="pl-lg-2 m-1" >
              <a href="login.php"><button type="button" class="btn btn-outline-info">Login</button></a>
            </div>
            </ul>    
           </div>         
         </div>
     
      </nav>
      <!--nav end -->
       
      <!-- slide url img start-->
      <!--Carouse more pic in one box start-->
      <section data-aos="fade-left">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner pb-5">
    <div class="carousel-item text-center active">
      <img src="./picture/img1.jpeg" class="im5" alt="...">
    </div>
    <div class="carousel-item text-center">
      <img src="./picture/img2.jpeg" class="im5" alt="...">
    </div>
    <div class="carousel-item text-center">
      <img src="./picture/img3.jpeg" class="im5" alt="...">
    </div>
    <div class="carousel-item text-center">
      <img src="./picture/img4.jpeg" class="im5" alt="...">
    </div>
    <div class="carousel-item text-center">
      <img src="./picture/img6.jpeg" class="im5" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </section>  <!-- slide url img end-->      
</header>
<hr>
  <main>
    <!-- academy card start -->
    <section  >
         <div class="profile-area">
          <div class="row" data-aos="fade-right">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-5" data-aos="fade-left">
              <div class="card h-100 card1">
               <div class="img2"> <img src="./picture/bca_back.jpeg" alt=""></div>
               <div class="img3"> <img src="./picture/bca_logo.jpeg" alt=""></div>
               <div class="main-text">
                 <h2>Basic Cricket Academy</h2>
              <p>It is the well Known cricket Academy in Sylhet . More than 100 cricketers can practice at a time . Huge amount of equipment available in this Academy.</p>
             </div>
               <div class="text-center pb-3">
                <a href="bca_home.php"><button type="button" class="btn btn-outline-info">Visit here</button></a>
               </div>
              </div>
           </div>

           <div class="col-lg-4 col-md-4 col-sm-12 mb-5 " data-aos="fade-right">
            <div class="card h-100 card1">
             <div class="img2"> <img src="./picture/gca_back.jpeg" alt=""></div>
             <div class="img3"> <img src="./picture/gca_logo.jpeg" alt=""></div>
             <div class="main-text">
               <h2>Green Cricket Academy</h2>
              <p><p>It is the well Known cricket Academy in Sylhet . More than 600 cricketers can practice at a time . Huge amount of equipment available in this Academy.</p></p>     </div>
             <div class="text-center pb-3">
              <a href="gca_home.php"><button type="button" class="btn btn-outline-info">Visit Here</button></a>
             </div>
            </div>
         </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-5" data-aos="fade-left">
               <div class="card h-100 card1">
                <div class="img2"> <img src="./picture/csca_back.jpeg" alt=""></div>
                <div class="img3"> <img src="./picture/csca_logo.jpeg" alt=""></div>
                <div class="main-text">
                  <h2>Clemon Cricket Academy</h2>
                <p>It is the well Known cricket Academy in Sylhet . More than 200 cricketers can practice at a time . Huge amount of equipment available in this Academy.</p>
                </div>
                <div class="text-center pb-3" id="about">
                  <a href="csca_home.php"><button type="button" class="btn btn-outline-info">Visit here</button></a>
                 </div>
               </div>
            </div>

           </div>
         </div>
    </section>
     <!-- academy card end -->
<hr>

     <!-- about us start -->
     <section >
           <h3 class="text-center" data-aos="fade-left">ABOUT US</h3>
           <div class="row" data-aos="fade-left">
           <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="text-center ">
               <img src="logo.webp" alt="logo" id="img4" >
            </div>
           </div>
           <div class="col-lg-8 col-md-8 col-sm-12 mt-lg-4">
          <span>Hi This is the team of sylhet Cricket Academy . We here to manage new cricketer's admission and sale cricket equipment for them. From this web you can apply Three well Known cricket Academy . Your admission will notify your selected Cricket Academy. On the other hand if you think you can visit shopping section to find Cricket Equipment for your journey. You can also sale your 2nd hand equipment in this website. We are helping you to select a best cricket academy for you. <br>Thankyou for Visit Our Website, hope it will be helpfull for you.</span>
          </div>
          </div>
     </section>
      <!-- about us end -->
     <hr>

     <!-- contact start -->
     <section id="contact">
             <h3 class="text-center m-5">Meet Our Team Members</h3>
             <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 pb-4 " data-aos="fade-left">
                  <div class="shadow d-flex justify-conent-center p-4 h-100 bg-dark rounded-lg align-items-center flex-column">
                      <div class="person-img">
                        <img src="./picture/rahe.jpeg" alt="img" class="img-fluid rounded-circle" >
                      </div>
                      <div class="person-name pt-4 pb-2">
                        <h3 class="text-white">Estheak Ahmed</h3>
                      </div>
                      <div class="info p-1">
                        <h5 class="text-white">Design & developer</h5>
                      </div>
                      <div class="social-icons ">
                        <a href="#" class="text-white"><i class="fa-brands fa-facebook p-2"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-instagram p-2"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-telegram p-2"></i></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-github"></i></i></a>
                      </div>
                      
                      <button type="button" class="btn btn-secondary btn-lg btn-block mb-2">View Profile</button>
  
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 pb-4" data-aos="fade-down">
                  <div class="shadow d-flex justify-conent-center p-4 h-100 bg-dark rounded-lg align-items-center flex-column">
                      <div class="person-img">
                        <img src="./picture/shahjan.jpeg" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="person-name pt-4 pb-2">
                        <h3 class="text-white">MD. Shahjahan</h3>
                      </div>
                      <div class="info p-1">
                        <h5 class="text-white">Web designer</h5>
                      </div>
                      <div class="social-icons ">
                        <a href="#" class="text-white"><i class="fa-brands fa-facebook p-2"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-instagram p-2"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-telegram p-2"></i></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-github"></i></i></a>
                      </div>
                      
                      <button type="button" class="btn btn-secondary btn-lg btn-block mb-2">View Profile</button>
  
                    </div>
                </div>
                 
                   <div class="col-sm-12 col-md-4 col-lg-4 pb-4"data-aos="fade-right">
                  <div class="shadow d-flex justify-conent-center p-4 h-100  bg-dark rounded-lg align-items-center flex-column">
                      <div class="person-img">
                        <img src="./picture/shakib.jpeg" alt="img" class="img-fluid rounded-circle">
                      </div>
                      <div class="person-name pt-4 pb-2">
                        <h3 class="text-white">Shakib Hassan</h3>
                      </div>
                      <div class="info p-1">
                        <h5 class="text-white">Web developer</h5>
                      </div>
                      <div class="social-icons ">
                        <a href="#" class="text-white"><i class="fa-brands fa-facebook p-2"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-instagram p-2"></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-telegram p-2"></i></i></a>
                        <a href="#" class="text-white"><i class="fa-brands fa-github"></i></i></a>
                      </div>
                      
                      <button type="button" class="btn btn-secondary btn-lg btn-block mb-2">View Profile</button>
  
                    </div>
                </div>

                
             </div>
     </section>
     <!-- contact end -->
  </main>
  <hr>
  <br>
  <footer>
    <div class="row">
      <div class="col-lg-6 col-sm-12 col-md-12 text-white m-auto">
     <form class="cmt" method="POST" action="send.php">     
      <div class="form-group">
           <label for="email">Email :</label>
           <input type="email" class="form-control" name="email" id="email" value="" required>
         </div>

         <div class="form-group">
          <label for="subject">Subject :</label>
          <input type="text" class="form-control" id="subject" name="subject" value=""  required>
        </div>

        <div class="form-group">
          <label for="comment">Comment :</label>
         <textarea name="comment" id="comment" cols="30" rows="3"  type="text" class="form-control" value=""  required></textarea>
        </div>

        <div style="text-align:center;" class="pl-lg-2 m-1 btn-md pb-3" >
          <button type="submit" name="send" class="btn btn-outline-info m-2 submite ">Submit</button>
          <a href="#home"><button type="button" class="btn btn-outline-info m-2 cancel">cancel</button></a>
        </div>

        </form>
      </div>

      <div class="col-lg-3 col-sm-12 col-md-6 text-white pt-5 pb-5 ok">
              <h3 class="text-center pl-4">Quick Links</h3>
              <div class="pl-3">
             <a href="home.php" ><h5 class="text-white pt-3 pl-5">Home Page</h5></a> 
             <a href="login.php" ><h5 class="text-white pt-1  pl-5">Login Page</h5></a> 
             <a href="signin.php" ><h5 class="text-white pt-1  pl-5">SignUp page</h5></a> 
             <a href="login.php" ><h5 class="text-white pt-1  pl-5">Shoping page</h5></a> 
             <a href="#about" ><h5 class="text-white pt-1  pl-5">About Us page</h5></a> 
             <a href="#contact" ><h5 class="text-white pt-1  pl-5">Contact page</h5></a> 
            </div>
        </div>
  
        <div class="col-lg-3 col-sm-12 col-md-6 pt-5 pb-5 ok">
          <h3 class="text-center text-white">Academic links</h3>
          <a href="bca_home.php" ><h5 class="pt-3 pl-5 text-white">BCA Page</h5></a>
          <a href="gca_home.php" ><h5 class="text-white pt-1  pl-5 ">GCA Page</h5></a> 
          <a href="csca_home.php" ><h5 class="text-white pt-1  pl-5">CSCA page</h5></a> 
          <a href="bca_registration.php" ><h5 class="text-white pt-1  pl-5">Registration </h5></a> 
          <a href="#achivement" ><h5 class="text-white pt-1  pl-5">Achivement page</h5></a> 
          <a href="#contact" ><h5 class="text-white pt-1  pl-5">Contact page</h5></a> 
         <div class="text-center pt-4"> 
          <a href="https://www.google.com/"><button type="button" class="btn btn-outline-info leave">Leave</button></a>
        </div>    
      </div>
        </div>
        <section class="row text-white p-3 bg-dark m-auto ">
          <h5 class="col-lg-8 col-sm-12 col-md-8 ">Copyright: Sylhet Cricket Academy ltd 2022</h5>
          <h5 class="col-lg-4 col-sm-12 col-md-4 d-flex flex-row-reverse">Created By Team Osthir</h5>
        </section>
    </footer>
  
  <hr>
    </div>

  


    <!-- for slide picture -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
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