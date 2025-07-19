<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      padding: 20px;
      background-image: url("bg.png");
    }
    form {
      background: #fff;
      padding: 20px;
      max-width: 400px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
      background: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <h2>Product Entry Form</h2>
  <form action="save_product.php" method="POST">
    <label for="weight">Weight (in kg):</label>
    <input type="number" step="0.01" name="weight" id="weight" required>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" required>

    <label for="price">Price (in ₹):</label>
    <input type="number" step="0.01" name="price" id="price" required>

    <input type="submit" value="confirm order">
  </form>

</body>
</html>
