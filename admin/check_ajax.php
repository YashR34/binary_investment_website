<?php

// Connect to your database
include("elements/connection.php");



// Escape the user input
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

// Write the query to check sponsor ID existence
$sql = "SELECT * FROM users WHERE user_id = '$user_id'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if sponsor ID exists
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