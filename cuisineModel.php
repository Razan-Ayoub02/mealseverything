<?php

function getCuisines() {
  // Replace with your actual logic to connect to the database (if not using db_config.php)
  // ...

  // Assuming you have a connection ($conn) established (replace with actual query)
  $sql = "SELECT * FROM cuisines";
  $result = mysqli_query($conn, $sql);

  // Check for errors
  if (!$result) {
    die("Error fetching cuisines: " . mysqli_error($conn));
  }

  $cuisines = array();

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['cuisine_id'];
    $name = $row['name'];
    $cuisines[] = array('id' => $id, 'name' => $name); // Create an array with cuisine data
  }

  mysqli_close($conn); // Close connection (if established here)

  return $cuisines;
}
