<?php
include('config2.php');
session_start();
echo $_SESSION['email'];
if (!isset($_SESSION['email'])) {
	header("location:login.php");
	die();
}
$user = $_SESSION['email'];
$query = mysqli_query($conn,"select * from login where email = '$user'");
$rowr =mysqli_fetch_array($query);
$id = $rowr['email'];
$query1 = mysqli_query($conn,"select * from product where email = '$id'");
$result = mysqli_num_rows($query1);
?>


 	<?php 
    for($i=1; $i<=$result;$i++)
  {
     $row =  mysqli_fetch_array($query1)
 	?>


<div class="row">
<div class='col-md-6 col-lg-6 col-sm-12'>
                <a href='blog-single.html' class='blog-entry element-animate'data-animate-effect='fadeIn'>
                  <img style="width: 75%; height:200px;" src="<?php echo $row["picture"];   ?>"  >
                  <div class='blog-content-body'>
                    <div class='post-meta'>
                      <span class='author mr-2'>BUY SELL</span>&bullet;
                      <span class='mr-2'><?php echo $row["prize"];   ?> </span> 
                      <span class='author mr-2'><?php echo $row["pname"];   ?></span>&bullet;
                      <span class='ml-2'><span class='fa fa-comments'></span> 3</span>
                    </div>
                    <h2> <?php echo $row["ptitle"];   ?></h2>
                  </div>
                </a>
              </div>
              </div>
 <?php } ?> 
 </table>

</center>