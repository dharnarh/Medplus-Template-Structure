<?php include 'includes/header.php' ?>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<div class="container-fluid pd pb">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-body text-center font-secondary mb-5 t-w200" style="text-transform: uppercase;"> <span class="font-weight-bold">CHECKOUT</span></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="content">
        <div class="panel-group " id="accordion1" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" id="headingOne" role="tab">
              <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">1. Your Info<i class="pull-right fa fa-plus"></i></a></h4>
            </div>
            <div class="panel-collapse in collapse show" id="collapseOne1" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row">
                  <div class="col-3 col-md-3 login">
                    <a href="">login</a>
                  </div>
                  <div class="col-9 col-md-6 guset">
                    <a href="">guset checkout</a>
                  </div>
                </div>
                <div class="row frm">
                  <div class="col-lg-12">
                    <form class="row">
                      <div class="col-md-6">
                        <input class="input" placeholder="Email Address" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Password" type="password">
                        <span class="underline"></span>
                      </div>
                      <div class="col-12 col-md-8">
                        <a href="" class="login-btn">login</a>
                      </div>
                      <div class="col-12 col-md-8 cl">
                        <label class="custom-control black-checkbox">
                          <input type="checkbox" class="fill-control-input">
                          <span class="fill-control-indicator"></span>
                          <span class="fill-control-description">Remember Me</span>
                        </label>
                        <a href="" class="forget">Forget Password</a>
                      </div>
                      <div class="col-md-8">
                        <button class="loginBtn loginBtn--facebook">
                          Login with Facebook
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Shipping details -->
      <div class="content">
        <div class="panel-group " id="accordion2" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" id="headingOne" role="tab">
              <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">2. Shipping Details<i class="pull-right fa fa-plus"></i></a></h4>
            </div>
            <div class="panel-collapse in collapse show" id="collapseOne2" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row frm">
                  <div class="col-lg-12">
                    <form class="row">
                      <div class="col-md-6">
                        <input class="input" placeholder="First Name *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Last Name *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Address 1 * " type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Address 2 *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Zip Code *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="City *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Country *" type="text">
                        <span class="underline"></span>
                        <p class="how"><a href="">How to change country</a></p>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="State *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Phone *" type="text">
                        <span class="underline"></span>
                      </div>

                      <div class="col-12 col-md-8 ">
                        <label class="custom-control black-checkbox">
                          <input type="checkbox" class="fill-control-input">
                          <span class="fill-control-indicator"></span>
                          <span class="fill-control-description">Remember Me</span>
                        </label>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- end -->
      <!-- Billing -->
      <div class="content">
        <div class="panel-group " id="accordion4" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" id="headingOne" role="tab">
              <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">3. Billing Details<i class="pull-right fa fa-plus"></i></a></h4>
            </div>
            <div class="panel-collapse in collapse" id="collapseOne4" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 login">
                    <a href="">login</a>
                  </div>
                  <div class="col-md-6 guset">
                    <a href="">guset checkout</a>
                  </div>
                </div>
                <div class="row frm">
                  <div class="col-lg-12">
                    <form class="row">
                      <div class="col-md-6">
                        <input class="input" placeholder="Email Address" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-md-6">
                        <input class="input" placeholder="Password" type="password">
                        <span class="underline"></span>
                      </div>
                      <div class="col-12 col-md-8">
                        <a href="" class="login-btn">login</a>
                      </div>
                      <div class="col-12 col-md-8 cl">
                        <label class="custom-control black-checkbox">
                          <input type="checkbox" class="fill-control-input">
                          <span class="fill-control-indicator"></span>
                          <span class="fill-control-description">Remember Me</span>
                        </label>
                        <a href="" class="forget">Forget Password</a>
                      </div>
                      <div class="col-md-8">
                        <button class="loginBtn loginBtn--facebook">
                          Login with Facebook
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- ee -->
      <!-- payment option-->
      <div class="content">
        <div class="panel-group " id="accordion5" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" id="headingOne" role="tab">
              <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne">4. Payment Options<i class="pull-right fa fa-plus"></i></a></h4>
            </div>
            <div class="panel-collapse in collapse show" id="collapseOne5" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4 login">
                    <h6>Select Payment method</h6>
                    <form action="#" class="radioo">
                      <p>
                        <input type="radio" id="test1" name="radio-group" checked>
                        <label for="test1">Credit Card</label>
                      </p>
                      <p>
                        <input type="radio" id="test2" name="radio-group">
                        <label for="test2">Debit Card</label>
                      </p>

                      <input class="input" placeholder="Email Address" type="text">
                      <span class="underline"></span>
                    </form>
                  </div>
                  <div class="col-md-6 pts">
                    <img src="images/pay.png">
                  </div>
                </div>
                <div class="row frma">
                  <div class="col-lg-12">
                    <form class="row">
                      <div class="col-md-6 mrg">
                        <select class="input">
                          <option>Month *</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2023</option>
                          <option>2021</option>
                          <option>2022</option>

                        </select>
                      </div>
                      <div class="col-md-6">
                        <select class="input">
                          <option>Year *</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2020</option>
                          <option>2023</option>
                          <option>2021</option>
                          <option>2022</option>

                        </select>
                      </div>
                      <div class="col-md-6 secr">
                        <input class="input" placeholder="Security Code *" type="text">
                        <span class="underline"></span>
                        <p class="how"><a href="">What is this?</a></p>
                      </div>
                      <div class="col-md-8">
                        <input class="input" placeholder="Name on Card *" type="text">
                        <span class="underline"></span>
                      </div>
                      <div class="col-12 col-md-8">
                        <a href="" class="login-btn wd">Place Order</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- END -->
    </div>



    <!-- shpping End -->
    <div class="col-md-4 right-cc">
      <div class="row">
        <div class="col-8 col-md-8 ">
          <h6 class="pr">Order Summary </h6>
        </div>
        <div class="col-4 col-md-4 text-right">
          <a href="" class="edite">Edit cart</a>
        </div>
      </div>
      <div class="row imc">
        <div class="col-md-12 thummc">
          <span><img src="images/thum1.png"></span>
          <h6>212 MEN NYC PERFUME</h6>
          100ML
          <p><span>Qty: 1</span> <strong>₦ 23,650.00</strong></p>
        </div>
      </div>
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
        <div class="col-sm-12 buyc">

        </div>
        <div class="col-sm-12 buyb text-center">
          <h6 class="text-left"><strong>Questions?</strong></h6>
          <p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <a href="" class="cart-btn2">
            Continue Shopping >
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php' ?>