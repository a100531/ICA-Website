<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
        <h1 class ="pagetitle">Portfolio</h1>
    </div>
    <div class="col-lg-4 d-none d-md-block">
        <img src="/assets/images/personal-portfolio.png" class="portfolioLogoImg" alt="Portfolio">
    </div>
  </div>
</section>

<div class="container-fluid">
<div class="row imgRowWidth" >
<div class="col-lg-12">
</div>
</div>
<div class="spacing10"></div>
<!--Content-->

<section>
  <form class="" action="index.html" method="post">

  <div class="row">

    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
      <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
        <p id="userPortfoliotext">Luke Dickhead</p>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-1">
        <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-1">
        <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
    </div>

    <div class="col-lg-1">
    </div>
    <div class="col-lg-1">
        <img src="/assets/images/no-photo.png" class="rounded userPortfolio" alt="portfolioImg">
    </div>
  </div>
  <div class="spacing">
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
        <p class="userCorse">Interactive Media</p>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-4">
      <p class="addAcdResText">DESCRIPTION</p>
    </div>
    <div class="col-lg-4">
    </div>
  </div>

  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
      <button type="submit" class="btn btn-outline-secondary portfolioEditButton">Edit</button>
      <button type="submit" class="btn btn-outline-secondary portfolioDeleteButton">Delete</button>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5">
      <div class="form-group">
        <textarea class="form-control" rows="5"></textarea>
      </div>
    </div>
    <div class="col-lg-3">
    </div>
  </div>

    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-5">
          <p class="addAcdResText">LINK TO MY PORTFOLIO</p>
         <input type="text" class="form-control" placeholder="Example input">
      </div>
    </div>

  </div>
  </form>
</section>


  </div>
    <!--Footer-->