<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/start_style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/keyss_logo.png') }}" alt="Logo">
        <h2>Enter Verification Code</h2>

        <form id="otpForm" action="{{('/') }}" method="POST">
            @csrf
            <div class="otp-field">
                <input type="text" class="otp-input" maxlength="1" />
                <input type="text" class="otp-input" maxlength="1" />
                <input type="text" class="otp-input" maxlength="1" />
                <input type="text" class="otp-input" maxlength="1" />
            </div>
    
            
            <button type="button" id="submitOtp">VERIFY</button>
        </form>
       
    </div>
</body>
</html>
