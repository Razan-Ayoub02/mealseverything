<?php
// Function to retrieve cuisines using PDO
function getMealType($conn) {
  $sql = "SELECT * FROM meal_types";
  $stmt = $conn->query($sql);

  if (!$stmt) {
    die("Error fetching cuisines: " . $conn->errorInfo());
  }

  $mealtypes = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<script>";
echo "console.log('meal types:', " . json_encode($mealtypes) . ");";
echo "</script>";
  return $mealtypes;
}
?>