<?php
require("db.php");

// need to seller to access dashboard
session_start();

$username2 = $_COOKIE['username2'];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Buyer dashboard</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/tooplate-moso-interior.css" rel="stylesheet">
    </head>
    
    <body class="shop-listing-page">

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">Urban<span class="tooplate-red">Nest </span><span class="tooplate-green">Plaza</span></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php#section_1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="deleteformadmin.php">DELETE A LISTING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="admin_login.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <header class="site-header d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h1 class="text-white">Welcome Admin ( <?php
        $username2 = $_COOKIE['username2'];
        echo $username2; ?>)</h1>
                        </div>

                    </div>
                </div>
            </header>
           

            <section class="shop-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-6 col-12">
                            <h2>Properties</h2>

                            <div class="row">

                            <?php
// connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=ssirnam1', 'ssirnam1', 'ssirnam1');

// query to retrieve the data from the database
$sql = "SELECT * FROM cards LIMIT 5";
$stmt = $pdo->query($sql);

// loop through the data and create a card for each row
foreach ($stmt as $row) {
    $image_path = 'img/' . $row['image'];

    // echo $image_path;

    echo '<div class="flip-card">';
    echo '<div class="flip-card-inner">';
    echo '<div class="flip-card-front">';
   echo '<img src="' . $image_path . '">';
    echo '</div>';
    echo '<div class="flip-card-back">';
    echo '<p><b>Listing ID:</b> ' . $row['id'] . '</p>';
    echo '<p><b>Owner:</b> ' . $row['seller_user_id'] . '</p>';
    echo '<p><b> Apartment: </b>' . $row['name'] . '</p>';
    echo '<p><b> Address: </b>' . $row['address'] . '</p>';
    echo '<p><b>Age: </b>' . $row['age'] . '</p>';
    echo '<p><b>No. of Beds: </b>' . $row['bed'] . '</p>';
    echo '<p><b>No. of Baths: </b>' . $row['ad'] . '</p>';
    echo '<p><b>Garden available: </b>' . $row['garden'] . '</p>';
    echo '<p><b>Parking available: </b>' . $row['pa'] . '</p>';
    echo '<p><b>Price: </b>' . $row['tax'] . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36363e" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,186.7C320,192,400,160,480,149.3C560,139,640,149,720,176C800,203,880,245,960,250.7C1040,256,1120,224,1200,229.3C1280,235,1360,277,1400,298.7L1440,320L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </main>


        <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-5 col-12 mb-3">
                        <h3><a href="index.php" class="custom-link mb-1">UrbanNest Plaza</a></h3>

                        <p class="text-white">Since 2023, We Sold Beautiful Homes for better Lives</p>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12 ms-lg-auto mb-3">
                        <h3 class="text-white mb-3">Store</h3>

                        <p class="text-white mt-2">
                            <i class="bi-geo-alt"></i>
                            Atlanta, Georgia
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <h3 class="text-white mb-3">Contact Info</h3>

                            <p class="text-white mb-1">
                                <i class="bi-telephone me-1"></i>

                                <a href="tel: 090-080-0760" class="text-white">
                                    123-456-7890
                                </a>
                            </p>

                            <p class="text-white mb-0">
                                <i class="bi-envelope me-1"></i>

                                <a href="mailto:info@company.com" class="text-white">
                                    info@company.com
                                </a>
                            </p>
                    </div>

                    <div class="col-lg-6 col-md-7 copyright-text-wrap col-12 d-flex flex-wrap align-items-center mt-4 ms-auto">
                        <p class="copyright-text mb-0 me-4">Copyright © UrbanNest Plaza 2023</p>

                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-twitter bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-facebook bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-instagram bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-pinterest bi-pinterest"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link social-icon-whatsapp bi-whatsapp"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>

    </body>

<!-- CSS styles for the card -->
<style>
.flip-card1{
    background-color: #fde172;
    margin-top: 20%;
    height: 400px;
    width: 300px;
    margin-right: 20px;
}
.flip-card1 img{
    margin-top: 43%;
    margin-left: 30%;
}
.flip-card {
    margin-top: 20%;
    
    margin-right: 20px ;
  position: relative;
    /* position: absolute; */
    background-color: transparent;
    width: 300px;
    height: 400px;
    border: 1px solid #f1f1f1;
    perspective: 1000px;
    top: 40%;
    padding: 10px 10px 10 px 10px;

}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
   line-height: 1em;
  width: 100%;
  height: 100%;
  text-align: left;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  color: black;
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  color: black;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}
.flip-card-front img{
height: 400px;
width: 300px;
}
.flip-card-back p{
    text-align: left;
    color: #2C332B;
}

/* Style the back side */
.flip-card-back {
  background-color: #fde172;
  color: #2C332B;
  text-align: left;
   line-height: 1em;
  transform: rotateY(180deg);
}
</style>

    </div>

    </body>

</html>