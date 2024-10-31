<?php
session_start();

if (isset($_GET['role'])) {
    $_SESSION['role'] = $_GET['role'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php
    if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false") {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Invalid Credentials
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                </div>';
    }
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class=" card col-md-4 ">
                <div class=" card-body">
                    <h2 class="card-title text-center">เข้าสู่ระบบ</h2>
                    <?php
                    if (isset($_SESSION['alert'])) {
                        echo "<div class='alert alert-{$_SESSION['alert']['type']} alert-dismissible fade show' role='alert'>
                    {$_SESSION['alert']['message']}
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                        unset($_SESSION['alert']);
                    }
                    ?>
                    <form action="auth.php?action=login" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" for="username" class="form-control" placeholder="กรุณาใส่ username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" for="password" class="form-control" placeholder="กรุณาใส่ password" required>
                        </div>
                        <button name="login" type="submit" class="btn btn-primary ">เข้าสู่ระบบ</button>
                    </form>
                    <div class="text-center">
                        <a href="register.php">สมัครสมาชิก</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>