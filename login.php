<?php
include 'config.php';
include 'navbar.php';

if (!isset($_SESSION)) {
    session_start();
}

$error = ''; // สร้างตัวแปรเพื่อเก็บข้อความผิดพลาด

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ตรวจสอบว่ามีการส่งค่าจากฟอร์มหรือไม่
    if (isset($_POST['user_email']) && isset($_POST['user_password'])) {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $sql = "SELECT * FROM users WHERE user_email = '$user_email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            
            if ($user_password == $user['user_password']) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['role'] = $user['role'];

                header('location:index.php');
                exit();
            } else {
                $error = "รหัสผ่านไม่ถูกต้อง";
            }
        } else {
            $error = "อีเมลไม่ถูกต้อง";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src='bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js'></script>
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
                    LOGIN
                </div>
                <div class="card-body">
                    <?php if ($error): ?>
                        <div class="alert alert-danger text-center">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="user_email" class="form-label">อีเมล</label>
                            <input id="user_email" type="email" class="form-control" name="user_email" required>
                        </div>
                        <div class="form-group">
                            <label for="user_password" class="form-label">รหัสผ่าน</label>
                            <input id="user_password" type="password" class="form-control" name="user_password" required>
                        </div><br>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                    <a href="register.php">ยังไม่มีแอคเคาท์ใช่หรือไม่? สมัครสมาชิกที่นี่</a><br>
                </div>
            </div>
            <br>
            <a href="index.php" class="btn btn-secondary">กลับหน้าแรก</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
