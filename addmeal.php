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
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="description">Description:</label>
            <textarea name="description" rows="5" cols="50"></textarea><br><br>

            <label for="meal_type_id">Meal Type:</label>
            <select name="meal_type_id" required>
              <option value="">Select Meal Type</option>
            </select><br><br>

            <h3>Nutritional Information</h3>
            <label for="calories">Calories:</label>
            <input type="number" name="calories"><br><br>

            <label for="fat">Fat (g):</label>
            <input type="number" step="0.01" name="fat"><br><br>

            <label for="carbs">Carbs (g):</label>
            <input type="number" step="0.01" name="carbs"><br><br>

            <label for="protein">Protein (g):</label>
            <input type="number" step="0.01" name="protein"><br><br>

            <label for="sodium">Sodium (mg):</label>
            <input type="number" name="sodium"><br><br>

           

            <label for="vegetarian">Vegetarian:</label>
            <input type="checkbox" name="vegetarian" value="1">

            <label for="vegan">Vegan:</label>
            <input type="checkbox" name="vegan" value="1">

            <label for="gluten_free">Gluten-Free:</label>
            <input type="checkbox" name="gluten_free" value="1"><br><br>

            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price"><br><br>

            <label for="image">Choose an Image:</label>
            <input type="file" name="image"><br><br>

            <button type="submit" name="addMeal-submit">Add Meal</button>
          </form>

        </div>
      </div>
    </div> </main>
</body>
</html>

