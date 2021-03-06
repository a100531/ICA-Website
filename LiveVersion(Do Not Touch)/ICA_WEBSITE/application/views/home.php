<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- Navigation -->
    <div class="container-fluid">


  <div class="row" >
    <div class="col-lg-12 navSpace">
    </div>
  </div>

    <!--Carousel-->
    <section>
      <div class="row">
        <div id="carouselSpacing">
          <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/images/image1.jpg" alt="First slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Content-->
    <section>
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 paragraph">
          <div class="spacing">
            <h1>Cancelled lessons & notices</h1>
<?php foreach ($sickLeave->result_array() as $sick): ?>
                    <p class="notices">
                      Lecturer: <?=$sick['s_name'];?> <?=$sick['s_surname'];?>, Sick Until: (<?=$sick['s_dateLong'];?>)
                    </p>
<?php endforeach;?>
          </div>
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-5 d-none d-lg-block">
          <div id="cansLocation">
            <img src="/assets/images/canceled-lectures.png"  id="canceledlecImg" alt="canceled-lectures">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-4 d-none d-lg-block">
          <img src="/assets/images/about-us.png" id="aboutUsImage" alt="About Us">
        </div>

        <div class="col-lg-6">
          <div class="spacing">
            <h1>About us</h1>
            <p class="notices"> At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus At vero eos et accusamus </p>
          </div>
        </div>
      </div>
  </div>
    </section>

    <!--Footer-->
