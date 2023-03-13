<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Assignment 6</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($currentPage == 'index.php') { echo 'active'; } ?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item <?php if ($currentPage == 'index.php') { echo 'active'; } ?>">
        <a class="nav-link" href="index.php">Submit Form</a>
      </li>
      <li class="nav-item <?php if ($currentPage == 'success.php') { echo 'active'; } ?>">
        <a class="nav-link" href="success.php">Form Submitted</a>
      </li>
      <li class="nav-item <?php if ($currentPage == 'users.php') { echo 'active'; } ?>">
        <a class="nav-link" href="users.php">View Users</a>
      </li>
    </ul>
  </div>
</nav>