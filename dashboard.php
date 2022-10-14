<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
    <p>
        <a href="reset-password.php" class="btn btn-primary">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="reg.php" class="btn btn-secondary ml-3">Register new user</a>.</p>
        <p>Free disk space: <?php echo round(disk_free_space("/") / 1024 / 1024 / 1024);?> / <?php echo round(disk_total_space("/")/ 1024 / 1024 / 1024); ?> GB</p>
    </p>
</body>
</html>