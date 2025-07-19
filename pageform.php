<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Form</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f2f2f2;
      font-family: Arial, sans-serif;
       background-image: url("bg.png");
    }
    .form-container {
      background: #fff;
      padding: 20px;
      max-width: 400px;
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      margin-top: 15px;
      padding: 10px;
      width: 100%;
      background:rgb(55, 0, 255);
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background:rgb(0, 84, 179);
    }
    #p{
        display: flex;
        justify-content: center;
        font-size: 20px;
        
    }
  #price{
         width: 100%;
  }
  
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Product Entry Form</h2>
    <form  method="post">
      <label for="weight">Weight (in kg):</label>
      <input type="number" step="0.01" name="weight" id="weight" oninput="calculate()" required>

      <label for="quantity">Quantity:</label>
      <input type="number" name="quantity" id="quantity" oninput="calculate()" required>
      <label for="price">massage(optional):</label>
      <input type="textbox"  name="massage" id="price"  >
       <b> <p id="result"></p></b>
     <input name="submit" type="submit"  value="order now" >
    
    
    </form>
  </div>
 




</body>
</html>
<?php 

$uname=$_GET['uname'];
$pname=$_GET['pname'];
$mobile=$_GET['mobile'];
$price=$_GET['price'];

if(isset($_POST['submit']))
{
   $wieght=$_POST['weight'];
   $quantity=$_POST['quantity'];
   $massage=$_POST['massage'];
   $totalprice=$wieght*$quantity*$price;
   include("con.php");
  $q="INSERT INTO orders(oname,cname,cmobile,massage,quantity,weight,price)VALUES('$pname','$uname','$mobile','$massage','$quantity','$wieght','$totalprice')";
  $qq=mysqli_query($con,$q);
  if($qq)
  {
    echo "<script>
    alert('succesfull order');
    window.location.href = 'mycart.php?uname=$uname&mobile=$mobile';
</script>";
  }
  
}


?>
    <script>
        function calculate() {
            // Get values
            let num1 = parseFloat(document.getElementById('weight').value) || 0;
            let num2 = parseFloat(document.getElementById('quantity').value) || 0;
            let price=<?php echo $price;?>;
            // Calculate total
            let total = num1 * num2 * price;

            // Show result
            document.getElementById('result').textContent = "Total price ₹: " + total;
        }
    </script>


