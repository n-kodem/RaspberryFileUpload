<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
    <script>
      function delData(id){
        var request = new XMLHttpRequest();
        request.open("GET", `../actions/delete.php?num=${id}`, true);
        request.send();
        window.location.reload();
      }
    </script>
</head>
<body style="overflow-y: hidden;">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">Creation date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $quer = $mysqli->query('SELECT id, username, created_at FROM users');

    while($row = $quer->fetch_assoc()){
        echo "<tr><th>".$row['id']."</th> <td>".$row['username']."</td> <td>".$row['created_at']."</td>";
        echo "<td><button class='btn btn-danger' onclick='delData(".$row['id'].")'>Delete</button></td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
<hr>
    <a href="../reg.php" target="_parent" class="btn btn-primary">Add new user</a></p>
    <a href="../reset-password.php" target="_parent" class="btn btn-secondary">Reset Your Password</a>
</body>
</html>
