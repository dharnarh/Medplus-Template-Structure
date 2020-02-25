<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Medplus Template</title>

  <!-- <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="\css/style.css">
  <link rel="stylesheet" type="text/css" href="\css/responsive.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="\assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="\assets/css/carousel.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>
</head>

<body>

  <!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm bg-white py-3">
    <div class="container-fluid">
      <div>
        <span style="cursor:pointer" onclick="openNav()" class="navbar-toggler-icon mr-5"></span>
        <a class="navbar-brand" href="\index.php">
          <img src="\design_assets/Logo.png" height="40" class="d-inline-block align-top" alt="Medplus Logo">
        </a>
      </div>
      <nav class="nav-m d-flex d-lg-none">
        <label class="dropdown">

          <div class="dd-button">
            Select
          </div>

          <input type="checkbox" class="dd-input" id="test">

          <ul class="dd-menu">
            <li>My Account</li>
            <li>Orders</li>
            <li>Locate Us</li>
          </ul>

        </label>
        <a class="nav-link text-uppercase" href="\cart.php" style="color: #000;">
          <img src="images/icons/Cart_Icon.svg" height="20" class="d-inline-block align-top" alt="My Cart"><br>

        </a>
      </nav>
      <div class="align-content-center justify-content-center" id="blockSearch">
        <form class="form-inline my-2 my-lg-0" action="\search.php">
          <div class="input-group mb-2 mr-sm-2">
            <input type="text" type="search" class="form-control rounded-0 vw-30 search_query" id="search_query_top" placeholder="Search | All Products">
            <div class="input-group-append search_bg p-1">
              <button type="submit" class="btn rounded-0"><img src="design_assets/Search_Icon.svg" height="20" class="d-inline-block align-top" alt="Medplus Logo"></button>
            </div>
          </div>
        </form>
      </div>
      <div>
        <ul class="navbar-nav small float-right d-none d-md-flex">
        <li class="nav-item text-center">
              <a href="tel:+234700MEDPLUS">
              <img src="\design_assets/Contact_Icon.svg" height="20" class="d-inline-block align-top" alt="Call Us">
              </a>
              <a class="nav-link text-uppercase" href="tel:+234700MEDPLUS">Call Us</a>
            </li>
            <li class="nav-item text-center">
              <a href="#">
              <img src="\design_assets/Store_Selector.svg" height="20" class="d-inline-block align-top" alt="Locate Us">
              </a>
              <a class="nav-link text-uppercase" href="/stores">Locate Us</a>
            </li>
            <li class="nav-item text-center">
              <img src="\design_assets/Cart_Icon.svg" height="20" class="d-inline-block align-top" alt="My Cart">
              <a class="nav-link text-uppercase" href="\cart.php">Cart</a>
            </li>
            <li class="nav-item text-center">
              <a href="#">
              <img src="\design_assets/User.svg" height="20" class="d-inline-block align-top" alt="Medplus Logo">
              </a>
              <a class="nav-link text-uppercase" href="#">Sign In</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php include 'navigation.php'; ?>