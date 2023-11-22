<?php require_once('includes/session.php'); ?>
  <?php $activePage = 'riders'; require_once('includes/user_header.php'); ?>
    <main>
      <!--slider-area start-->
      <section
        class="page-title-area grey-bg-soft2 pt-280 pb-180 pt-lg-200 pt-md-160 pb-md-120 pt-xs-160 pb-xs-90"
      >
        <img
          class="page-shape blog-shape-1 d-none d-xxl-inline-block"
          src="assets/img/line/line-11.png"
          alt="Page Shape"
        />
        <img
          class="page-shape shape_04 d-none d-md-inline-block"
          src="assets/img/shape/orange-1.svg"
          alt="Page Shape"
        />
        <img
          class="page-shape shape_05 d-none d-xxl-inline-block"
          src="assets/img/shape/round-line-a.svg"
          alt="Page Shape"
        />
        <!-- <img class="page-shape shape_06 d-none d-lg-inline-block" src="assets/img/shape/berry-1.svg" alt="Page Shape"> -->
        <!-- <img class="page-shape shape_07 d-none d-lg-inline-block" src="assets/img/slider/truck.svg" alt="Page Shape"> -->
        <img
          class="page-shape shape_08 d-none d-lg-inline-block"
          src="assets/img/shape/dot-a.svg"
          alt="Page Shape"
        />
        <img
          class="page-shape shape_09 d-none d-lg-inline-block"
          src="assets/img/slider/nav-box.svg"
          alt="Page Shape"
        />
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <div class="page-title-wrapper text-center">
                <h4 class="styled-text theme-color mb-30">Riders</h4>
                <h5 class="h1 page-title">
                  Meet Our Dedicated Dispatch Riders
                </h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--slider-area end-->
      <!--dispatch_rider-team start-->
      <section
        class="dispatch_rider-team position-relative pt-120 pb-90 pt-lg-80 pb-lg-50 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30"
      >
        <img
          class="team-shape2 tmshape-1"
          src="assets/img/shape/round-line-a.svg"
          alt=""
        />
        <img
          class="team-shape2 tmshape-2"
          src="assets/img/shape/border-line-1.svg"
          alt=""
        />
        <div class="container">
          <div class="row align-items-center">
            <?php 
          
          $query_riders = "SELECT * FROM dispatch_rider WHERE deleted = 1 ORDER BY id LIMIT 15";
          $riders_res = mysqli_query($conn, $query_riders);

          while($row = mysqli_fetch_assoc($riders_res)){?>
            <div class="col-lg-4 col-md-6">
              <div class="team-wrapper white-bg pos-rel mb-30">
                <div class="team-thumb">
                  <img
                    class="w-100"
                    src="assets/img/team/placeholder.jpg"
                    alt="Rider"
                  />
                </div>
                <div class="team-content text-center">
                  <h4 class="sect-title"><?=$row['fullname']?></h4>
                  <p><?=$row['location']?></p>
                  <div class="social-links mt-20">
                    <a href="tel:<?=$row['phone']?>"><i class="fa fa-phone"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
            
          </div>
          <!--/.row-->
        </div>
        <!--/.container-->
      </section>
      <!--dispatch_rider-team end-->
    </main>

   <?php require_once('includes/footer.php') ?>
