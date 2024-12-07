<?php
 include("header.php");
?>

 
  <?php  
    $uid=$_SESSION['uid'];
    $query="select * from atmsys where id='$uid'";
    $res=mysqli_query($con,$query)or die(mysqli_error($con));
    $row=mysqli_fetch_array($res);

  ?>


 

<p class="fs-2 my-3 py-3 mt-5 pt-5">
    Welcome To Our Website <b><?php if(isset($_SESSION['uname'])){
        echo $_SESSION['uname'];
    }else{
        header("location:login.php");
    } ?></b></p>


    <p class="fs-3  py-2 ">
    Your Balance is Rs: 
    <b><?php echo $row['balance'];?>pkr</b>
    </p> 
    

    <a href="widraw.php?uid=<?php echo $_SESSION['uid'];?>" class="btn btn-primary mt-2">Widarw</a>
    <a href="#" class="btn btn-primary mt-2">Send Money</a><br>
    <a href="logout.php" class="btn btn-primary mt-2">logout</a>
    
      
</body>
</html>