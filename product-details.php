<?php include 'includes/header.php' ?>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<div class="container-fluid pd">
  <div class="row">
    <div class="col-lg-12">

    </div>

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Beauty</a></li>
              <li class="breadcrumb-item"><a href="#">FRAGRANCES</a></li>
              <li class="breadcrumb-item active" aria-current="page">212</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="section section-gray">
            <div class="section-content">
              <div class="row product-details">
                <div class="col-12 col-md-1 order-md-1 order-2">
                  <ul class="product-images thum-images mobile-thum">

                    <li>
                      <a href="javascript:void(0)"><img src="images/thum1.png" alt=""></a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"><img src="http://static.zara.net/photos///2016/I/0/1/p/6756/201/802/2/w/1024/6756201802_2_5_1.jpg?ts=1472203996493" alt=""></a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"><img src="http://static.zara.net/photos///2016/I/0/1/p/6756/201/802/2/w/1024/6756201802_1_1_1.jpg?ts=1472556621736" alt=""></a>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-5 order-1">
                  <ul class="product-images">
                    <li class="preview"><img src="images/pro.png" alt=""></li>
                    <!-- Don't show small pictures if there's only 1 -->

                  </ul>
                </div>
                <div class="col-md-6 order-3">
                  <ul class="product-info">
                    <li class="product-name">212 MEN NYC PERFUME</li>
                    <li class="product-sub">100ML</li>
                    <li class="product-price"><span class="first">₦ 23,650.00</span><span class="second">₦ 26,650.00</span></li>
                    <li class="product-description">
                      <p>212 Men by Carolina Herrera is a Woody Floral Musk fragrance for men. 212 Men was launched in 1999. 212 Men was created by Alberto Morillas, Rosendo Mateu and Ann Gottlieb.</p>
                    </li>
                  </ul>
                  <div class="row">
                    <div class="col-3 col-md-3">
                      <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                      </div>
                    </div>
                    <div class="col-9 col-md-9 product-addtocart">
                      <a href="\cart.php">
                      <button>Add To Cart</button>
                      </a>
                    </div>
                    <div class="col-4 col-md-4">
                      <!-- variation one -->
                      <div class="var1">
                        <!-- desktop -->
                        <a class="button one inactive desktop button--secondary button--full-width mb-bt">

                          <div class="icon-with-text">
                            <div class="icon-with-text__icon">
                              <div class="btn__effect">
                                <svg class="heart-stroke icon-svg icon-svg--size-4 icon-svg--color-silver" viewBox="20 18 29 28" aria-hidden="true" focusable="false">
                                  <path d="M28.3 21.1a4.3 4.3 0 0 1 4.1 2.6 2.5 2.5 0 0 0 2.3 1.7c1 0 1.7-.6 2.2-1.7a3.7 3.7 0 0 1 3.7-2.6c2.7 0 5.2 2.7 5.3 5.8.2 4-5.4 11.2-9.3 15a2.8 2.8 0 0 1-2 1 3.4 3.4 0 0 1-2.2-1c-9.6-10-9.4-13.2-9.3-15 0-1 .6-5.8 5.2-5.8m0-3c-5.3 0-7.9 4.3-8.2 8.5-.2 3.2.4 7.2 10.2 17.4a6.3 6.3 0 0 0 4.3 1.9 5.7 5.7 0 0 0 4.1-1.9c1.1-1 10.6-10.7 10.3-17.3-.2-4.6-4-8.6-8.4-8.6a7.6 7.6 0 0 0-6 2.7 8.1 8.1 0 0 0-6.2-2.7z"></path>
                                </svg>
                                <svg class="heart-full icon-svg icon-svg--size-4 icon-svg--color-blue" viewBox="0 0 19.2 18.5" aria-hidden="true" focusable="false">
                                  <path d="M9.66 18.48a4.23 4.23 0 0 1-2.89-1.22C.29 10.44-.12 7.79.02 5.67.21 2.87 1.95.03 5.42.01c1.61-.07 3.16.57 4.25 1.76A5.07 5.07 0 0 1 13.6 0c2.88 0 5.43 2.66 5.59 5.74.2 4.37-6.09 10.79-6.8 11.5-.71.77-1.7 1.21-2.74 1.23z"></path>
                                </svg>
                                <!-- active heart -->
                                <!-- <svg class="broken-heart" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="5.707 17 48 16"><g fill="#0090E3">
    <path class="broken-heart--left" d="M29.865 32.735V18.703a4.562 4.562 0 0 0-3.567-1.476c-2.916.017-4.378 2.403-4.538 4.756-.118 1.781.227 4.006 5.672 9.737a3.544 3.544 0 0 0 2.428 1.025l-.008-.008.013-.002z"/>
    <path class="broken-heart--right" d="M37.868 22.045c-.135-2.588-2.277-4.823-4.697-4.823a4.258 4.258 0 0 0-3.302 1.487l-.004-.003v14.035a3.215 3.215 0 0 0 2.289-1.033c.598-.596 5.882-5.99 5.714-9.663z"/></g>
    <path class="broken-heart--crack" fill="none" stroke="#FFF" stroke-miterlimit="10" d="M29.865 18.205v14.573"/></svg> -->
                                <!-- <div class="effect-group">
              <span class="effect"></span>
              <span class="effect"></span>
              <span class="effect"></span>
              <span class="effect"></span>
              <span class="effect"></span>
            </div> -->
                              </div>
                            </div>
                            <div class="icon-with-text__text">
                              Add to wishlist
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>
                    <div class="col-3 col-md-6 stock">
                      <img src="images/icons/stock.png">
                      <span>In Stock</span>
                    </div>
                    <div class="col-5 col-sm-12 rate">
                      <div class="star-rating">
                        <input type="radio" id="5-stars" name="rating" value="5" />
                        <label for="5-stars" class="star">&#9733;</label>
                        <input type="radio" id="4-stars" name="rating" value="4" />
                        <label for="4-stars" class="star">&#9733;</label>
                        <input type="radio" id="3-stars" name="rating" value="3" />
                        <label for="3-stars" class="star">&#9733;</label>
                        <input type="radio" id="2-stars" name="rating" value="2" />
                        <label for="2-stars" class="star">&#9733;</label>
                        <input type="radio" id="1-star" name="rating" value="1" />
                        <label for="1-star" class="star">&#9733;</label>
                      </div>
                    </div>
                    <div class="col-md-12 buyb">
                      <a href="\cart.php" class="by-now">
                        BUY NOW
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid align-content-center m-s">
  <ul class="list-unstyled container-fluid w-100 d-flex bdr">
    <li class="text-center border-right small  pd1">
      <img src="images/icons/1p.svg" height="40" class="d-inline-block align-top mb-2" alt="Call Us">
      <span class="nav-link text-capitalize">Quality <br> Products</span>
    </li>
    <li class="text-center border-right small pd2">
      <img src="images/icons/2p.svg" height="40" class="d-inline-block align-top mb-2" alt="Locate Us">
      <span class="nav-link text-capitalize">Secure <br> Payments</span>
    </li>
    <li class="text-center border-right small pd2">
      <img src="images/icons/3p.svg" height="40" class="d-inline-block align-top mb-2" alt="My Cart">
      <span class="nav-link text-capitalize">Express <br> Delivery</span>
    </li>
    <li class="text-center border-right small pd2">
      <img src="images/icons/4p.svg" height="40" class="d-inline-block align-top mb-2" alt="Medplus Logo">
      <span class="nav-link text-capitalize">Free <br> Pickup</span>
    </li>
    <li class="text-center small pd3">
      <img src="images/icons/5p.svg" height="40" class="d-inline-block align-top mb-2" alt="Medplus Logo">
      <span class="nav-link text-capitalize">Easy <br> Return</span>
    </li>

  </ul>
