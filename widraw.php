<?php
include("header.php");

if(isset($_GET['uid'])){
  $uid=$_GET['uid'];

  $query="select * from atmsys where id='$uid'";
  $res=mysqli_query($con,$query)or die (mysqli_error($con));
  $row=mysqli_fetch_array($res);





if(isset($_POST['btn'])){

  $amount=$_POST['amount'];
  $balance=$row['balance'];

  if($amount>=500 && $amount<=5000){
          if($balance>=$amount){
           $nbalance= $balance-$amount;
           $query1="update atmsys set balance='$nbalance' where id='$uid'" ;
           $res=mysqli_query($con,$query1) or die (mysqli_error($con));
           if($res){
            $_SESSION['amount']=$amount;
            header("location:success.php");
           
         
           }else{
            echo"<script>alert('Something Went wrong,try again')
             </script>";
           }
          }else{
            echo"<script>alert('Your Account Balance is not enough')
            </script>";
          }
        }else{
            echo"<script>alert('Least Amount Can be 500')

             </script>";
        }







}

}

 
  


?>


  
    <p class="fs-2  py-2 mt-5">
    
    Your Balance is Rs:<b><?php echo $row['balance'];?> pkr</b>
    </p>    

    <form action="" class="py-3 " method="post">
        <table class="table-light py-3" align="center">
            <tr>
                
                <label for="" class="fs-5">Insert Amount To Widraw</label>
                <td>
                  <input class="border-rounded py-1 my-3" type="number" placeholder="eg: 500,1000 etc" name="amount" required>
                </td>
                <td>
                    <input class="btn btn-danger my-3" type="submit" value="Widraw" name="btn">
                </td>
            </tr>
            <tr>
              <td colspan="2"><small class="text-white py-2">Only 500 ,1000,1500 like values are apllicable <br>
            min:Rs.500 and max:Rs.5000  </small></td>
            </tr>
        </table>
    </form>

    <a href="home.php" class="btn btn-primary">Home</a>
    <a href="#" class="btn btn-primary">Send Money</a>
      
