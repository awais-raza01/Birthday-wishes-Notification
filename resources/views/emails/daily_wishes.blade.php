<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday {{ $firstName }}!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #5F9EA0;
            font-size: 36px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .birthday-message {
            font-style: italic;
            color: #5F9EA0;
            margin-top: 20px;
        }
        footer {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Happy Birthday, {{ $firstName }}!</h1>
    <p>On your special day, we wanted to take a moment to celebrate you! Wishing you a year full of success, health, and happiness. May all your dreams come true.</p>

    @if($birthdayMessage)
        <p class="birthday-message">{{ $birthdayMessage }}</p>
    @else
        <p class="birthday-message">Enjoy every moment and make the most of this wonderful year ahead!</p>
    @endif

    <footer>
        <p>Best regards,</p>
    </footer>
</div>

</body>
</html>
