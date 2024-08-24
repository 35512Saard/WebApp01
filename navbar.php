<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        header .logo i {
            margin-right: 8px;
        }

        header .login {
            font-size: 16px;
            font-weight: bold;
        }

    </style>
</head>
<body>
<header>
        <div class="logo"><i class="fas fa-music"></i> Music Shop</div>

        <?php if(!isset($_SESSION['role'])): ?>
        <a class="login" href='login.php'>Login</a>
        <?php endif ?>

        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'user'): ?>
        <a class="login" href='detail.php'>Detail</a>
        <?php endif ?>
</header>
</body>
</html>