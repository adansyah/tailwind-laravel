<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Register</h2>
            <form action="register" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" required>
                    <label>Name</label>
                    <div class="underline"></div>
                </div>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label>Username</label>
                    <div class="underline"></div>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <div class="underline"></div>
                </div>
                <button type="submit" id="bt">Register</button>
                <p class="forgot-password"><a href="login">Sudah Punya Akun? Login!</a></p>
        </div>
    </div>
</body>

</html>
