<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["first_name"]); ?>!</h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
