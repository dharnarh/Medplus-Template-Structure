<?php include 'includes/header.php' ?>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<!-- product details -->
<div class="container-fluid pd">
  <div class="row">
    <!-- Filter Bar -->
    <div class="col-12 col-md-12 mobile-filter">
      <div class="filt">
        <a id="sorts" class="sorting"><img src="images/icons/short.png"> Sort</a>
        <a href="" class="sorting girds"><img src="images/icons/menu.svg"></a>
        <a id="shows" class="sorting"><img src="images/icons/equalizer.svg" class="eql">filter</a>
      </div>
    </div>
    <div class="col-12 col-md-12 select-sort">
      <div class="row">
        <div class="col-12 col-md-12">
          <ul class="uls">
            <li>Most Relevant</li>
            <li>Price: Low to High</li>
            <li>Price: High to Low</li>
            <li>Popularity</li>
            <li>Rating</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-12 tab-filets">
      <div class="row">
        <div class="col-5 left-t">
          <h2>Filter By</h2>
          <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left sideways">
            <li class="active"><a href="#home-v" data-toggle="tab">Discount</a></li>
            <li><a href="#profile-v" data-toggle="tab">Brand</a></li>
            <li><a href="#messages-v" data-toggle="tab">Pricing</a></li>
          </ul>
        </div>
        <div class="col-7 right-t">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home-v">
              <form>
                <div class="form-group">
                  <input type="checkbox" id="html">
                  <label for="html">10% Off or more</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="css">
                  <label for="css">20% Off or more</label>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="profile-v">
              <form>
                <div class="form-group">
                  <input type="checkbox" id="html">
                  <label for="html">212</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="css">
                  <label for="css">BEYONCE</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="html">
                  <label for="html">BVLGARI</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="css">
                  <label for="css">calvin klein</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="html">
                  <label for="html">DIOR</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="css">
                  <label for="css">Britiney Spears</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="css">
                  <label for="css">HUGO BOSS</label>
                </div>
                <div class="form-group">
                  <input type="checkbox" id="css">
                  <label for="css">OLD SPICE</label>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="messages-v">
              <div class="range-slider">
                <input type="text" class="js-range-slider" value="" />
              </div>
              <div class="extra-controls form-inline">
                <div class="form-group">
                  <input type="text" class="js-input-from form-control" value="0" />
                  <input type="text" class="js-input-to form-control" value="0" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
          <!-- Filter Bar -->
          <div class="col-12 col-md-12 mobile-filter">
            <div class="filt">
              <a id="sorts" class="sorting"><img src="images/icons/reset.svg">Reset all</a>
              <a id="hides" class="sorting girds"><img src="images/icons/closee.svg">close</a>
              <a href="" class="sorting"><img src="images/icons/apply.svg" class="eql">apply</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End BAr -->
    <div class="col-lg-12">
      <h1 class="text-body text-center font-secondary mb-5 t-w200">SEARCH <span class="font-weight-bold">RESULTS</span></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 mobil-h">
      <div class="row filters-row">
        <div class="col-md-12 clear">
          <h2>Refine</h2>
          <ul class="cler">
            <li>Beauty </li>
            <li>Fragrance <span>x</span></li>
            <li>20% Off or more<span>x</span></li>
          </ul>
        </div>
        <div class="col-md-12 clear">
          <h2>Catagories</h2>
          <a class="btn ct-btn" data-toggle="collapse" href="#Beauty" aria-expanded="false" aria-controls="collapseExample">
            Beauty
          </a>
          <!-- Collapsible element -->
          <div class="collapse" id="Beauty">
            <div class=" ulf">
              <ul class="">
                <li>Beauty </li>
                <li>Fragrance <span>x</span></li>
                <li>20% Off or more<span>x</span></li>
                <li>Beauty </li>
                <li>Fragrance <span>x</span></li>
                <li>20% Off or more<span>x</span></li>
                <li>Beauty </li>
                <li>Fragrance <span>x</span></li>
                <li>20% Off or more<span>x</span></li>
                <li>20% Off or more<span>x</span></li>
              </ul>
            </div>
          </div>
          <!-- / Collapsible element -->

          <a class="btn ct-btn" data-toggle="collapse" href="#Health" aria-expanded="false" aria-controls="collapseExample">
            Health
          </a>
          <!-- Collapsible element -->
          <div class="collapse" id="Health">
            <div class=" ulf">
              <ul class="">
                <li>Beauty </li>
                <li>Fragrance <span>x</span></li>
                <li>20% Off or more<span>x</span></li>
                <li>Beauty </li>
                <li>Fragrance <span>x</span></li>
                <li>20% Off or more<span>x</span></li>
                <li>Beauty </li>
                <li>Fragrance <span>x</span></li>
                <li>20% Off or more<span>x</span></li>
                <li>20% Off or more<span>x</span></li>
              </ul>
            </div>
          </div>
          <!-- / Collapsible element -->

        </div>

        <div class="col-md-12 clear">
          <h2>Filter By</h2>
          <h6 class="sub-h">DISCOUNT</h6>
          <div class="new">
            <form>
              <div class="form-group">
                <input type="checkbox" id="html">
                <label for="html">10% Off or more</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="css">
                <label for="css">20% Off or more</label>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-12 clear">
          <h2></h2>
          <h6 class="sub-h">PRICING</h6>
          <div class="range-slider">
            <input type="text" class="js-range-slider" value="" />
          </div>
          <div class="extra-controls form-inline">
            <div class="form-group">
              <input type="text" class="js-input-from form-control" value="0" />
              <input type="text" class="js-input-to form-control" value="0" />
            </div>
          </div>
        </div>
        <div class="col-md-12 clear">
          <h2></h2>
          <h6 class="sub-h">BRAND</h6>
          <div class="new">
            <form>
              <div class="form-group">
                <input type="checkbox" id="html">
                <label for="html">212</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="css">
                <label for="css">BEYONCE</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="html">
                <label for="html">BVLGARI</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="css">
                <label for="css">calvin klein</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="html">
                <label for="html">DIOR</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="css">
                <label for="css">Britiney Spears</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="css">
                <label for="css">HUGO BOSS</label>
              </div>
              <div class="form-group">
                <input type="checkbox" id="css">
                <label for="css">OLD SPICE</label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-9">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-4 col mb-sm-3 products-card">
          <a href="\product-details.php">
            <div class="card">
              <img class="card-img" src="\images/1.png" alt="Vans">
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
              <img class="card-img" src="\images/1.png" alt="Vans">
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
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-4 col mb-sm-3 products-card">
          <a href="\product-details.php">
            <div class="card">
              <img class="card-img" src="\images/1.png" alt="Vans">
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
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-4 col mb-sm-3 products-card">
          <a href="\product-details.php">
            <div class="card">
              <img class="card-img" src="\images/1.png" alt="Vans">
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
              <img class="card-img" src="\images/1.png" alt="Vans">
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
  </div>
</div>
<!-- product details ends -->

<?php include 'includes/footer.php' ?>