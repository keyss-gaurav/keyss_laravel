
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
   
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="exampleForm" action="{{('/')}}" method="POST">
            @csrf
          
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            <span class="text-danger" id="emailError">
                @error('email')
                {{$message}}
                @enderror
            </span>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" >
            <span class="text-danger" id="passError">
                @error('password')
                {{$message}}
                @enderror
            </span>
            <span class="error" id="passError">
                
            </span>
            
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a class="signup" href="{{ ('/signup') }}">Sign Up</a></p>

    </div>
   // <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
