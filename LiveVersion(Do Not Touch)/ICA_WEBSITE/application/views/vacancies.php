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
  <div class="spacing"></div>
  <section>
      <div class="row navUnderTitleColour">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-7" >
            <h1 class ="pagetitle">Vacancies</h1>
        </div>
        <div class="col-lg-4 d-none d-md-block">
            <img src="/assets/images/vacancies.png" class="portfolioLogoImg" alt="Portfolio">
        </div>
      </div>
  </section>
  <div class="container">



    <div class="spacing6">
    </div>
    <!--Content-->
    <section>
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <select class="form-control" id="exampleSelect1">
                <option>Interactive Media</option>
                <option>2</option>
              </select>
            </div>
          </div>
          <div class="col-lg-5">
          </div>
          <div class="col-lg-3">
              <button type="submit" href="addVacancy.html" class="btn btn-outline-secondary addButton">ADD A NEW VACANCY</button>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-11">
              <h2>Edit Portfolio</h2>
              <p>
                blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                blablablablablablablablablablablablablablablablablablablablablablablablaablablablablablablablablablablablablablablablablablabla
                blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
                blablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablablabla
              </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10">
          </div>
          <div class="col-lg-1">
              <button type="submit" class="btn btn-outline-secondary">View</button>
          </div>
          <div class="col-lg-1">
            <button type="submit" class="btn btn-outline-secondary ">Delete</button>
          </div>
        </div>
      </form>
    </section>
      </div>
        <!--Footer-->