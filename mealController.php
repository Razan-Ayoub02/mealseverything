<?php
class mealController
{
    public $name;
    public $description;
    public $price;
    public $image_url;
  
    public $meal_type_id; // Foreign key referencing a meal type table
    public $cuisine_id;    // Foreign key referencing a cuisine table
  
    public $calories;
    public $fat;
    public $carbs;
    public $protein;
    public $sodium;
  
    public $vegetarian;  // Boolean (1 or 0)
    public $vegan;       // Boolean (1 or 0)
    public $gluten_free;
    public function __construct($mealModel)
    {
        // $this->db = $conn;
        $this->mealModel = $mealModel;
    }
    public function ShowAddMeal()
    {
      // session_start();
    
      // if (!isset($_SESSION["email"]) || !isset($_SESSION["role"])) {
      //   header('Location:/Meals_App/login');
      //   return;
      // }
    
      if (isset($_POST["addMeal-submit"])) {
        $this->name = isset($_POST['name']) ? $_POST['name'] : '';
        $this->description = isset($_POST['description']) ? $_POST['description'] : '';
        $this->price = isset($_POST['price']) ? (float) $_POST['price'] : 0.0; // Cast to float for price
        $this->image_url = isset($_POST['image_url']) ? $_POST['image_url'] : '';
    
        // ... other meal properties (vegetarian, vegan, gluten_free, etc.)
        // Assign values from the submitted form data using $_POST
    
        if ($this->addMeal() === true) {
          echo "submitted";
          header('Location:/mealModel.php');

        } else {
          $error = 'Meal Name must be unique'; // Or a more specific error message
          echo "console.log('error 2')";
          include 'db.config.php';
          echo "error2";
        }
      } else {
        include 'addMealtry.php';
        echo "error3";
      }
    }
    
    public function addMeal()
    {
      // ... (rest of the function logic)
      // Assuming $this->mealModel has a createMeal method
    
    //   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->name = $_POST['name'];
        $this->description = $_POST['description'];
        $this->price = (float) $_POST['price']; // Cast to float for price
        $this->image_url = $_POST['image_url'];
    
        // ... other meal properties (vegetarian, vegan, gluten_free, etc.)
        // Assign values from the submitted form data using $_POST
    
        $meal = array(
          "name" => $this->name,
          "description" => $this->description,
          "price" => $this->price,
          "image_url" => $this->image_url,
          "calories" => $this->calories,
          "fat" => $this->fat,
          "carbs" => $this->carbs,
          "protein" => $this->protein,
          "sodium" => $this->sodium,
          // ... other meal properties in key-value pairs
        );
  

        if ($this->mealModel->createMeal($meal)) {
          return true;
        } else {
          return false;
        }
    //   }
    }
    


}
?>