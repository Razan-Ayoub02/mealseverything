<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <link rel="stylesheet" href="mealsMainStyles.css">
</head>
<body>
  <main class="main-content">
    <div class="container">
      <div class="page">
        <div class="breadcrumbs">
          <span>Add Meal</span>
        </div>

        <div class="content">
          <form method="post" action="/Movies_App/admin/addMeal" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php if (isset($name)) echo htmlspecialchars($name); ?>" required><br><br>

            <label for="description">Description:</label>
            <textarea name="description" rows="5" cols="50"><?php if (isset($description)) echo htmlspecialchars($description); ?></textarea><br><br>

            <label for="meal_type_id">Meal Type:</label>
            <select name="meal_type_id" required>
              <option value="">Select Meal Type</option>
              <?php
              // Assuming you have a way to fetch meal types from the database
              $meal_types = getMealTypes(); // Replace with your function to get meal types
              foreach ($meal_types as $meal_type) {
                $id = $meal_type['meal_type_id'];
                $name = $meal_type['name'];
                echo "<option value='$id'>$name</option>";
              }
              ?>
            </select><br><br>

            <h3>Nutritional Information</h3>
            <label for="calories">Calories:</label>
            <input type="number" name="calories" value="<?php if (isset($calories)) echo htmlspecialchars($calories); ?>"><br><br>

            <label for="fat">Fat (g):</label>
            <input type="number" step="0.01" name="fat" value="<?php if (isset($fat)) echo htmlspecialchars($fat); ?>"><br><br>

            <label for="carbs">Carbs (g):</label>
            <input type="number" step="0.01" name="carbs" value="<?php if (isset($carbs)) echo htmlspecialchars($carbs); ?>"><br><br>

            <label for="protein">Protein (g):</label>
            <input type="number" step="0.01" name="protein" value="<?php if (isset($protein)) echo htmlspecialchars($protein); ?>"><br><br>

            <label for="sodium">Sodium (mg):</label>
            <input type="number" name="sodium" value="<?php if (isset($sodium)) echo htmlspecialchars($sodium); ?>"><br><br>

            <label for="cuisine_id">Cuisine:</label>
            <select name="cuisine_id">
              <option value="">Select Cuisine</option>
              <?php
              $cuisines = getCuisines(); // Replace with your function to get cuisines
              foreach ($cuisines as $cuisine) {
                $id = $cuisine['cuisine_id'];
                $name = $cuisine['name'];
                echo "<option value='$id'>$name</option>";
              }
              ?>
            </select><br><br>

            <label for="vegetarian">Vegetarian:</label>
            <input type="checkbox" name="vegetarian" value="1" <?php if (isset($vegetarian) && $vegetarian) echo 'checked'; ?>><br><br>

            <label for="vegan">Vegan:</label>
            <input type="checkbox" name="vegan" value="1" <?php if (isset($vegan) && $vegan) echo 'checked'; ?>><br><br>

            <label for="gluten_free">Gluten-Free:</label>
            <input type="checkbox" name="gluten_free" value="1" <?php if (isset($gluten_free) && $gluten_free) echo 'checked'; ?>><br><br>

            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" value="<?php if (isset($price)) echo htmlspecialchars($price); ?>"><br><br>

          
                                <!-- Add the form submit button -->
                                <button type="submit" name="addMovie-submit">Add Movie</button>
                            </form>

                        </div>
                    </div>
                </div> <!-- .container -->
            </main>
            </body>
    </html>