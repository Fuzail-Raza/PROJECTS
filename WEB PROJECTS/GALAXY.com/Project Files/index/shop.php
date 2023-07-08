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
      padding-bottom: 20px;
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
      margin-bottom: 15px;
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
            <a class="nav-link" href="news.php" rel="nofollow" >News</a>
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
          echo " <a href='login.php'>";
          echo "LOG IN </a>";
          echo "</button>";
        }
        ?>
      </div>
    </div>
  </nav>

  <a href="#hot-item">
    <img src="../IMAGES/db842141-8132-46f3-84c4-d7af7dd18298__1600X752.png" class="img-fluid" alt="...">
  </a>
  <div class="main">
    <div class="outer">
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/new-zealand-t20-2022-black-caps-replica-shirt_ss4_p-13345245+u-mpl2lo68ywhy3fv17zwe+v-6f7aab7d058f43c59f67081466044f13.PNG" class="card-img-top" alt="new" height="300px">
        <div class="card-body">
          <h5 class="card-title">New zealand T-Shirt
          </h5>
          <p class="card-text">Stylish, com table, durable New Zealand T-Shirt for cricket enthusiasts</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/australia-mens-t20-world-cup-2022-tipped-polo-shirt_ss4_p-13346622+u-cudigo23rif67b41vryd+v-56b70df1368544678e3f926e4aa4f5d2.WEBP" class="card-img-top" alt="aus" height="300px">
        <div class="card-body">
          <h5 class="card-title">Australia Men</h5>
          <p class="card-text">
            Fashionable, high-quality Australian Men's T-Shirt for trendy and casual lsook.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;" id="hot-item">
        <img src="../IMAGES/icc-womens-t20-world-cup-logo-graphic-t-shirt-navy_ss4_p-13385835+u-agjb80mcuiipfjiq99pi+v-80c1fe7c74de4a3cbc57024f217cefa5.WEBP" class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Women World Cup</h5>
          <p class="card-text">
            Celebrate women's cricket with this stylish World Cup t-shirt for women.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-align: centers;">ADD to Cart</a>
        </div>
      </div>
    </div>


    <div class="outer">
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/australia-womens-t20-world-cup-match-graphic-hoodie_ss4_p-13386219+u-1bxjh2gzn94c5yxspjti+v-5c69e4de0fa84687b7050910def5d29d.WEBP" class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Australia Women</h5>
          <p class="card-text">
            Stay warm and show your support with our cozy Australia Women's hoodies.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/icc-mens-t20-world-cup-water-bottle-navy_ss4_p-13345268+u-19yhtwveawz6k1iebcq1+v-1dd82d33ab9447989ee0b219d009a746.JPG" class="card-img-top" alt="bottle" height="300px">

        <div class="card-body">
          <h5 class="card-title">Water Bottle</h5>
          <p class="card-text">Stay hydrated and ready for action with our World Cup water bottle.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/pakistan-womens-t20-world-cup-match-graphic-hoodie-green_ss4_p-13385827+u-7wa2cfji5tislc8yl8mj+v-332848ca6bb74f89bc99ec9ec08f36bf.WEBP" class="card-img-top" alt="aus-w" height="300px">
        <div class="card-body">
          <h5 class="card-title">Pakistan Womens</h5>
          <p class="card-text">Stay warm and stylish with our Pakistan Women's hoodies.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-align: centers;">ADD to Cart</a>
        </div>
      </div>
    </div>



    <div class="outer">
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/pakistan-womens-t20-world-cup-match-graphic-hoodie-green_ss4_p-13385827+u-7wa2cfji5tislc8yl8mj+v-332848ca6bb74f89bc99ec9ec08f36bf.WEBP" class="card-img-top" alt="pak-w" height="300px">
        <div class="card-body">
          <h5 class="card-title">Pakistan Womens T20</h5>
          <p class="card-text">Show your support for Pakistan Women's T20 cricket with our stylish hoodies.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/west-indies-mens-t20-world-cup-mug_ss4_p-13345270+u-7oaroatb6t6vx052yi5z+v-0c6db9c9e1c1424eae31034ae9258538.WEBP" class="card-img-top" alt="cup" height="300px">
        <div class="card-body">
          <h5 class="card-title">World Cup Mug</h5>
          <p class="card-text">
            Celebrate the thrilling cricket action with our World Cup Mug featuring West Indies.</p>
        </div>

        <div class="card-body">
          <a href="#" class="card-link" style="text-decoration: no;">ADD to Cart</a>
        </div>
      </div>
      <div class="card" style="width: 25rem;">
        <img src="../IMAGES/new-zealand-womens-t20-world-cup-match-graphic-hoodie-black_ss4_p-13385819+u-1fybm9av6bgfonn4pn3h+v-1fa22ba033d94099a740304f0c1a8965.WEBP" class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">New-Zealand Womens</h5>
          <p class="card-text">
            Stay cozy and show your support for New Zealand with our Women's Hoodies.</p>
        </div>

        <div class="card-body">
        <form method="post">
        <button type="submit" name="increment">ADD to Cart</button>
    </form>
        </div>
      </div>
    </div>


    <nav class="nav-black" aria-label="Page navigation example">
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