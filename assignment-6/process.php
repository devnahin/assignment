<?php
    require_once('./inc/header.php');

  // check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // validate form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
      die('Please fill out all required fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      die('Invalid email format.');
    }

    // save profile picture to server
    $uploadsDir = 'uploads/';
    $filename = $_FILES['profile_picture']['name'];
    $tmpName = $_FILES['profile_picture']['tmp_name'];
    $uniqueFilename = uniqid() . '_' . $filename;
    $targetFilePath = $uploadsDir . $uniqueFilename;

    if (!move_uploaded_file($tmpName, $targetFilePath)) {
      die('Failed to upload profile picture.');
    }

    // add user information to CSV file
    $userArray = [$name, $email, $uniqueFilename, date('Y-m-d H:i:s')];
    $userCsv = fopen('users.csv', 'a');

    if (fputcsv($userCsv, $userArray) === false) {
      die('Failed to add user information to CSV file.');
    }

    fclose($userCsv);

    // set session and cookie
    session_start();
    $_SESSION['name'] = $name;
    setcookie('name', $name, time() + 3600);

    // redirect to success page
    header('Location: success.php');
    exit();
  }

  require_once('./inc/footer.php');
?>
