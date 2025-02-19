<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Add Your Shop :: Finate - Job Portal Website Template Using Bootstrap 5</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">


    <!--== Bootstrap CSS ==-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/header.css" rel="stylesheet">
    <!--== Icofont Icon CSS ==-->
    <link href="../assets/css/icofont.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="../assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="../assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="../assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body>

  <!-- Header -->
  <?php include 'header.php' ?>

  <!--wrapper start-->
  <div class="banner">
    <img src="../assets/img/Frame 1171275881.png" alt="">
  </div>

  <div class="container">
    <div class="main">
      <div class="up d-flex">
        <h5 class="ms-5">Want To Add Your Shop On Our Website</h5>
        <button class="btn Add-Products">ADD PRODUCTS</button>
      </div>
      <br>
      <div class="down">
        <p class="ms-5 search-price">Select Your Package</p>
        <div class="row mytest mt-n5">
          <div class="col-lg-3 col-border">
            <div class="card">
              <h6 class=" text-center"><span class="priceList">LKR 500 </span>/ month</h6>
              <p class=" mt-2"> <img src="../assets/img/Vector.png" alt=""> Can Add 50 products of your shop</p>
            </div>
          </div>

          <div class="col-lg-3 col-border">
            <div class="card">
              <h6 class=" text-center"><span class="priceList">LKR 500 </span>/ month</h6>
              <p class="mt-2"> <img src="../assets/img/Vector.png" alt=""> Can Add 50 products of your shop</p>
              <p> <img src="../assets/img/Vector.png" alt=""> Can Add 50 products of your shop</p>
            </div>
          </div>

          <div class="col-lg-3 col-border">
            <div class="card">
              <h6 class=" text-center"><span class="priceList">LKR 3000 </span>/ 7 month</h6>
              <p class=" mt-2"> <img src="../assets/img/Vector.png" alt=""> Can Add 50 products of your shop</p>
              <p> <img src="../assets/img/Vector.png" alt=""> Can Add 50 products of your shop</p>
              <p> <img src="../assets/img/Vector.png" alt=""> Can Add 50 products of your shop</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="shop-detail ms-4 mt-5">
        <form action="" method="POST">
          <h4 class="mb-4">Shop Details</h4>
            <div class="inpu">
              <label for="">Name</label><br>
              <input type="text" placeholder="Name" class="sd_NAME w-50">
            </div>
            <div class="inpu d-flex mt-3">
              <div class="me-4">
                <label for="">Contact Number</label><br>
                <input type="text" placeholder="Contact Number" class="sd_NAME w-100">
              </div>
              <div class="2">
                <label for="">Whatsapp</label><br>
                <input type="text" placeholder="Whatsapp" class="sd_NAME w-100">
              </div>
            </div>
            <div class="inpu mt-3">
              <label for="">Upload Image</label><br>
              <input type="file">
            </div>
          <h4 class="mb-4 mt-4">Location</h4>
          <div class="inpu">
            <label for="">Address</label><br>
            <textarea class="form-control sd_NAME w-50" id="message" name="message" rows="4" cols="50" placeholder="Address"></textarea>
          </div>
          <div class="inpu mt-3">
            <label for="">Street</label><br>
            <input type="text" placeholder="Street" class="sd_NAME w-50">
          </div>

          <div class="sumbit-btn mt-5"> 
            <button class="btn sd_submit w-50">Sumbit</button> 
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--=======================Javascript============================-->

  <!--=== jQuery Modernizr Min Js ===-->
  <script src="assets/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="assets/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="assets/js/jquery-migrate.js"></script>
  <!--=== jQuery Popper Min Js ===-->
  <script src="assets/js/popper.min.js"></script>
  <!--=== jQuery Bootstrap Min Js ===-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--=== jQuery Swiper Min Js ===-->
  <script src="assets/js/swiper.min.js"></script>
  <!--=== jQuery Fancybox Min Js ===-->
  <script src="assets/js/fancybox.min.js"></script>
  <!--=== jQuery Aos Min Js ===-->
  <script src="assets/js/aos.min.js"></script>
  <!--=== jQuery Counterup Min Js ===-->
  <script src="assets/js/counterup.js"></script>
  <!--=== jQuery Waypoint Js ===-->
  <script src="assets/js/waypoint.js"></script>

  <!--=== jQuery Custom Js ===-->
  <script src="assets/js/custom.js"></script>

  <!--=== Footer ===-->
  <?php include 'footer.php' ?>

</body>

</html>