<!doctype html>
<head>
<style>
  .gym {
    border: 1px solid #ffaa3c;

    border-radius: 8px;

    margin-right: 10px;

    padding: 10px;

    height: 350px;

  }

  .gym-title {
    margin-top: 10px;

  }
</style>
</head>
<body>
<h1>Gyms Available</h1>
<form method="post" action="/Gyms_App/search-gyms">
  <label for="searchTerm">Search Gyms:</label>
  <input type="text" name="searchTerm">
  <input type="hidden" name="page" value="<?php echo isset($_GET['page']) ? intval($_GET['page']) : 1; ?>">
  <button type="submit">Search</button>
</form>
<br>
<div class="gym-list">
  <?php
  // Example pagination logic, you may need to adjust this based on your actual requirements
  $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
  $gymsPerPage = 4; // number of gyms per page

  $totalGyms = count($gyms);
  $totalPages = ceil($totalGyms / $gymsPerPage);
  $startIndex = ($currentPage - 1) * $gymsPerPage;

  // Display gyms for the current page
  for ($i = $startIndex; $i < min($startIndex + $gymsPerPage, $totalGyms); $i++) {
    $gym = $gyms[$i];
    ?>

    <div class="gym" style="text-align:center">
      <figure class="gym-poster">
        <img src="<?php echo $gym['cover_photo']; ?>" alt="Gym Image" />
      </figure>
      <div class="gym-title">
        <a href="<?php echo 'gyms/' . $gym['Gym_ID'] ?>">
          <?php echo $gym['Name']; ?>
        </a>
      </div>
      <p>
        </p>
    </div>

  <?php } //show the trainers as well and a join gym button ?>
</div>



<div class="pagination">
  <?php
  // Display pagination links
  for ($page = 1; $page <= $totalPages; $page++) {
    $activeClass = ($page == $currentPage) ? 'current' : '';
    ?>
    <a href="?page=<?php echo $page; ?>" class="page-number <?php echo $activeClass; ?>">
      <?php echo $page; ?>
    </a>
  <?php
  }
  ?>
</div>
</body>
</html>
