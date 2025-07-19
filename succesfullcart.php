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
            background-image: url("bg.png");
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

<div class="card">
    <div class="checkmark">✔️</div>
    <div class="message">Product has been added to your cart!</div>
</div>

</body>
</html>
