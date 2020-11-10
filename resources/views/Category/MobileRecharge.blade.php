<section class="container">
      <div class="bg-light shadow-md rounded p-4">
        <div class="row"> 
          
          <!-- Mobile Recharge
          ============================================= -->
          <div class="col-lg-4 mb-4 mb-lg-0">
            <h2 class="text-4 mb-3">Mobile Recharge or Bill Payment</h2>
            <form id="recharge-bill" method="post">
              <div class="mb-3">
                <div class="custom-control custom-radio custom-control-inline">
                  <input id="prepaid" name="rechargeBillpayment" class="custom-control-input" checked="" required type="radio">
                  <label class="custom-control-label" for="prepaid">Prepaid</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input id="postpaid" name="rechargeBillpayment" class="custom-control-input" required type="radio">
                  <label class="custom-control-label" for="postpaid">Postpaid</label>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" data-bv-field="number" id="mobileNumber" required placeholder="Enter Mobile Number">
              </div>
              <div class="form-group">
                <select class="custom-select" id="operator" required="">
                  <option value="">Select Your Operator</option>
                  <option>1st Operator</option>
                  <option>2nd Operator</option>
                  <option>3rd Operator</option>
                  <option>4th Operator</option>
                  <option>5th Operator</option>
                  <option>6th Operator</option>
                  <option>7th Operator</option>
                </select>
              </div>
              <div class="form-group input-group">
                <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                <a href="#" data-target="#view-plans" data-toggle="modal" class="view-plans-link">View Plans</a>
                <input class="form-control" id="amount" placeholder="Enter Amount" required type="text">
              </div>
              <a class="btn btn-primary btn-block" href="recharge-order-summary.html">Continue to Recharge</a>
            </form>
          </div>
          <!-- Mobile Recharge end --> 
          
          <!-- Slideshow
          ============================================= -->
          <div class="col-lg-8">
            <div class="owl-carousel owl-theme single-slider" data-animateout="fadeOut" data-animatein="fadeIn" data-autoplay="true" data-loop="true" data-autoheight="true" data-nav="true" data-items="1">
              <div class="item">
                <a href="#">
                  <img class="img-fluid" src="{{config('global.THEME_PATH')}}/images/slider/banner-3.jpg" alt="banner 1" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img class="img-fluid" src="{{config('global.THEME_PATH')}}/images/slider/banner-6.jpg" alt="banner 2" />
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img class="img-fluid" src="{{config('global.THEME_PATH')}}/images/slider/banner-11.jpg" alt="banner 2" />
                </a>
              </div>

            </div>
          </div>
          <!-- Slideshow end --> 
          <!-- Slideshow end --> 
          
        </div>
      </div>
    </section>
