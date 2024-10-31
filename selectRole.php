<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">
            <h2 class="mb-4">Please select your role</h2>
            <div class="d-grid gap-3">
                <a href="login.php?role=admin" class="btn btn-primary btn-lg">ผู้ดูแลระบบ</a>
                <a href="login.php?role=restaurant" class="btn btn-success btn-lg">ร้านอาหาร</a>
                <a href="login.php?role=delivery" class="btn btn-warning btn-lg">คนส่ง</a>
                <a href="login.php?role=customer" class="btn btn-info btn-lg">ลูกค้า</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>