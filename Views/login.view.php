<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            width: 500px;
            height: 75px;
            font-size: 40px;
        }
        button{
            width: 100px;
            height: 50px;
            background-color: greenyellow;
        }
        .container{
            justify-content: center;
        }
    </style>
</head>
<body>
    <form action="http://localhost/May 6 2024/index.php/home" method="POST">
        <div class="container">
            <label for="uname"><h1>Username:</h1></label><br>
            <input type="text" placeholder="Enter Username" name="username" required>
<br> 
            <label for="psw"><h1>Password:</h1></label><br>
            <input type="password" placeholder="Enter Password" name="password" required>
<br>    <br>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>