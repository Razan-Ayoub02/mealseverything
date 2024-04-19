<?php
class mealModel
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
        echo "console.log('hello from  meal construcotr');";

    }
    public function createMeal($meal){
 echo "console.log('hello from create meal');";
        // Include configuration file
        
        // Check if form is submitted
        if (isset($_POST['addMeal-submit'])) {
        
          $name = $_POST['name'];
          $description = $_POST['description'];
          $meal_type_id = (int) $_POST['meal_type_id']; // Cast to integer for safety
          $cuisine_id = (int) $_POST['cuisine_id']; // Cast to integer for safety
          $calories = (int) $_POST['calories']; // Cast to integer for safety (optional)
          $fat = $_POST['fat'];
          $carbs = $_POST['carbs'];
          $protein = $_POST['protein'];
          $sodium = (int) $_POST['sodium']; // Cast to integer for safety (optional)
          $vegetarian = isset($_POST['vegetarian']) ? 1 : 0; // Check if checkbox is checked
          $vegan = isset($_POST['vegan']) ? 1 : 0; // Check if checkbox is checked
          $gluten_free = isset($_POST['gluten_free']) ? 1 : 0; // Check if checkbox is checked
          $price = $_POST['price'];
        
          // ... (database connection and insert query logic)
          $sql = "INSERT INTO meals(name, description, meal_type_id, cuisine_id, calories, fat, carbs, protein, sodium, vegetarian, vegan, gluten_free, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

          // Prepare the statement (optional, but recommended for security)
          $stmt = mysqli_prepare($conn, $sql);
          
          // Bind parameters to the statement
          mysqli_stmt_bind_param($stmt, "sssssssssssssss", $name, $description, $meal_type_id, $cuisine_id, $calories, $fat, $carbs, $protein, $sodium, $vegetarian, $vegan, $gluten_free, $price);
          
          // Execute the statement
          mysqli_stmt_execute($stmt);
          
          // Check for errors
          if (mysqli_stmt_error($stmt)) {
            die("Error inserting meal: " . mysqli_stmt_error($stmt));
          }
          
          // Handle image upload (optional)
          // ...
        
          // Redirect or display success message
          header("Location: addmealtry.php"); // Redirect to confirmation page
          // or
          echo "Meal added successfully!";
        } else {
          // Handle case where form is not submitted
          echo "Error: Form not submitted.";
        }
        
      
        


    }

}