<?php
// Function to retrieve cuisines using PDO
function getCuisines($conn) {
  $sql = "SELECT * FROM cuisines";
  $stmt = $conn->query($sql);

  if (!$stmt) {
    die("Error fetching cuisines: " . $conn->errorInfo());
  }

  $cuisines = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<script>";
echo "console.log('Cuisines:', " . json_encode($cuisines) . ");";
echo "</script>";
  return $cuisines;
}
?>