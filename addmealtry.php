<?php
// Include the file with functions (including getCuisines())
include('cuisineModel.php');
include('db.config.php');
include('mealtypeModel.php');
include('mealModel.php');
include('mealController.php');

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
          <form action="mealController.php" method="post" >
             <label for="name">Name:</label>
            <input type="text" name="name" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"> <br><br>

            <label for="description">Description:</label>
            <textarea name="description" rows="5" cols="50"><?php echo isset($_POST['description']) ? htmlspecialchars($_POST['description']) : ''; ?></textarea><br><br>

            <label for="meal_type_id">Meal Type:</label>
            <select name="meal_type_id" required>
              <option value="">Select Meal Type</option>
              <?php
                // Call the function with the connection
                $mealtypes = getMealType($conn);

                foreach ($mealtypes as $mealtype) {
                  $id = $mealtype['meal_type_id'];
                  $name = $mealtype['meal-type'];
                  echo "<option value='$id'";  // Optionally pre-select a meal type (modify logic as needed)
                   if (isset($_GET['meal_type_id']) && $_GET['meal_type_id'] == $id) {
                    echo " selected";
                  }
                   echo ">$name</option>";
                }
              ?>
            </select><br><br>

            <label for="cuisine_id">Cuisine:</label>
            <select name="cuisine_id">
              <option value="">Select Cuisine</option>
              <?php
                // Call the function with the connection
                $cuisines = getCuisines($conn);

                foreach ($cuisines as $cuisine) {
                  $id = $cuisine['cuisine_id'];
                  $name = $cuisine['cuisine-name'];
                  echo "<option value='$id'";
                  if (isset($_GET['cuisine_id']) && $_GET['cuisine_id'] == $id) {
                    echo " selected";
                  }
                 
                  echo ">$name</option>";
                }
              ?>
            </select><br><br>

            <h3>Nutritional Information</h3>
            <label for="calories">Calories:</label>
            <input type="number" name="calories" value="<?php echo isset($_POST['calories']) ? $_POST['calories'] : ''; ?>"> <br><br>

            <label for="fat">Fat (g):</label>
            <input type="number" step="0.01" name="fat" value="<?php echo isset($_POST['fat']) ? $_POST['fat'] : ''; ?>">
            <br><br>

            <label for="carbs">Carbs (g):</label>
            <input type="number" step="0.01" name="carbs" value="<?php echo isset($_POST['carbs']) ? $_POST['carbs'] : ''; ?>">
            <br><br>

            <label for="protein">Protein (g):</label>
            <input type="number" step="0.01" name="protein" value="<?php echo isset($_POST['protein']) ? $_POST['protein'] : ''; ?>">
            <br><br>

            <label for="sodium">Sodium (mg):</label>
            <input type="number" name="sodium" value="<?php echo isset($_POST['sodium']) ? $_POST['sodium'] : ''; ?>">
            <br><br>

            <label for="vegetarian">Vegetarian:</label>
<input type="checkbox" name="vegetarian" value="1" <?php echo isset($_POST['vegetarian']) && $_POST['vegetarian'] == 1 ? 'checked' : ''; ?>>

<label for="vegan">Vegan:</label>
<input type="checkbox" name="vegan" value="1" <?php echo isset($_POST['vegetarian']) && $_POST['vegan'] == 1 ? 'checked' : '';  // typo corrected (should be 'vegan') ?>>

<label for="gluten_free">Gluten-Free:</label>
<input type="checkbox" name="gluten_free" value="1" <?php echo isset($_POST['gluten_free']) && $_POST['gluten_free'] == 1 ? 'checked' : ''; ?>><br><br>

<label for="price">Price:</label>
<input type="number" step="0.01" name="price" value="<?php echo isset($_POST['price']) ? htmlspecialchars($_POST['price']) : ''; ?>">  <br><br>

<label for="image">Choose an Image:</label>
<input type="file" name="image"><br><br>

<button type="submit" name="addMeal-submit">Add Meal</button>
</form>
</div>
      </div>
    </div> </main>
</body>
</html>