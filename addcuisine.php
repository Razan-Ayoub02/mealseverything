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
          <span><h1>Add Meal</h1></span>
        </div>

        <div class="content">
          <form action="cusineModel.php" method="post" enctype="multipart/form-data">
             <label for="cuisine">cusine:</label>
            <input type="text" name="cuisine" required value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"> <br><br>

<label for="image">Choose an Image:</label>
<input type="file" name="image"><br><br>

<button type="submit" name="addMeal-submit">Add Meal</button>
</form>
