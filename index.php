<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14a8e029fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz ,wght,FILL,GRAD@24,400,0,0" />
     <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/style.css" />  
    <link rel="stylesheet" href="css/slider.css">
    
</head>
  <body>
    
    <section>
      <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container">
          <a class="navbar-brand" href="#"><h3> LOGO. </h3></a>
          <form class="d-flex navbar-b-search" role="search" method="GET" action="">
                <div class="input-group">
                    <button class="input-group-text bg-white border-end-0 btn" type="submit"><i class="fas fa-search"></i></button>
                    <input class="form-control border-start-0" name="query" type="search" placeholder="Search movie or Shows..." aria-label="Search" required >
                </div>
            </form>
          <div class="icon-sec-main">
            <h4>Categories <img src="img/categories.png" width="35px" height="30px" alt=""></h4>
          </div>
        </div>
      </nav>
    </section>
<section>
  <div id="app">
  <div class="btn btn-slider-section"><a href="index.php">Trending <span class="fa-solid fa-fire"></span></a></div>
    <div class="demo-slider">
      <!-- Material slider -->
      <div class="swiper swiper-material swiper-initialized swiper-horizontal swiper-watch-progress" style="--swiper-material-slide-size: 136px;">
        <div class="swiper-wrapper" style="cursor: grab;">
          <div class="swiper-slide   swiper-li swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" style=" --swiper-material-scale: 1; margin-right: 16px;">
            <!-- Wrap each slide content with "swiper-material-wrapper" and "swiper-material-content" elements -->
            <div class="swiper-material-wrapper" style="width: 100%; transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-material-content">
                <!-- Use data-swiper-material-scale to add scale effect on required elements -->
                <img class="demo-material-image " data-swiper-material-scale="1.25" src="slider-image/photo-1.png" style="transform: scale(1);">
                <!-- Use swiper-material-animate-opacity class to add opacity animation on required elements -->
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 1;">Slide 1</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide   swiper-li swiper-slide-visible swiper-slide-fully-visible swiper-slide-next" style="width: 136px; --swiper-material-scale: 0.5323529411764706; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 53.2353%; transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/photo-1.png" style="transform: scale(1.11691);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0.0127659;">Slide 2</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li" style=" --swiper-material-scale: 0.23235294117647057; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 23.2353%; transform: translate3d(-63.6px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/photo-1.png" style="transform: scale(1.19191);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide
                  3</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li" style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-168px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/photo-1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 4</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li"  style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-320px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 5</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li"  style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-472px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/2.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 6</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-li"  style="--swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-624px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/photo-1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 7</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-li"  style="--swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-776px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/photo-1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 8</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-li"  style="--swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-928px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/2.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 9</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-1080px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="slider-image/1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 10</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
<section class="movies-section">
<div class="btn btn-movies-section"><a href="index.php">Latest <img src="img/time-left.png" alt="" style="margin-left: 10px; margin-top: -5px;" width="20px" height="15px"></a></div>
  
    <div class="contaier">
        <div class="row">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root"; 
            $password = ""; 
            $dbname = "movies_db"; 

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Pagination setup
            $limit = 30; // Number of movies per page
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $limit;

            // Search functionality
            $query = isset($_GET['query']) ? $_GET['query'] : '';
            $searchCondition = $query ? "WHERE title LIKE '%" . $conn->real_escape_string($query) . "%'" : '';

            $sql = "SELECT id, title, year, language, image_url FROM movies $searchCondition LIMIT $limit OFFSET $offset";
            $result = $conn->query($sql);

            // Fetch total number of movies for pagination
            $totalSql = "SELECT COUNT(*) as total FROM movies $searchCondition";
            $totalResult = $conn->query($totalSql);
            $total = $totalResult->fetch_assoc()['total'];
            $totalPages = ceil($total / $limit);

            // Display movies
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-6 col-lg-4 col-xl-3 mb-3">';
                    echo '<a href="movies.php?id=' . $row["id"] . '">';
                    echo '<div class="card" style="height:500px;">';
                    echo '<div class="imgBox imagemContainer">';
                    echo '<img src="movies_pics/' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["title"]) . '" class="card-img-top">';
                    echo '</div>';
                    echo '<div class="content">';
                    echo '<h3 class="title pb-3">' . htmlspecialchars($row["title"]) . '</h3>';
                    echo '<ul>';
                    echo '<li class="tag">' . htmlspecialchars($row["year"]) . '</li>';
                    echo '<li class="tag tag-1">' . htmlspecialchars($row["language"]) . '</li>';
                    echo '<li class="tag tag-3">4K and below</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
            } else {
                echo "<p>No movies found.</p>";
            }

            // Pagination links
            echo '<nav aria-label="Page navigation">';
            echo '<ul class="pagination">';
            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '">';
                echo '<a class="page-link" href="?page=' . $i . '&query=' . urlencode($query) . '">' . $i . '</a>';
                echo '</li>';
            }
            echo '</ul>';
            echo '</nav>';

            $conn->close();
            ?>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./js/style.js"></script>
  </body>
</html>