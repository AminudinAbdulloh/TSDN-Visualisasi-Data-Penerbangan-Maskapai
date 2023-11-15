<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{!! asset('css/login/login.css') !!}">
</head>
<body>
    <img src="{{ asset('images/Background form.png') }}" alt="Background">
    <div class="container">
        <div class="login-form">
            <header>Login Form</header>
            <form action="">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <input type="Password" placeholder="Password">
                <input type="button" value="">
                <p>Not Registered? <a href="">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>
