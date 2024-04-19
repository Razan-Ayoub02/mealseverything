<?php
// Include the file with functions (including getCuisines())
include('cuisineModel.php');
include('db.config.php');
include('mealtypeModel.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <link rel="stylesheet" href="mealsMainStyles.css">

    </head>
    <body>
    <section>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
<?php
// ... (connection code)

$mealtypes = getMealType($conn);

foreach ($mealtypes as $mealtype) {
  $id = $mealtype['meal_type_id'];
  $name = $mealtype['meal-type'];
  // $image_url = $mealtype['image_url']; // (assuming an image_url field)
  $description = substr($mealtype['meal-description'], 0, 100); // Truncate description for brevity

  echo "<div class='card'>";
  // echo "  <img src='$image_url' alt='$name'>";
  echo "  <h3>$name</h3>";
  echo "  <p>$description...</p>";
  echo "  <a href='meal_single.php?id=$id'>Read More</a>"; // Link to a detailed view page
  echo "</div>";
}
?>
</section>
</div>
</div>

</body>
</html>