<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Email</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        /* Container Style */
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        /* Header Styles */
        h2 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 35px;
            text-align: center;
        }

        /* Paragraph and Text Styling */
        p {
            margin: 10px 0;
            color: #666666;
            font-size: 16px;
            line-height: 1.5;
        }

        /* Emphasizing labels */
        p strong {
            color: #333333;
            font-weight: bold;
        }

        /* Subtle Dividers */
        .divider {
            margin: 20px 0;
            border-top: 1px solid #eeeeee;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            h2 {
                font-size: 22px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Customer Question Form</h2>

        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <div class="divider"></div>

        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <div class="divider"></div>

        <p><strong>Message:</strong> {{ $details['message'] }}</p>
    </div>
</body>
</html>
