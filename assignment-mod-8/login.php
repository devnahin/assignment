<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <?php
    session_start();
    require_once 'db_conn.php';

    $email = $password = "";
    $email_err = $password_err = $login_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $email_err = "Email is required";
        } else {
            $email = $_POST["email"];
        }

        if (empty($_POST["password"])) {
            $password_err = "Password is required";
        } else {
            $password = $_POST["password"];
        }

        if (empty($email_err) && empty($password_err)) {
            $sql = "SELECT id, first_name, email, password FROM users WHERE email = ?";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("s", $email);

                if ($stmt->execute()) {
                    $stmt->store_result();

                    if ($stmt->num_rows == 1) {
                        $stmt->bind_result($id, $first_name, $email, $hashed_password);

                        if ($stmt->fetch()) {
                            if ($password == $hashed_password) {
                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["first_name"] = $first_name;
                                header("location: welcome.php");
                            } else {
                                $login_err = "Invalid email or password.";
                            }
                        }
                    } else {
                        $login_err = "Invalid email or password.";
                    }
                } else {
                    echo "Something went wrong. Please try again later.";
                }
            }
            $stmt->close();
        }
        $conn->close();
    }
    ?>

    <h2>Login Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Email: <input type="email" name="email" value="<?php echo $email; ?>">
        <span><?php echo $email_err; ?></span><br><br>
        Password: <input type="password" name="password" value="<?php echo $password; ?>">
        <span><?php echo $password_err; ?></span><br><br>
        <input type="submit" value="Login">
        <p><?php echo $login_err; ?></p>
    </form>

</body>
</html
