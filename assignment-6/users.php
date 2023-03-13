<?php
  
  require_once('./inc/header.php');

  // read users.csv file and store contents in array
  $usersCsv = fopen('users.csv', 'r');
  $usersArray = [];

  while (($userData = fgetcsv($usersCsv)) !== false) {
    $usersArray[] = $userData;
  }

  fclose($usersCsv);
?>

    <title>Users Table</title>
    <div class="container mt-5">
      <h1>Users Table</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Profile Picture</th>
            <th>Date and Time</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usersArray as $user) { ?>
            <tr>
              <td><?php echo $user[0]; ?></td>
              <td><?php echo $user[1]; ?></td>
              <td><img src="uploads/<?php echo $user[2]; ?>" width="100"></td>
              <td><?php echo $user[3]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

<?php require_once('./inc/footer.php'); ?>