<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: selectRole.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container mt-5">
        <div class="card text-center shadow p-5">
            <h2 class="mb-4">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>You are successfully logged in.</p>
            <a href="auth.php?action=logout" class="btn btn-danger mt-3">Logout</a>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
