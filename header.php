<?php
 include("conf.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atm System | Created By MOhsin Khan</title>
    <style>
        b{
           border-bottom: 3px solid white;
           margin:0px 10px;
        }
    </style>
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
<body class="text-center text-white " style="background-color:#1a1817;">
    <nav class="navbar bg-body-tertiary ">
        <div class="container">
        <a class="navbar-brand"><?php if(isset($_SESSION['uname'])){
            echo $_SESSION['uname'];
        }else{
            header("location:login.php");
        } ?>
         </a>
        <a class="navbar-brand">Account Number: <?php if(isset($_SESSION['accnum'])){
            echo $_SESSION['accnum'];
        }else{
            header("location:login.php");
        } ?>
         </a>
          <form class="d-flex" role="">
          <a class="navbar-brand">Email: <?php if(isset($_SESSION['email'])){
                echo $_SESSION['email'];
            }else{
                header("location:login.php");
            } ?>
         </a>
           
            <a href="logout.php" class="btn btn-danger" type="submit" >logout</a>
          </form>
        </div>
      </nav>
<?php
 include("footer.php");
?>