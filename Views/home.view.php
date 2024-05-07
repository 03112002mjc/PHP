<?php
    if(empty($_POST))
    {
        header("location: http://localhost/May 6 2024/index.php/login");
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        div{
            background-color: grey;
            text-align: center;
            justify-content: center;
            align-items: center;
         
            
        }
        a{
            text-decoration: none;
            color: #000000;
        }
        h1{
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div>
    <h1>Welcome</h1>
    <h2>HELLO <?= $_POST['username']?></h2>
    <a href="http://localhost/May 6 2024/index.php/login">LOGOUT</a>
    </div>
</body>
</html>