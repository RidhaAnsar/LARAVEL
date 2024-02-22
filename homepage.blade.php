<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:  rgb(26, 80, 26);
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color:  rgba(224, 231, 225, 0.26);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container button {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login-container button {
            background-color: #0f1924;
            color: #fff;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #09632b;
        }
        .login-button {
    background-color: rgb(28, 92, 39);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.login-button:hover {
    background-color: rgb(167, 223, 176); /* Change color on hover if desired */
}

    </style>
</head>
<body background="https://wallpaper.dog/large/20542951.jpg">
<div class="login-container">
    <h1>LOGIN</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="enter your username">
        <input type="password" name="password" placeholder="enter password">
        <input type="submit" class="login-button" name="Login">
</form> 
{{--<body>
    <h1>Homepage @foreach($name as $i)
         {{$i}}
        @endforeach</h1>
    </body>--}}
</html>