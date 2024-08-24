<?php
include 'config.php';
include 'navbar.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_fname = $_POST['user_fname'];
    $user_lname = $_POST['user_lname'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $user_password = $_POST['user_password'];
    
    $sql = "INSERT INTO users (
        user_fname,
        user_lname,
        user_email,
        user_phone,
        user_password
        )
        VALUES (
        '$user_fname',
        '$user_lname',
        '$user_email',
        '$user_phone',
        '$user_password'
        )";

    mysqli_query($conn , $sql);

    header('location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\css\bootstrap.min.css">
    <script src='bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\css\bootstrap.min.css'></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-header text-center">
                REGISTER
            </div>
            <div class="card body">
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="user_fname" class="form-label">ชื่อจริง</label>
                        <input id='user_fname' type="text" class="form-control" name='user_fname'
                        required>
                    </div>
                    <div class="form-group">
                        <label for="user_lname" class="form-label">นามสกุล</label>
                        <input id='user_lname' type="text" class="form-control" name='user_lname'
                        required>
                    </div>
                    <div class="form-group">
                        <label for="user_email" class="form-label">อีเมล</label>
                        <input id='user_email' type="email" class="form-control" name='user_email'
                        required>
                    </div>
                    <div class="form-group">
                        <label for="user_phone" class="form-label">เบอร์โทร</label>
                        <input id='user_phone' type="tel" class="form-control" name='user_phone'
                        required>
                    </div>
                    <div class="form-group">
                        <label for="user_password" class="form-label">รหัสผ่าน</label>
                        <input id='user_password' type="password" class="form-control" name='user_password'
                        required>
                    </div>
                    <br>
                    <input type="submit" class='btn btn-primary'>
                </form>
                <a href="register.php" >มีแอคเคาท์อยู่แล้วใช่หรือไม่ เข้าสู่ระบบชิกที่นี่</a><br>
            </div>
        </div>
        <br>
        <a href="index.php" class='btn btn-secondary'>กลับหน้าแรก</a>
        </div>
    </div>
</div>
</body>
</html>
<?php
include 'footer.php';
?>