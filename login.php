<?php $activePage = 'login'; require_once('includes/header.php'); ?>
  
    <main>
      <!--slider-area start-->
      <section
        id="slider-one"
        class="grey-bg slider-area pos-rel pt-200 pb-80 pt-md-200 pt-xs-180 pb-xs-215"
      >
        <img
          class="slider-shape shape_01 d-none d-xxl-inline-block"
          src="assets/img/line/line-1.svg"
          alt=""
        />
        <img
          class="slider-shape shape_02"
          src="assets/img/line/line-baby-1.svg"
          alt=""
        />
        <img
          class="slider-shape shape_03"
          src="assets/img/line/line-2.svg"
          alt=""
        />
        <img
          class="slider-shape shape_04 d-none d-md-inline-block"
          src="assets/img/shape/orange-1.svg"
          alt=""
        />
        <img
          class="slider-shape shape_05 d-none d-xxl-inline-block"
          src="assets/img/shape/round-line-a.svg"
          alt=""
        />
        <img
          class="slider-shape shape_07 d-none d-lg-inline-block"
          src="assets/img/shape/orange-2.svg"
          alt=""
        />
        <img
          class="slider-shape shape_08 d-none d-lg-inline-block"
          src="assets/img/shape/dot-a.svg"
          alt=""
        />
        <div class="main-slider main-slider-1" id="main-slider-1">
          <div class="container mx-auto">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="slider__content">
                  <h4 class="styled-text text-center">
                    Welcome Back Boss
                  </h4>
                  <form class="register-form login"  method="POST" action="includes/login-handler.php">
                    <div class="find-area">
                      <div class="input-group">
                        <label for="email">Email address</label>
                        <input
                          type="email"
                          name="email" 
                          id="email"
                          class="form-control"
                          placeholder="Enter your email address"
                          required
                        />
                      </div>
                      <div class="input-group">
                        <label for="password">Password</label>
                        <input
                          type="password"
                          class="form-control"
                          name="password" 
                          id="password"
                          placeholder="Enter your password"
                          required
                        />
                      </div>
                       <div class="input-group d-flex align-items-end justify-content-end">
                      <a href="#" class="float-right">Forgot Password?</a>
                    </div>
                      <div class="input-group mt-3">
                      <div id="msg"></div></div>
                      <button type="submit" name="submit" class="theme_btn mt-4">
                        Log in
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
            <!--/.row-->
          </div>
          <!--/.container-->
        </div>
      </section>
      <!--slider-area end-->

      <section
        class="case-studies case-style-2 position-relative pt-150 pb-130 pt-md-60 pb-md-60 pt-xs-60 pb-xs-60"
      >
        <div class="container">
          <div class="offer-bg">
            <img
              class="offer-shape offer-one"
              src="assets/img/shape/pencil-2.svg"
              alt="Offer Shape"
            />
            <img
              class="offer-shape offer-two"
              src="assets/img/shape/eclip-5.svg"
              alt="Offer Shape"
            />
            <img
              class="offer-shape offer-three"
              src="assets/img/shape/box-2.svg"
              alt="Offer Shape"
            />
            <div class="row align-items-center">
              <div class="col-xl-8 col-lg-8">
                <div class="propose-offer mb-30">
                  <h2>
                    Seamlessly connect with nearby dispatch riders for swift and
                    reliable deliveries
                  </h2>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 text-lg-end text-center">
                <div class="get-offer mb-30">
                  <a href="index.html#main-slider-1" class="theme_btn"
                    >Find Riders</a
                  >
                </div>
              </div>
            </div>
            <!--/.row-->
          </div>
        </div>
      </section>
    </main>

<?php require_once('includes/footer.php') ?>
