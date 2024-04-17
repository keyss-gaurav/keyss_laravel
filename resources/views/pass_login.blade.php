
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

       <form id="pass_login" action="{{('/login_pass')}}" method="POST">
    @csrf
    <div class="input-group">
        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email address">
    </div>
    <span class="text-danger" id="emailError">
        @error('email')
        {{ $message }}
        @enderror
    </span>

    <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Enter your password">
    </div>
    <span class="text-danger" id="passError">
        @error('password')
        {{ $message }}
        @enderror
    </span>
    <span class="error" id="passError"></span>

    <button type="submit">Login</button>
</form>


<!-- 
        <a href="#" class="button">USING PASSWORD</a> -->
        <h5>OR</h5>

        <a href="{{ ('/login_otp') }}" class="button">USING OTP</a>
        <a class="forget_pass" href="">Forget Password ?</a>

    </div>
   </body>
</html>
