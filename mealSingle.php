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
      <div class="container">
        <div class="logout-button">
          <?php
          session_start();
          if (isset($_SESSION["role"])) {
            echo "<a href='/Gyms_App/admin' class=''>Admin Portal<i class='fa-solid fa-user-tie' style='margin-left:5px'></i></a>";
          }
          ?>

          <a href="/Gyms_App/logout" class="logout-link">Logout<i class="fa-solid fa-right-from-bracket"
              style="margin-left:5px"></i></a>
        </div>
      
    </header>
    <main class="main-content">
      <div class="container">
        <div class="page">
          <div class="breadcrumbs">
            <a href="index.html">Home</a>
            <a href="gymsList.html">Gym Description</a>
            <span>
              <?php echo $gym['Name'] ?>
            </span>
          </div>

          <div class="content">
            <div class="row">
              <div class="col-md-6">
                <figure class="gym-poster custom-poster"><img
                    src="<?php echo $gym['cover_photo'] ?>" alt="#">
                </figure>
              </div>
              <div class="col-md-6">
                <h2 class="gym-title">
                  <?php echo $gym['Name'] ?>
                </h2>
                <div class="gym-summary">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

            
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                        sed.</p>
                                </div>
                                <ul class="movie-meta">
                                    <li><strong>Rating:</strong>
                                        <div class="star-rating" title="Rated 4.00 out of 5"><span
                                                style="width:80%"><strong class="rating">4.00 make them dynamic</strong> out of 5</span>
                                        </div>
                                    </li>
                                    <li><strong>Location:</strong>
                                        <?php echo $gym['Location'] ?>
                                    </li>
                                    <li><strong>opening hours:</strong>
                                        <?php echo $gym['hours'] ?>
                                    </li>
                                    <li><strong>Director:</strong>
                                        <?php echo $gym['Director'] ?>
                                    </li>



                                </ul>
                            </div>
                        </div> <!-- .row -->

                    </div>
                </div>
            </div> <!-- .container -->
        </main>
        </body>
        </html>