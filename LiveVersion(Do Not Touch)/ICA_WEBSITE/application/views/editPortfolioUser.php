<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a href="Index.html" class="navbar-brand"><img src="/assets/images/logo_white.png" id="logoimage"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="#">STUDENT PORTFOLIO</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                STUDENT LINKS
              </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="academicresource.html">RESOURCES</a>
            <a class="dropdown-item" href="timetable.html">TIMETABLES</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="vacancies.html">VACANCIES</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.html">CONTACT US</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Login.html">LOG IN</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
  <div class="row imgRowWidth" >
    <div class="col-lg-12 navSpace">
    </div>
  </div>
  <div class="spacing">
  </div>

    <!--Content-->
    <section>
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4">
            <h2>Edit Portfolio</h2>
          </div>
        </div>
        <div class="formSpacing">
        </div>

        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">
            <h4 class="portfolioLabel">EDIT YOUR PROFILE PHOTO</h4>
            <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">
                <input type="file" style="display:none"> Upload
            </label>
          </div>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="spacing">

        </div>
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">
            <h4 class="portfolioLabel">EDIT YOUR PORTFOLIO PHOTOS</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">
          <!--lookup input type file styling and revisit image clicking to upload image!!!! -->
            <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">
                <input type="file" style="display:none"> Upload</input>
            </label>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">

            <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">
                <input type="file" style="display:none"> Upload
            </label>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">

            <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">
                <input type="file" style="display:none"> Upload
            </label>
          </div>
        </div>
        <div class="spacing">

        </div>
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-2">
            <p class="addAcdResText">DESCRIPTION</p>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <textarea class="form-control " rows="5"></textarea>
            </div>

            <p class="addAcdResText">LINK TO MY PORTFOLIO</p>
           <input type="text" class="form-control" placeholder="Example input">
          </div>
          <div class="col-lg-5">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
         </div>
         <div class="col-lg-5">
            <button class="btn btn-outline-secondary okayButton" type="submit">Ok</button>
          </div>
        </div>



      </form>
    </section>


      </div>
        <!--Footer-->