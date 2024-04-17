
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Singn Up</title>
   
</head>
<body>
    <div class="container">
        <h2>Singn Up</h2>
        <form id="exampleForm" action="{{('/signup')}}" method="POST">
            @csrf

            <label for="name">Name:</label>
            <input type="name" name="name" id="name" value="{{old('name')}}">
            <span class="text-danger" id="nameError">
               
            </span>
          
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
               
            </span>
            
                
            
            <button type="submit">Signup</button>
        </form>

    </div>
       // <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
