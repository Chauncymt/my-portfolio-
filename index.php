<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Login</title>

    <style>
        ul{
            list-style: none;
            display: flex;
            justify-content: space-around;
        }

        h1{
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION["username"])): ?>
        <h1>nav</h1>
    <?php else: ?>
        <nav>
        <ul>
            
            <li><a href="Home.php">Register</a></li>
            <li><a href="">logout</a></li>
        </ul>
    </nav>
    <?php endif; ?>


<h1>Welcome to my to my  page</h1>
    
</body>
</html>