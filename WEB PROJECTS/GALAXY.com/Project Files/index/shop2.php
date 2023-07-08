<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shop</title>
  <link rel="stylesheet" href="../CSS/rankings.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700;1,800&display=swap" rel="stylesheet">
  <?php
  session_start();
  $nowtime = time();
  if ($nowtime > $_SESSION['expire']) {
    session_unset();
    session_destroy();
    $message = "Please log in again. Your session has expired.";
    $loginLink = "login.php";
    
    echo "<script>alert('$message'); window.location.href = '$loginLink';</script>";
  }

  if (isset($_SESSION['product'])) {
    $_SESSION['product']++;
} 

echo $_SESSION['product'];
  ?>
  <style>
    .main {
      background-color: #252525;
      padding-top: 30px;
      padding-bottom: 2px;
    }

    .outer {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50px;
      border-radius: 30px;
      background: #85c1b7;
      box-shadow: inset -27px 27px 54px #68978f,
        inset 27px -27px 54px #a2ebdf;
      margin-left: 150px;
      margin-right: 150px;
      margin-top: 6px;

    }

    .outer-2 {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50px;
      border-radius: 30px;
      background: #85c1b7;
      box-shadow: inset -27px 27px 54px #68978f,
        inset 27px -27px 54px #a2ebdf;
      margin-left: 300px;
      margin-right: 300px;
      margin-top: 8px;
      margin-bottom: 20px;
    }

    .card {
      margin: 20px;
      border-radius: 50px;
    }

    .card-body {
      text-align: center;
    }

    .nav-black {
      background-color: #252525;
    }

    .page-link {
      background-color: #252525;
    }

    .card-link {
      color: #68978f;
    }

    .card-link:hover {
      background-color: #252525;
      border-radius: 13px;
      padding: 8px;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-scroll" style="background-color: darkgray; color: aliceblue;">

<div class="container-fluid">
  <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="d-flex justify-content-start align-items-center">
      <i class="fas fa-bars"></i>
    </span>
  </button>
  <a class="navbar-brand " href="#">GALAXY</a>
  <div class="collapse navbar-collapse" id="navbarExample01">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item active">
        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" h                   ref="news.php" rel="nofollow" >News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ranking-insert.php" >Ranking</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="videos.php" >Videos</a>
      </li>
      <li class="nav-item" >
      <button type="button" class="btn btn-dark position-relative" >
      Match Schedules
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            Under Development
            <span class="visually-hidden">unread messages</span>
          </span>
        </button>
      </li>
      
      <li class="nav-item" style="margin-left: 80px;">
        <button type="button" class="btn btn-dark position-relative">
          Awards
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            Under Development
            <span class="visually-hidden">unread messages</span>
          </span>
        </button>
      </li>
    </ul>

    <?php
        if (isset($_SESSION['username'])) {
          echo "<button class='btn btn-outline-success' type='button'>";
          echo $_SESSION['username'];
          echo "</button>";
          echo "____";
          echo '<button type="button" class="btn btn-success position-relative">
          <a href="mail.php"> CheckOut </a>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">' .
           $_SESSION['product'] .
          '<span class="visually-hidden">unread messages</span>
          </span>
          </button>';
          
          
          echo "____";
          echo "<button class='btn btn-outline-success' type='button'>";
          echo "<a  href='Logout.php'>Logout</a>";
          echo "</button>";
        } else {
          echo "<button class='btn btn-outline-success' type='button'>";
          echo " <a href='login3.php'>";
          echo "LOG IN </a>";
          echo "</button>";
        }
        
    ?>
  </div>
</div>
</nav>

    <div class="container-fluid">
      <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="d-flex justify-content-start align-items-center">
          <i class="fas fa-bars"></i>
        </span>
      </button>
      <a class="navbar-brand " href="#">GALAXY</a>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" rel="nofollow" target="_blank">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Ranking</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">MATCH SHEDULES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">HALL OF FAME</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">AWARDS</a>
          </li>
        </ul>
        <?php
        if (isset($_SESSION['username'])) {
          echo "<button class='btn btn-outline-success' type='button'>";
          echo $_SESSION['username'];
          echo "</button>";
          echo "____";
          echo '<button type="button" class="btn btn-success position-relative">
          <a href="mail.php"> CheckOut </a>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">' .
           $_SESSION['product'] .
          '<span class="visually-hidden">unread messages</span>
          </span>
          </button>';
          
          
          echo "____";
          echo "<button class='btn btn-outline-success' type='button'>";
          echo "<a  href='Logout.php'>Logout</a>";
          echo "</button>";
        } else {
          echo "<button class='btn btn-outline-success' type='button'>";
          echo " <a href='login3.php'>";
          echo "LOG IN </a>";
          echo "</button>";
        }
        ?>
      </div>
    </div>
  </nav>

  <a href="shop.php#hot-item">
    <img src="../IMAGES/db842141-8132-46f3-84c4-d7af7dd18298__1600X752.png" class="img-fluid" alt="...">
  </a>
  <div class="main">
    <div class="outer">
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/australia-mens-t20-world-cup-mug_ss4_p-13345244+u-t048qmhrwbgkdim1t49t+v-4c68b91a42674149bababd4adb8ec0d0.png" class="card-img-top" alt="new" height="300px">
        <div class="card-body">
          <h5 class="card-title">Australia mug</h5>
          <p class="card-text">
            Sip your favorite beverage in style with our Australia World Cup Mug.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/icc-mens-t20-world-cup-mug-white_ss4_p-13345246+u-d3dyet01jrtnadohdvld+v-b9119528b821434f8114e70a22312d3d.png" class="card-img-top" alt="aus" height="300px">
        <div class="card-body">
          <h5 class="card-title">World Cup Mug</h5>
          <p class="card-text">Sip your favorite beverage in style with a World Cup-themed mug.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/icc-mens-t20-world-cup-keyring-enamel_ss4_p-13345252+u-ppdd7yul3dl0pehow6l0+v-05f8e5ed911d46c7bdb296695dfab955.png" class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">WorldCup Key Ring</h5>
          <p class="card-text"> Stylish key ring inspired by the excitement of the World Cup.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-align: centers;">ADD to Cart</a>
        </div>
      </div>
    </div>


    <div class="outer-2">
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/icc-mens-t20-world-cup-keyring-pvc_ss4_p-13345269+u-x533mddf3tqtzi1jwqfi+v-037d875d94b7488683c8cac12382c812.png" class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">WorldCup Key Ring</h5>
          <p class="card-text">Stylish key ring featuring the iconic World Cup design. Perfect accessory.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/icc-mens-t20-world-cup-magnet_ss4_p-13345260+u-ff7nmszmoumjzz80u55p+v-44283b5fac934a138c351ff9ead16001.png" class="card-img-top" alt="bottle" height="300px">

        <div class="card-body">
          <h5 class="card-title">World Cup Magnet</h5>
          <p class="card-text">
            Decorate your space with a vibrant World Cup magnet. Show your support!</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>

    </div>

    <nav class="nav-black" aria-label="Page navigation example bg-dark">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="shop.php">Previous</a></li>
        <li class="page-item"><a class="page-link" href="shop.php">1</a></li>
        <li class="page-item"><a class="page-link" href="shop2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="shop2.php">Next</a></li>
      </ul>
    </nav>



    <footer class="text-center text-white" style="background-color: rgb(70, 70, 70)">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

          <!-- Google -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #252525">
        © 2023 Copyright:
        <a class="text-white" href="#">GALAXY</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>