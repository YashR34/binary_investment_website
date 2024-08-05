<?php

$db_host="localhost";
$db_user='root';
$db_pass='';
$db_name='imaxcoin';
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
$sponsor_id = mysqli_real_escape_string($conn, $_POST['sponsor_id']);
$sql = "SELECT * FROM users WHERE user_id = '$sponsor_id'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $response = array(
      "exists" => true,
      "name" => $row["name"],
    );
  } else {
    $response = array(
      "exists" => false,
    );
  }

// Return JSON response
echo json_encode($response);

?>