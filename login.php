<?php
include 'db.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['password']) {
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }
}
?>

<html>

<head>
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class=" card col-md-4 ">
                <div class=" card-body">
                    <h2 class="card-title text-center">เข้าสู่ระบบ</h2>
                    <form action="login.php" method="POST">
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

    </div>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>