<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h2>สมัครสมาชิก</h2>
                        </div>
                        <form method="post" action="auth.php?action=register">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">ชื่อ</label>
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