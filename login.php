<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      background: #f0f0f0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
       background-image: url("bg.png");
    }

    .login-box {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 320px;
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .login-box button {
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-box button:hover {
      background-color: #218838;
    }

    .signup-link {
      margin-top: 15px;
      font-size: 13px;
    }

    .signup-link a {
      color: #007bff;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }
    #body{
      background-image: url("bg.png");
    
    
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Login</h2>
    <form action="login.php" method="POST">
      <input type="text" name="fullname" placeholder="Full Name" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="submit">Login</button>
    </form>
    <div class="signup-link">
      Don’t have an account? or forget password <a href="signup.php">Sign Up</a>
    </div>
  </div>

</body>
</html>
<?php

if(isset($_POST["submit"]))
{

  include("con.php");

   $username=$_POST['fullname'];
   $pass=$_POST['password'];
   $query="select * from user where uname='$username' and password='$pass' ";
   $qc=mysqli_query($con,$query);
   $c=mysqli_num_rows($qc);
   if($c>0)
   {
      $dq="DELETE FROM log";
     $dd=mysqli_query($con,$dq);
    $username=$_POST['fullname'];
    $in="INSERT INTO log(uname) VALUES ('$username')";
    $quey=mysqli_query($con,$in);

echo "<script>
    alert('Welcome, $username!');
    window.location.href = 'index.php?uname=$username';
</script>";
       
   }
   else
   {
    echo "<script>alert('invalid login')</script>";
   }
   
  }
  
   
?>




