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
          <a class="nav-link" href="portfolio.html">STUDENT PORTFOLIO</a>
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


    <div class="spacing10">
    </div>



  <section>
    <div class="container">
            <div class="row">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-4">
                <h2>Add Vacancy</h2>
              </div>
              <div class="col-lg-6">
              </div>
            </div>


            <form action="">
            <div class="row spacing2">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-2 ">
                  <p class="addAcdResText">ADD COURSE</p>
                  <select class="custom-select" name="" id="selectAddVancancy" >
                    <option selected>Default Job</option>
                    <option value="1">Default Job 1</option>
                    <option value="2">Default Job 2</option>
                    <option value="3">Default Job 3</option>

                  </select>
                </div>
                <div class="col-lg-6">
                </div>
            </div>



            <div class="row spacing2">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-5 ">
                <p class="addAcdResText">ADD THE NAME OF VACANCY</p>
                <input type="text" class="form-control" id="Job">
              </div>
              <div class="col-lg-1">
              </div>
            </div>



            <div class="row spacing2">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-5 ">
                <p class="addAcdResText">DESCRIPTION</p>
                <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
              <div class="col-lg-1">
              </div>
            </div>



            <div class="row">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-1">
                <button type="button" class="btn btn-outline-secondary okayButton">Ok</button>
              </div>
              <div class="col-lg-7">
              </div>
            </div>
        </form>
    </div>
  </section>

    <!--Footer-->