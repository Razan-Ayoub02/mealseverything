<?php
// Include the file with functions (including getCuisines())
include('cuisineModel.php');
include('db.config.php');
include('mealtypeModel.php');
include('mealModel.php');
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
          <span><h1>Add Cuisine</h1></span>
        </div>

        <div class="content">
          <form action="cuisineModel.php" method="post" enctype="multipart/form-data">
             <label for="cuisine">cusine:</label>
            <input type="text" name="cuisine" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"> <br><br>

<button type="submit" name="addCuisine-submit">Add Meal</button>
</form>

</div>
      </div>
    </div> </main>
</body>
</html>