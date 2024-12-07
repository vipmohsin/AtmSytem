<?php
include("conf.php");

if(isset($_POST['btn'])){
$accnum=$_POST['accnum'];
$pass=md5($_POST['pass']);


$query="select * from atmsys where accnum='$accnum' and password='$pass'";
$dis=mysqli_query($con,$query)or die(mysqli_error($con));
$count=mysqli_num_rows($dis);
if($count>0){
   $row=mysqli_fetch_array($dis);
  
   $_SESSION['uid']=$row['id'];
   $_SESSION['uname']=$row['username'];
   $_SESSION['accnum']=$row['accnum'];
   $_SESSION['email']=$row['email'];
   $_SESSION['balance']=$row['balance'];
     
   echo"<script>alert(' Welcome user')
   document.location='Home.php'
   </script>";


}
else{

  echo"<script>alert(' Invalid User')</script>";
}


}




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.1/mdb.min.css"
  rel="stylesheet"
/>



</head>
<body>
<section class="vh-100 bg-image"
  style="background-image:; background-color:#1900ff; ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">LogIn To Your account</h2>

              <form method="post">


                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="number" id="form3Example3cg" class="form-control form-control-lg" name="accnum" required/>
                  <label class="form-label" for="form3Example3cg">Your Account Number</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg"  name="pass" required/>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>



               

                <div class="d-flex justify-content-center">
                  <input  type="submit" value="Login" name="btn" class=" bg-dark " style="width:500px; padding:7px; border-radius:20px; color:white;"
                    data-mdb-ripple-init />
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't  Have an account? <a href="signup.php"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.1/mdb.umd.min.js"
></script>
</body>
</html>