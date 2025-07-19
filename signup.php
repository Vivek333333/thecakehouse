<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up Page</title>
  <style>
    body {
      background: #f2f2f2;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
       background-image: url("bg.png");
    }

    .signup-box {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 320px;
    }

    .signup-box h2 {
      text-align: center;
      margin-bottom: 25px;
    }

    .signup-box input[type="text"],
    .signup-box input[type="password"],
    .signup-box input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .signup-box button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    .signup-box button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="signup-box">
    <h2>Sign Up</h2>
    <form action="#" method="POST">
      <input type="text" name="username" placeholder="enter full name" required>
      <input type="password" name="password" placeholder="enter Password" required>
      <input type="tel" name="mobile" placeholder="enter Mobile Number"  required>
      <button type="submit" name="submit">signup</button>
    </form>
  </div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
   $host='localhost';
   $usr='root';
   $pass='';
   $db='cake';
   $con= mysqli_connect($host,$usr,$pass,$db);
   $name=$_POST['username'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'];
   $q="INSERT INTO user (uname,mobile,password) VALUES ('$name','$mobile','$password')";
   $qq=mysqli_query($con,$q);
   if($qq)
   {
       echo "<script>alert('succesfull signup');
           window.location.href = 'index.php'; </script>";
   }
}
?>
