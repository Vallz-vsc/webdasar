<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "usm" && $password == "123") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>:: Login Page ::</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
            background-size: cover;
            background-position: center;
        }
        .login-box {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
            width: 300px;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }
        .login-box label {
            font-size: 14px;
            color: #555;
        }
        .login-box .remember {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }
        .login-box .remember input {
            margin-right: 8px;
        }
        .login-box button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #32CD32, #ADFF2F);
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .login-box button:hover {
            background: linear-gradient(45deg, #228B22, #9ACD32);
        }
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <div class="login-box">
            <h2>Login</h2>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <div class="remember">
                <input type="checkbox" id="remember">
                <label for="remember">Ingatkan saya</label>
            </div>

            <button type="submit">SUBMIT</button>
        </div>
    </form>
</body>
</html>
