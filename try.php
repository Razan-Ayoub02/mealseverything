<?php
// Include the file with functions (including getCuisines())
include('cuisineModel.php');
include('db.config.php');

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <link rel="stylesheet" href="mealsMainStyles.css">
  <link rel="stylesheet" href="mealviewStyles.css">
</head>
<body>
  <main class="main-content">
    <div class="container">
      <div class="page">
        <div class="breadcrumbs">
          <span><h1>Add Meal</h1></span>
        </div>

        <div class="content">
          <form>
            <label for="cuisine_id">Cuisine:</label>
            <select name="cuisine_id">
              <option value="">Select Cuisine</option>
              <?php
                // Call the function with the connection
                $cuisines = getCuisines($conn);

                foreach ($cuisines as $cuisine) {
                  $id = $cuisine['cuisine_id'];
                  $name = $cuisine['cuisine-name'];
                  echo "<option value='$id'>$name</option>";
                }
              ?>
            </select><br><br>

            <button type="submit" name="addMovie-submit">Add Meal</button>
          </form>

        </div>
      </div>
    </div>
  </main>
</body>
</html>

