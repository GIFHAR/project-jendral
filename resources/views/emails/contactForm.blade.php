<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        p {
            margin: 10px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Customer Question Form</h2>
        <br>
        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <br>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <br>
        <p><strong>Message:</strong> {{ $details['message'] }}</p>
    </div>
</body>
</html>
