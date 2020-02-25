<?php include 'includes/header.php' ?>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<div class="container-fluid pd pb">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-body text-center font-secondary mb-5 t-w200" style="text-transform: uppercase;">Shopping <span class="font-weight-bold">bag</span></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="row cart-r">
        <div class="col-12 col-md-6">
          <h6 class="pr">Product</h6>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="pr">QUANTITY</h6>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="pr">PRICE</h6>
        </div>
        <div class="col-md-2 text-center">
          <h6 class="pr">TOTAL</h6>
        </div>
      </div>
      <div class="row im">
        <div class="col-md-6 thumm">
          <span><img src="images/thum1.png"></span>
          <h5>212 MEN NYC PERFUME</h5>
          100ML
        </div>
        <div class="col-8 col-md-2 qtys">
          <div class="quantity buttons_added">
            <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
          </div>
        </div>
        <div class="col-md-2 text-center hid">
          <h6>₦ 23,650.00</h6>
        </div>
        <div class="col-4 col-md-2 qtys">
          <h6 class="m-h">₦ 23,650.00 <span><img class="bin" src="images/icons/bin.svg"></span></h6>
          <h6><span><img class="bin" src="images/icons/bin.svg"></span></h6>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 right-c">
      <h6 class="pr">Order Summary</h6>
      <div class="content">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" id="headingOne" role="tab">
              <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Enter Promo Code<i class="pull-right fa fa-plus"></i></a></h4>
            </div>
            <div class="panel-collapse collapse in" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="subscribe_now">
                      <form class="subscribe_form">
                        <div class="input-group">
                          <input type="text" class="form-control" name="email" placeholder="Enter Promo Code">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">APPLY NOW</button>
                          </span>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="cart-order-totals">
        <table class="order-totals-table">
          <tbody>
            <tr class="order-subtotal" tabindex="0">
              <td>Subtotal</td>
              <td>₦ 23,650.00
              </td>
            </tr>
            <tr class="order-shipping" tabindex="0">
              <td>Shipping &amp; Handling</td>
              <td>-</td>
            </tr>

            <tr class="order-sales-tax" tabindex="0">
              <td>Sales Tax</td>

              <td>-</td>

            </tr>
            <tr class="order-total" tabindex="0">
              <td>Estimated Total</td>
              <td class="order-value">₦ 23,650.00
              </td>
            </tr>
          </tbody>
        </table>


      </div>
      <div class="row">
        <div class="col-sm-12 buyb">
          <a href="\checkout.php" class="cart-btn">
            checkout
          </a>
        </div>
        <div class="col-sm-12 buyb text-center">
          <a href="" class="cart-btn2">
            Continue Shopping >
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php' ?>