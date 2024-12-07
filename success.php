<?php
 include("header.php");
?>


<?php  
    $uid=$_SESSION['uid'];
    $query="select * from atmsys where id='$uid'";
    $res=mysqli_query($con,$query)or die(mysqli_error($con));
    $row=mysqli_fetch_array($res);

  ?>



<p class="fs-1 my-3 py-3 mt-5 pt-5">
    <b> Widraw Successful</b></p>



    <p class="fs-3  py-2 "> 
    You Have Widrawn : <b><?php if(isset($_SESSION['amount'])){
        echo $_SESSION['amount'];
    }else{
        header("location:login.php");
    } ?>pkr</b><br> From Your Account :
 <br>   
    <b><?php if(isset($_SESSION['accnum'])){
        echo $_SESSION['accnum'];
    }else{
        header("location:login.php");
    } ?>
    </b>
    </p>
      <p class="fs-3  py-2 ">
    Your Remaining Balance is  Rs: 
    <b><?php echo $row['balance'];?>pkr</b>
    </p>


    <a href="widraw.php?uid=<?php echo $_SESSION['uid'];?>" class="btn btn-primary mt-2">Widarw</a>
    <a href="Home.php" class="btn btn-primary mt-2">Home</a><br>
    <a href="logout.php" class="btn btn-primary mt-2">logout</a>
    
      
