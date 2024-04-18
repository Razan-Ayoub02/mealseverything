<?php
// Include the file with functions (including getCuisines())
include('cuisineModel.php');

// Optional: Include db_config.php if you choose to store credentials there
 //include('db.config.php');
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
          <form >
            <label for="cuisine_id">Cuisine:</label>
            <select name="cuisine_id">
              <option value="">Select Cuisine</option>
              <?php
                // Establish database connection (replace with your actual logic)
                // ... (if not using db_config.php)
               // Replace with your function

                // Call the function with the connection (if applicable)
                $cuisines = getCuisines(); // Pass connection if required

                foreach ($cuisines as $cuisine) {
                    echo "cuisine";
                  $id = $cuisine['cuisine_id'];
                  $name = $cuisine['cuisine-name'];
                  echo "<option value='$id'>$name</option>";
                }

                // Close connection (if established here)
                mysqli_close($conn);
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
