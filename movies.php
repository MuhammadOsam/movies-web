<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14a8e029fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz ,wght,FILL,GRAD@24,400,0,0" />
   <link rel="stylesheet" href="css/movies.css" />  
    <link rel="stylesheet" href="css/slider.css">
</head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h3> LOGO. </h3></a>
  
          <div class="icon-sec-main">
            <h4>Categories <img src="img/categories.png" width="35px" height="30px" alt=""></h4>
          </div>
        </div>
      </nav>
    </section>
<section>
  <div id="app">
  <div class="btn btn-slider-section"><a>Trending <span class="fa-solid fa-fire"></span></a></div>
    <div class="demo-slider">
      <!-- Material slider -->
      <div class="swiper swiper-material swiper-initialized swiper-horizontal swiper-watch-progress" style="--swiper-material-slide-size: 136px;">
        <div class="swiper-wrapper" style="cursor: grab;">
          <div class="swiper-slide   swiper-li swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" style=" --swiper-material-scale: 1; margin-right: 16px;">
            <!-- Wrap each slide content with "swiper-material-wrapper" and "swiper-material-content" elements -->
            <div class="swiper-material-wrapper" style="width: 100%; transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-material-content">
                <!-- Use data-swiper-material-scale to add scale effect on required elements -->
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/photo-1.png" style="transform: scale(1);">
                <!-- Use swiper-material-animate-opacity class to add opacity animation on required elements -->
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 1;">Slide 1</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide   swiper-li swiper-slide-visible swiper-slide-fully-visible swiper-slide-next" style="width: 136px; --swiper-material-scale: 0.5323529411764706; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 53.2353%; transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/photo-1.png" style="transform: scale(1.11691);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0.0127659;">Slide 2</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li" style=" --swiper-material-scale: 0.23235294117647057; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 23.2353%; transform: translate3d(-63.6px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/photo-1.png" style="transform: scale(1.19191);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide
                  3</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li" style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-168px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/photo-1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 4</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li"  style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-320px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 5</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide  swiper-li"  style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-472px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/2.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 6</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-li"  style="--swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-624px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/photo-1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 7</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-li"  style="--swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-776px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/photo-1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 8</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-li"  style="--swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-928px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/2.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 9</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style=" --swiper-material-scale: 0.00001; margin-right: 16px;">
            <div class="swiper-material-wrapper" style="width: 0.001%; transform: translate3d(-1080px, 0px, 0px);">
              <div class="swiper-material-content">
                <img class="demo-material-image" data-swiper-material-scale="1.25" src="img/1.png" style="transform: scale(1.25);">
                <span class="demo-material-label swiper-material-animate-opacity" style="opacity: 0;">Slide 10</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "movies_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get movie ID from URL
$movieId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch movie details
$sql = "SELECT * FROM movies WHERE id = $movieId";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    $movie = $result->fetch_assoc();

    ?>

    <section class="movies-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 moviies-headingg">
                    <div class="video-sec">
                        <video controls>
                            <source src="./video/<?php echo htmlspecialchars($movie['film_upload']); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h1><?php echo htmlspecialchars($movie['title']); ?></h1>
                    <p><?php echo htmlspecialchars($movie['actors']); ?></p>
                    <h3><b class="movie-heading-1">Language:</b> <?php echo htmlspecialchars($movie['language']); ?></h3>
                    <h4><b class="movie-heading-2">Subtitles:</b> <?php echo htmlspecialchars($movie['subtitles']); ?></h4>
                    <h5><b class="movie-heading-3">Year:</b> <?php echo htmlspecialchars($movie['year']); ?></h5>
                    <h6><b class="movie-heading-4">Category:</b> <?php echo htmlspecialchars($movie['category']); ?></h6>

                    <div class="pt-5">
                        <h1>Screenshots</h1>
                        <div class="imgs-sreenshot">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_1']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_2']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_3']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_4']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_5']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_6']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_7']); ?>" class="imges-main-1" alt="">
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <img src="movies_screenshot/<?php echo htmlspecialchars($movie['screenshot_8']); ?>" class="imges-main-1" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-12 col-md-4 col-lg-4"></div>
            </div>
        </div>
    </section>

    <?php
} else {
    echo "No movie found.";
}

$conn->close();
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./js/style.js"></script>
  </body>
</html>