</div>
<div class="container" style="padding-bottom: 4%;">
  <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
    <li class="active"><a href="#Commentary" data-toggle="tab">DESCRIPTION</a></li>
    <li><a href="#Videos" data-toggle="tab">REVIEWS (0)</a></li>
  </ul>
  <div class="tab-content text-j">
    <div role="tabpanel" class="tab-pane fade in active" id="Commentary">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>

      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="Videos"></div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-body text-center font-secondary mb-5 t-w200 real-t"> RELATED <span class="font-weight-bold">PRODUCTS</span></h1>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-4 col mb-sm-3 products-card">
          <a href="\product-details.php">
            <div class="card">
              <img class="card-img" src="\images/2.png" alt="Vans">
              <div class="card-img-overlay d-flex justify-content-end">
                <span href="\product-details.php" class="card-link text-danger like">
                  New
                </span>
              </div>
            </div>
          </a>
          <div class="card-body small">
            <div class="content_price">
              <span class="unvisible small">
                In Stock
              </span>
            </div>
            <a class="product-name card-title text-body text-capitalize" href="\product-details.php">
              <p class="card-title text-capitalize font-weight-bold mb-0">Absolute Paracetamol</p>
            </a>
            <p class="card-title mb-1 text-capitalize text-main-color">
              ₦8,000.00
              <small class="old-price product-price text-dark text-strikethrough">
                ₦10,000.00
              </small>
            </p>
            <div class="clearfix"></div>
            <!-- <p class="card-text d-block text-uppercase">mass. oil (relax) 100ml</p> -->
            <div class="text-center mt-2">
              <div class="star-rating">
                <input type="radio" id="5-stars" name="rating" value="5" />
                <label for="5-stars" class="star">&#9733;</label>
                <input type="radio" id="4-stars" name="rating" value="4" />
                <label for="4-stars" class="star">&#9733;</label>
                <input type="radio" id="3-stars" name="rating" value="3" />
                <label for="3-stars" class="star">&#9733;</label>
                <input type="radio" id="2-stars" name="rating" value="2" />
                <label for="2-stars" class="star">&#9733;</label>
                <input type="radio" id="1-star" name="rating" value="1" />
                <label for="1-star" class="star">&#9733;</label>
              </div>
              <a href="\product-details.php" class="btn btn-sm btn-outline-main-color text-uppercase px-4">buy now</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-4 col mb-sm-3 products-card">
          <a href="\product-details.php">
            <div class="card">
              <img class="card-img" src="\images/3.png" alt="Vans">
            </div>
          </a>
          <div class="card-body small">
            <div class="content_price">
              <span class="unvisible small">
                Available in other options
              </span>
            </div>
            <a class="product-name card-title text-body text-capitalize" href="\product-details.php">
              <p class="card-title text-capitalize font-weight-bold mb-0">Absolute Paracetamol</p>
            </a>
            <p class="card-title mb-1 text-capitalize text-main-color">
              ₦8,000.00
              <small class="old-price product-price text-dark text-strikethrough">
                ₦10,000.00
              </small>
            </p>
            <div class="clearfix"></div>
            <!-- <p class="card-text d-block text-uppercase">mass. oil (relax) 100ml</p> -->
            <div class="text-center mt-2">
              <div class="star-rating">
                <input type="radio" id="5-stars" name="rating" value="5" />
                <label for="5-stars" class="star">&#9733;</label>
                <input type="radio" id="4-stars" name="rating" value="4" />
                <label for="4-stars" class="star">&#9733;</label>
                <input type="radio" id="3-stars" name="rating" value="3" />
                <label for="3-stars" class="star">&#9733;</label>
                <input type="radio" id="2-stars" name="rating" value="2" />
                <label for="2-stars" class="star">&#9733;</label>
                <input type="radio" id="1-star" name="rating" value="1" />
                <label for="1-star" class="star">&#9733;</label>
              </div>
              <a href="\product-details.php" class="btn btn-sm btn-outline-main-color text-uppercase px-4">buy now</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-4 col mb-sm-3 products-card">
          <a href="\product-details.php">
            <div class="card">
              <img class="card-img" src="\images/1.png" alt="Vans">
              <div class="card-img-overlay d-flex justify-content-end">
                <span href="\product-details.php" class="card-link text-danger like">
                  Arrival
                </span>
              </div>
            </div>
          </a>
          <div class="card-body small">
            <div class="content_price">
              <span class="unvisible small">
                Out of Stocks
              </span>
            </div>
            <a class="product-name card-title text-body text-capitalize" href="\product-details.php">
              <p class="card-title text-capitalize font-weight-bold mb-0">Absolute Paracetamol</p>
            </a>
            <p class="card-title mb-1 text-capitalize text-main-color">
              ₦8,000.00
              <small class="old-price product-price text-dark text-strikethrough">
                ₦10,000.00
              </small>
            </p>
            <div class="clearfix"></div>
            <!-- <p class="card-text d-block text-uppercase">mass. oil (relax) 100ml</p> -->
            <div class="text-center mt-2">
              <div class="star-rating">
                <input type="radio" id="5-stars" name="rating" value="5" />
                <label for="5-stars" class="star">&#9733;</label>
                <input type="radio" id="4-stars" name="rating" value="4" />
                <label for="4-stars" class="star">&#9733;</label>
                <input type="radio" id="3-stars" name="rating" value="3" />
                <label for="3-stars" class="star">&#9733;</label>
                <input type="radio" id="2-stars" name="rating" value="2" />
                <label for="2-stars" class="star">&#9733;</label>
                <input type="radio" id="1-star" name="rating" value="1" />
                <label for="1-star" class="star">&#9733;</label>
              </div>
              <a href="\product-details.php" class="btn btn-sm btn-outline-main-color text-uppercase px-4">buy now</a>
            </div>
          </div>
        </div>
  </div>
</div>

<?php include 'includes/footer.php' ?>