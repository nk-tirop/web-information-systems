<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/styles/global.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="/login.js"></script>
</head>

<body>
    <main>
        <form>
            <h1>Login/Register</h1>

            <div class="form-content">
                <label>Username</label>
                <input id="username" type="text">
                <label>Email</label>
                <input id="email" type="email">
                <label>Password</label>
                <input id="password" type="password">
            </div>

            <div class="submit">
                <button id="register">REGISTER</button>
                <button id="login">LOGIN</button>
            </div>

            <a href="/">reset password</a>
        </form>
    </main>
</body>

</html>