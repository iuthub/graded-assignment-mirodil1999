<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('register.css') }}" rel="stylesheet">

</head>
<body>
    <div id="myDIV" class="header">
        <h2>My To Do List</h2>
    </div>
    <form action="" method="post">
        <div class="register">
            Your name:
            <input style="margin-left: 30px;" type="text" name="name" placeholder="Name"><br>
            Your username:
            <input type="text" name="username" placeholder="Username"><br>
            Your password:
            <input type="password" name="password1" placeholder="Password">
            <br>
            Your password:
            <input type="password" name="password2" placeholder="Password"><br>
            <button type="submit" class="Submit">Register</button>
        </div>
    </form>
</body>
</html>
