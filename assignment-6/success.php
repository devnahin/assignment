<?php
    require_once('./inc/header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Submission Success</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Form Submission Success</h1>
    <?php
      session_start();

      // check if the user's name is set in the session
      if (!isset($_SESSION['name'])) {
        header('Location: index.php');
        exit();
      }
    ?>
    <p>Thank you for submitting the form, <?php echo $_SESSION['name']; ?>!</p>
    <p>Your profile picture has been saved and your information has been added to the user database.</p>
    <p><a href="index.php">Back to Form</a></p>
  </div>

  <?php require_once('./inc/footer.php'); ?>
