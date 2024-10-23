<?php
include 'db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "INSERT INTO admin( username, password, name) VALUES ('$username', '$password' ,'$name')";

    if ($conn->query($sql) == TRUE) {
        header("Location: login.php");
    } else {
        echo '<div class="alert alert-danger text-center">สมัครสมาชิกไม่สำเร็จ</div>';
    }
} ?>


<html>

<head>
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.rtl.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h2>สมัครสมาชิก</h2>
                        </div>
                        <form method="post" action="register.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text"  name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password"  class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="name"  class="form-label">ชื่อ</label>
                                <input type="text" for="name" name="name" class="form-control" placeholder="กรุณาใส่ ชื่อ " required>
                            </div>
                            <div class="text-start mt-3">
                                <button name="register" class="btn btn-primary">สมัครสมาชิก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script rel="stylesheet" href="bootstrap-5.3.3-dist/js/bootstrap.rtl.min.js"/>

</body>

</html>