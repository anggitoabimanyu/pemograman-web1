<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        .inputan{
            width: 100px;
            padding: 12px 20px;
            margin: 80px 0;
            box-sizing: border-box;
        }

        input[type=submit]{
            background-color: blue;
            border: none;
            color:white;
            text-decoration:none;
            padding: 16px 32px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <p>Login System</p>
    <form method="post" action="ceklogin.php">
    <label>Username</label>
    <input class="inputan" type="text" name="username">

    <label>Password</label>
    <input class="inputan" type="password" name="password">

    <input type="submit" name="tombolsubmit" value="Login">
    </form>
</body>
</html>