<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

  <title>Gym Review | Single</title>

  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../css/viewstyles.css">
  </head>


<body>


  <div id="site-content">
    <header class="site-header">
      </header>
    <main class="main-content">
      <div class="container">
        <div class="page">
          <div class="breadcrumbs">
            <a href="index.html">Home</a>
            <a href="mealsList.html">Meals</a>
            <span>
              <?php echo $meal['name'] ?>
            </span>
          </div>

          <div class="content">
            <div class="row">
              <div class="col-md-6">
                <figure class="meal-poster custom-poster"><img
                  src="<?php echo $meal['image_url'] ?>" alt="#">
                </figure>
              </div>
              <div class="col-md-6">
                <h2 class="meal-title">
                  <?php echo $meal['name'] ?>
                </h2>
                <div class="meal-summary">
                  <p><?php echo $meal['description'] ?></p>
                  <ul class="meal-meta">
                    <li><strong>Calories:</strong> <?php echo $meal['calories'] ?></li>
                    <li><strong>Carbs:</strong> <?php echo $meal['carbs'] ?>g</li>
                    <li><strong>Protein:</strong> <?php echo $meal['protein'] ?>g</li>
                    <li><strong>Fat:</strong> <?php echo $meal['fat'] ?>g</li>
                    <li><strong>Cuisine:</strong> <?php echo /* query to get cuisine name */ ?></li>
                    <li><strong>Price:</strong> <?php echo $meal['price'] ?></li>
                  </ul>
                </div>
              </div>
            </div> </div>
        </div> </main>
    </body>
  </html>
