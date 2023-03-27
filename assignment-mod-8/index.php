<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <?php
    require_once 'db_conn.php';

    $first_name = $last_name = $email = $password = $confirm_password = "";
    $first_name_err = $last_name_err = $email_err = $password_err = $confirm_password_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["first_name"])) {
            $first_name_err = "First name is required";
        } else {
            $first_name = $_POST["first_name"];
        }

        if (empty($_POST["last_name"])) {
            $last_name_err = "Last name is required";
        } else {
            $last_name = $_POST["last_name"];
        }

        if (empty($_POST["email"])) {
            $email_err = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        } else {
            $email = $_POST["email"];
        }

        if (empty($_POST["password"])) {
            $password_err = "Password is required";
        } else {
            $password = $_POST["password"];
        }

        if (empty($_POST["confirm_password"])) {
            $confirm_password_err = "Confirm password is required";
        } else {
            $confirm_password = $_POST["confirm_password"];
            if ($password != $confirm_password) {
                $confirm_password_err = "Passwords do not match";
            }
        }

        if (empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
            $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

                if ($stmt->execute()) {
                    echo "Registration successful!";
                } else {
                    echo "Something went wrong. Please try again later.";
                }
            }
            $stmt->close();
        }
        $conn->close();
    }
    ?>

    <h2>Registration Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        First name: <input type="text" name="first_name" value="<?php echo $first_name; ?>">
        <span><?php echo $first_name_err; ?></span><br><br>
        Last name: <input type="text" name="last_name" value="<?php echo $last_name; ?>">
        <span><?php echo $last_name_err; ?></span><br><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>">
        <span><?php echo $email_err; ?></span><br><br>
        Password: <input type="password" name="password" value="<?php echo $password; ?>">
        <span><?php echo $password_err; ?></span><br><br>
        Confirm password: <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
        <span><?php echo $confirm_password_err; ?></span><br><br>
        <input type="submit" value="Register">
    </form>

    <h3>Login Form</h3>
    <a href="login.php">Login here</a>

</body>
</html>
