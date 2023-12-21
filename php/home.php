<?php

session_start();
include 'connection.php';

    if(!isset($_SESSION['username'])){
        header("location:login.php");
        exit();
    }
    if(isset($_SESSION['username'])){
        $username  = $_SESSION['username'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css?v=<?php echo time(); ?>" />
    <title>Cina Flix</title>
    </head>
<body>

<header>
    <!-- Logo dan Search Bar -->
    <div class="wrapper-logo">
    <div class="logo">
        <a href="#first">
            <span class="logo__1">Cina</span>
            <span class="logo__2">Flix</span>
        </a>
        <!-- Search bar tidak berfungsi -->
        <div class="search">
        <input type="text" class="form-control" placeholder="Search here...">
        <button class="btn btn-dark"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
        </div>
    </div>
    </div>
    
    <!-- Navigasi -->
    <nav>
        <ul class="nav__ul">
            <li><button><a href="#first">Home</a></button></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="edit.php">Edit</a></li>
            <li><a href="#footer">About Us</a></li>
        </ul>
    </nav>
</header>

<!-- Container main -->
<main class="container">
    <!-- Pembungkus carousel -->
    <div class="wrap-carousel">
    <!-- Teks Pembuka -->
    <div  class="wrap-h1">
        <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
        <h1>On Cinema</h1>
    </div>
        <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide w-75 m-auto mb-5">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
        <!-- Carousel content 1 -->
        <div class="carousel-item active" style="width: 100%; height: 550px;">
            <img src="https://pifa.co.id/img_berita/1693382609.webp" class="d-block w-100 br-30" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>His Only Son</h5>
            <p>2023 ‧ Drama/Drama ‧ 1 j 45 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 5/5</p>
            </div>
        </div>
        <!-- Carousel content 2 -->
        <div class="carousel-item" style="width: 100%; height: 550px;">
            <img src="https://awsimages.detik.net.id/community/media/visual/2023/05/15/film-petualangan-sherina-2_169.jpeg?w=600&q=90" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Petualangan Sherina 2</h5>
            <p>2023 ‧ Drama/Laga ‧ 2 j 6 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4.5/5</p>
            </div>
        </div>
        <!-- Carousel content 3 -->
        <div class="carousel-item" style="width: 100%; height: 550px;">
            <img src="https://awsimages.detik.net.id/community/media/visual/2023/07/06/di-ambang-kematian_169.jpeg?w=1200" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Diambang Kematian</h5>
            <p>2023 ‧ Horor/Cerita seru ‧ 1 j 37 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4.5/5</p>
            </div>
        </div>
        <!-- Carousel content 4 -->
        <div class="carousel-item" style="width: 100%; height: 550px;">
            <img src="https://idseducation.com/wp-content/uploads/2022/07/the-marvels2.jpeg" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>The Marvels</h5>
            <p>2023 ‧ Petualangan/Laga ‧ 1 j 45 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4/5</p>
            </div>
        </div>
        <!-- Carousel content 5 -->
        <div class="carousel-item" style="width: 100%; height: 550px;">
            <img src="https://dx35vtwkllhj9.cloudfront.net/universalstudios/five-nights-at-freddys/images/regions/us/header.jpg" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Five Nights at Freddy's</h5>
            <p>2023 ‧ Horor/Adaptasi ‧ 1 j 49 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4.5/5</p>
            </div>
        </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <!-- Category My Favorite -->
    <div id="first" class="wrap-h1 ">
    <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
    <h1>My Favorite</h1>
    </div class>
    <!-- Pembungkus Card -->
    <div class="wrap-card">
    <?php
        $result = $conn->query("SELECT * FROM movie WHERE Category = 'My Favorite'");

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['Photo'] . '" class="card-img-top" alt="Movie Poster">';
            echo '<div class="card-body">';
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash" style="color: #e20000;"></i></a>';
            echo '<span>';
            echo '<p>' . $row['Movie_name'] . '</p>';
            echo '<p style="font-size: 10px;">' . $row['Genre'] . '</p>';
            echo '<p style="font-size: 12px;"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
            echo '</span>';
            echo '</div>';
            echo '</div>';
        }
    ?>
    </div>

    <!-- Category Marvel Collection -->
    <div id="first" class="wrap-h1 ">
    <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
    <h1>Marvel Collection</h1>
    </div class>
    <!-- Pembungkus Card -->
    <div class="wrap-card">
    <?php
        $result = $conn->query("SELECT * FROM movie WHERE Category = 'Marvel Collection'");

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['Photo'] . '" class="card-img-top" alt="Movie Poster">';
            echo '<div class="card-body">';
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash" style="color: #e20000;"></i></a>';
            echo '<span>';
            echo '<p>' . $row['Movie_name'] . '</p>';
            echo '<p style="font-size: 10px;">' . $row['Genre'] . '</p>';
            echo '<p style="font-size: 12px;"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
            echo '</span>';
            echo '</div>';
            echo '</div>';
        }
    ?>
    </div>

    
    <!-- Category Indonesia Movies -->
    <div id="first" class="wrap-h1 ">
        <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
        <h1>Indonesia Movies</h1>
    </div class>
    <!-- Pembungkus Card -->
    <div class="wrap-card">
        <?php
        $result = $conn->query("SELECT * FROM movie WHERE Category = 'Indonesia Movies'");
        
        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['Photo'] . '" class="card-img-top" alt="Movie Poster">';
            echo '<div class="card-body">';
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash" style="color: #e20000;"></i></a>';
            echo '<span>';
            echo '<p>' . $row['Movie_name'] . '</p>';
            echo '<p style="font-size: 10px;">' . $row['Genre'] . '</p>';
            echo '<p style="font-size: 12px;"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
            echo '</span>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    
    <!-- Category Anime -->
    <div id="first" class="wrap-h1 ">
    <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
    <h1>Anime</h1>
    </div class>
    <!-- Pembungkus Card -->
    <div class="wrap-card">
    <?php
        $result = $conn->query("SELECT * FROM movie WHERE Category = 'Anime'");

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['Photo'] . '" class="card-img-top" alt="Movie Poster">';
            echo '<div class="card-body">';
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash" style="color: #e20000;"></i></a>';
            echo '<span>';
            echo '<p>' . $row['Movie_name'] . '</p>';
            echo '<p style="font-size: 10px;">' . $row['Genre'] . '</p>';
            echo '<p style="font-size: 12px;"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
            echo '</span>';
            echo '</div>';
            echo '</div>';
        }
    ?>
    </div>

    <!-- Category K-Movie -->
    <div id="first" class="wrap-h1 ">
    <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
    <h1>K-Movie</h1>
    </div class>
    <!-- Pembungkus Card -->
    <div class="wrap-card">
    <?php
        $result = $conn->query("SELECT * FROM movie WHERE Category = 'K-Movie'");

        while ($row = $result->fetch_assoc()) {
            echo '<div class="card">';
            echo '<img src="' . $row['Photo'] . '" class="card-img-top" alt="Movie Poster">';
            echo '<div class="card-body">';
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash" style="color: #e20000;"></i></a>';
            echo '<span>';
            echo '<p>' . $row['Movie_name'] . '</p>';
            echo '<p style="font-size: 10px;">' . $row['Genre'] . '</p>';
            echo '<p style="font-size: 12px;"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
            echo '</span>';
            echo '</div>';
            echo '</div>';
        }
    ?>
    </div>

</main>

<footer id="footer" class="container-fluid m-0">
    <div class="wrap-footer">
        <div class="footer-1">
        <h2>About Us</h2>
        <p>Made with love by Christian and Fico</p>
        </div>
        <div class="footer-2">
        <a href="">
            <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
        </a>
        <a href="">
            <i class="fa-brands fa-imdb" style="color: #ffffff;"></i>
        </a>
        <a href="">
            <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
        </a>
        
        </div>
    </div>
    </div>
    <div class="copyright">
    <p>&copyCopyright 2023. Cina Flix</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/8b0b03f283.js" crossorigin="anonymous"></script>
</body>
</html>