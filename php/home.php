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

<nav class="navbar navbar-expand-lg navbar-dark bg-info p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
            <span class="logo__1">Cina</span>
            <span class="logo__2">Flix</span>
        </a>

        <div class="search">
            <input type="text" class="form-control" placeholder="Search here...">
            <button class="btn btn-dark"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                
                <li class="nav-item">
                    <button><a class="nav-link mx-2" href="home.php">Home</a></button>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="edit.php">Edit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#footer">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
        <div class="carousel-item active" >
            <img src="https://cdn.teater.co/imgs/review-jatuh-cinta-seperti-di-film-film-2023_890_490.webp" class="d-block w-100 br-30" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Jatuh Cinta Seperti Di Film-Film</h5>
            <p>2023 ‧ Roman/Komedi ‧ 1 j 58 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 5/5</p>
            </div>
        </div>
        <!-- Carousel content 2 -->
        <div class="carousel-item" >
            <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202307/wonka-sixteen_nine.jpg?VersionId=hoEXTrvkL1rXIJ5IQB.iNNpQqtKA0oqw&size=690:388" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Wonka</h5>
            <p>2023 ‧ Fantasi/Musikal ‧ 1 j 56 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4.5/5</p>
            </div>
        </div>
        <!-- Carousel content 3 -->
        <div class="carousel-item" >
            <img src="https://awsimages.detik.net.id/community/media/visual/2023/11/23/film-172-days_169.jpeg?w=600&q=90" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>172 Days</h5>
            <p>2023 ‧ Roman/Drama ‧ 1 j 43 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4.5/5</p>
            </div>
        </div>
        <!-- Carousel content 4 -->
        <div class="carousel-item" >
            <img src="https://rentak.id/wp-content/uploads/2023/12/image_search_1703067684769.jpg" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Aquaman and the Lost Kingdom</h5>
            <p>2023 ‧ Laga/Fantasi ‧ 2 j 4 m</p>
            <p><i class="fa-solid fa-star fa-fade" style="color: #ffea00;"></i> 4/5</p>
            </div>
        </div>
        <!-- Carousel content 5 -->
        <div class="carousel-item" >
            <img src="https://d1tgyzt3mf06m9.cloudfront.net/v3-staging/2023/12/maxresdefault-2-1024x576.jpg" class="d-block" style="height: 100%; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Siksa Neraka</h5>
            <p>2023 ‧ Horor ‧ 1 j 38 m</p>
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
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash"></i></a>';
            echo '<span>';
            echo '<p>' . ucwords($row['Movie_name']) . '</p>';
            echo '<p class="genre">' . $row['Genre'] . '</p>';
            echo '<p class="rating"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
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
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash"></i></a>';
            echo '<span>';
            echo '<p>' . ucwords($row['Movie_name']) . '</p>';
            echo '<p class="genre">' . $row['Genre'] . '</p>';
            echo '<p class="rating"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
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
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash"></i></a>';
            echo '<span>';
            echo '<p>' . ucwords($row['Movie_name']) . '</p>';
            echo '<p class="genre">' . $row['Genre'] . '</p>';
            echo '<p class="rating"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
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
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash"></i></a>';
            echo '<span>';
            echo '<p>' . ucwords($row['Movie_name']) . '</p>';
            echo '<p class="genre">' . $row['Genre'] . '</p>';
            echo '<p class="rating"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
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
            echo '<a href="delete.php?name=' . $row['Movie_name'] . '" class="trash"><i class="fa-solid fa-trash"></i></a>';
            echo '<span>';
            echo '<p>' . ucwords($row['Movie_name']) . '</p>';
            echo '<p class="genre">' . $row['Genre'] . '</p>';
            echo '<p class="rating"><i class="fa-solid fa-star" style="color: #ffc800;"></i>' . $row['Rating'] . '/5</p>';
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