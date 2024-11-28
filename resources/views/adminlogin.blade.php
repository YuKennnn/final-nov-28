<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locker Management System</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href= "{{ asset ('assets/css/login.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="big-container">
    <div class="container">
        <div class="container-crl">
        <img class="logo" src="{{ asset('assets/images/adminlogo.png') }}" alt="Admin login logo">

            <h2>
                ADMIN LOGIN
            </h2>

            @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <p>
                Access the administrative controls
            </p >

        </div>
        <div class="dados">


            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="ep">
                    <input type="text" value="{{ old('name') }}" name="name" id="name" placeholder="Admin Name">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="check">
                    <input type="checkbox" id="cb">
                    <label for="cb">Remember Me</label>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
        <h4>
            <a href="#">Forgot password?</a>
        </h4>

    </div>
    <div class="two-panel">
        <p class="tpt"></p>
    </div>
    </div>

</body>
</html>