<?php
// auth.php
session_start();
include 'db.php';

$action = $_GET['action'] ?? '';
$role = $_SESSION['role'] ?? '';

if ($action === 'register') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $sql = "INSERT INTO $role( username, password, name) VALUES ('$username', '$password' ,'$name')";

    if ($conn->query($sql) == TRUE) {
        $_SESSION['alert'] = ['message' => 'Registration successful. Please login.', 'type' => 'success'];
        header("Location: login.php");
    } else {
        $_SESSION['alert'] = ['message' => 'Error: Username might already be taken.', 'type' => 'danger'];
        header("Location: register.php");
    }
} elseif ($action === 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM $role WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['password'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['alert'] = ['message' => 'Login successful!', 'type' => 'success'];
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['alert'] = ['message' => 'username หรือ password ไม่ถูกต้อง', 'type' => 'danger'];
            header("Location: index.php");
        }
    } else {
        $_SESSION['alert'] = ['message' => 'username หรือ password ไม่ถูกต้อง', 'type' => 'danger'];
        header("Location: index.php");
    }
} elseif ($action === 'logout') {
    session_destroy();
    header("Location: index.php");
}

$conn->close();
