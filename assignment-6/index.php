<?php
    require_once('./inc/header.php');
?>

    <title>Form Submission</title>
  <div class="container">
    <h1>Form Submission</h1>
    <form method="post" action="process.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="profile_picture">Profile Picture:</label>
        <input type="file" class="form-control-file" id="profile_picture" name="profile_picture" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

<?php require_once('./inc/footer.php'); ?>