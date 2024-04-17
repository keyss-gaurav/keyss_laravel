
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/start_style.css') }}">
    <title>Login</title>
   
</head>
<body>
    <div class="container">
    <img src="{{ asset('images/keyss_logo.png') }}" alt="Logo">
        <h2>Sign In to KEYSS</h2>
        <a href="{{ ('/login_pass') }}" class="button">USING PASSWORD</a>
        <h5>OR</h5>

        <a href="{{ ('/login_otp') }}" class="button">USING OTP</a>

    </div>
   </body>
</html>
