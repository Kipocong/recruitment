<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
</head>

<body>
    <h2>Dear <span>{{ $details['name'] }}</span></h2>
    <p>You have request for rest your password.</p>
    <a href="http://localhost:8000/auth/forgot-password/{{ $details['token'] }}/{{ $details['hashEmail'] }}">Change
        Here</a>
    <br><br>
    <p>Thank you</p>
</body>

</html>
