<?php
  include("credential.php");

  header('Content-Type: application/json ');

  $conn = mysqli_connect($server, $username, $password) or die("Unable to connect");

  mysqli_select_db($conn, $database);

  $query = "SELECT * FROM states";
  $result = mysqli_query($conn, $query);
  $state_info = array();

  while($row = mysqli_fetch_assoc($result)) {
    $resultset[] = $row;
  }

  exit(json_encode($result));

?>