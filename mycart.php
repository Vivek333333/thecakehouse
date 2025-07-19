<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
   background-image: url("bg.png");
    }

    header {
      background-color: purple;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
    }

    .user-info {
      font-size: 18px;
      margin-top: 10px;
    }

    .container {
      max-width: 1000px;
      margin: 30px auto;
      padding: 20px;
      background: #fff;
      box-shadow: 0 0 10px rgba(195, 0, 255, 0.81);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color:rgb(16, 57, 240);
    }

    button {
      padding: 8px 15px;
      background-color:rgb(77, 139, 255);
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color:rgb(0, 92, 230);
    }

    h2 {
      margin-top: 40px;
      color: #333;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo"><image src="cakelogo.png"></image></div>
    <?php
      $username=$_GET['uname'];
    ?>
    <div class="user-info"><h1><strong><?php echo $username;?></strong></h1></div>
    
    </header>
  <?php
       include("con.php");
     $q="select * from log";
     $qe=mysqli_query($con,$q);
     $nr=mysqli_num_rows($qe);
     if($nr==0)
     {
        echo "<center><h2>Please LOGIN</h2></center>";
     }
     else{
  
         ?>
   
    <h2>Your Cart Items</h2>
    <table>

      <tr>
        <th>Product</th>
      
        <th>Price</th>
        <th>action</th>
         
      </tr>
     
<?php
  include("con.php");
         $usernames=$_GET['uname'];
         $mobile=$_GET['mobile'];
     $qqqqqq="select * from cart where uname ='$usernames'";
     $qqqqqqqe=mysqli_query($con,$qqqqqq);
     while($row=mysqli_fetch_array($qqqqqqqe))
     {
     
      ?>
       <tr>
        <td><?php echo $row['pname'];?></td>
        <td><?php echo $row['price'];?></td>
     
        <td><button  style="background-color: blue;" onclick="window.location.href='pageform.php?uname=<?php echo $_GET['uname'];?>&pname=<?php echo $row['pname'];?>&mobile=<?php echo $mobile;?>&price=<?php echo $row['price'];?>'" >order now</button> <button name="remove" onclick="window.location.href='mycart.php?pname=<?php echo $row['pname'];?>&uname=<?php echo $_GET['uname'];?>'" style="background-color: red;">remove</button></td>
   
        </tr>
        
<?php } ?>



    </table>

    <h2>Ordered Products</h2>
    <table>
       
      <tr>
        <th>Product</th>
        <th>Cancel</th>
      </tr>
      <?php
  include("con.php");
         $usernames=$_GET['uname'];
     $o="select * from orders where cname ='$usernames'";
     $ord=mysqli_query($con,$o);
     
     while($re=mysqli_fetch_array($ord))
     {
      ?>  
      <tr>
        <td><?php echo $re['oname'];?></td>
      
        <td> <button  onclick="window.location.href='mycart.php?oname=<?php echo $re['oname'];?>&uname=<?php echo $usernames;?>'" >Cancel</button></td>
       <?php
     }
     ?>
    </table>
    

    <center><button onclick="window.location.href='mycart.php?logout';" >Logout</button></center>
   
    <?php
     include("con.php");

        if(isset($_GET['logout']))
  {      
   
      $q="DELETE  FROM log";
      $qc=mysqli_query($con,$q);
     if($qc)
     {
        echo "<script>alert('please login ');
           window.location.href = 'index.php'; </script>";
      }

     }

?>

   <?php
   }
   ?>
     <?php

     include("con.php");
     if(isset($_GET['pname']))
     {
       $product=$_GET['pname'];
       $uname=$_GET['uname'];
       $rm="DELETE FROM cart WHERE pname='$product' AND uname='$uname'";
       $rq=mysqli_query($con,$rm);
       if($rq)
       {
       echo "<script>location.reload();</script>";
       }
     }
     ?>
      <?php

     include("con.php");
     if(isset($_GET['oname']))
     {
        $oname=$_GET['oname'];
        $uname=$_GET['uname'];
        $cr="select * from user where uname= '$uname'";
        $cf=mysqli_query($con,$cr);
       $cm="DELETE FROM orders WHERE oname='$oname' AND cname='$uname'";
       $cq=mysqli_query($con,$cm);
       if($cq)
       {
         echo "<script>location.reload();</script>";
       }
     }
     ?>
     <script>
window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
      window.location.href = 'index.php';
    }
});
</script>
</body>
</html>
