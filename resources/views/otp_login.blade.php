
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

        <form id="pass_login" action="{{('/login_otp')}}" method="POST">
            @csrf
            <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Enter your email address">
            <span class="text-danger" id="emailError">
                @error('email')
                {{$message}}
                @enderror
            </span>
           
            
            <button type="submit">GET VERIFICATION CODE</button>
        </form>

<!-- 
        <a href="#" class="button">USING PASSWORD</a> -->
        <h5>OR</h5>

        <a href="{{ ('/login_pass') }}" class="button">LOGIN USING PASSWORD</a>
        <a href="" class="forget_pass">Forget Password ?</a>

    </div>
   </body>
</html>
