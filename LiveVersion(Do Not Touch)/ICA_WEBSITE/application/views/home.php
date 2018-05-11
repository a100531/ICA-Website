<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <!-- Bootstrap core CSS -->
  
  <link text="text/css" href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for the website -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
  <script src="/assets/jquery/jquery.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a href="Index.html" class="navbar-brand"><img src="/assets/images/logo_white.png" id="logoimage"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">STUDENT PORTFOLIO</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                STUDENT LINKS
              </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">RESOURCES</a>
            <a class="dropdown-item" href="#">TIMETABLES</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">VACANCIES</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Login.html">LOG IN</a>
        </li>


      </ul>
    </div>
  </nav>
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
                <img class="d-block w-100" src="/assets/images/image1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/assets/images/image2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/assets/images/image3.png" alt="Third slide">
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
            <p class="notices">At vero eos et accusamus At vero eos et accusamus</p>
            <p class="notices">At vero eos et accusamus At vero eos et accusamus</p>
            <p class="notices">At vero eos et accusamus At vero eos et accusamus</p>
            <p class="notices">At vero eos et accusamus At vero eos et accusamus</p>
            <p class="notices">At vero eos et accusamus At vero eos et accusamus</p>
            <p class="notices">At vero eos et accusamus At vero eos et accusamus</p>
          </div>
        </div>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-5">
          <div id="cansLocation">
            <img src="/assets/images/canceled-lectures.png" id="canceledlecImg" alt="canceled-lectures">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-4">
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
      <footer>
        <div class="row">

        </div>
      </footer>



</body>

</html>