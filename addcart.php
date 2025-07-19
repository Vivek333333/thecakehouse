<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .checkmark {
            font-size: 60px;
            color: green;
            margin-bottom: 20px;
        }
        .message {
            font-size: 22px;
            color: #333;
        }
    </style>
</head>
<body>




<?php
include("con.php");
$uname=$_GET['uname'];
$log="select * from log";
$q=mysqli_query($con,$log);
$ww=mysqli_fetch_assoc($q);
if($ww==0)
{
  echo "<script>alert('please before login afther aded cart');
           window.location.href = 'index.php'; </script>";


}
else
{
  
  $uname=$_GET['uname'];
  $pname=$_GET['pname'];
  $price=$_GET['price'];
   $ins="insert into cart(uname,pname,price) values('$uname','$pname','$price');";
   $dd=mysqli_query($con,$ins);
   if($dd)
   {
  
        header("Location:succesfullcart.php");
    
   }

}
?>

</body>
</html>





