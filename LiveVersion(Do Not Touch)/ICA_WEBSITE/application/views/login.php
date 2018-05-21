<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><nav class="navbar navbar-expand-lg navbar-light fixed-top">
<a href="/" class="navbar-brand"><img src="/assets/images/logo_white.png" id="logoimage"></a>

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
<div class="container">
<div class="row" >
<div class="col-lg-12 spacing6">
</div>
</div>
<!--content-->
<section>

<div class="row">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-2 d-none d-lg-block">
    <img src="/assets/images/face.png" id="loginFaceImg" alt="">
  </div>
  <div class="col-lg-2 d-none d-lg-block">
    <img src="/assets/images/hello.png" id="loginhelloImg" alt="">
  </div>
</div>
  <div class="spacing2">

  </div>
<div class="row" >
  <div class="col-lg-5">
  </div>
  <div class="col-lg-3">
    <h1>Log in</h1>
  </div>
  <div class="col-lg-3">
  </div>
</div>
<div class="row" >
  <div class="col-lg-4">
  </div>
  <div class="col-lg-4">
    <?=form_open($form_action, array('class' => 'form-group')); ?>

<?php foreach ($form_inputs as $input): ?>
    <div class="formSpacing">
      <?=form_input($input);?>
    </div>
<?php endforeach; ?>
<?=form_button($buttons['submit'])?>
<?=form_close();?>
  </div>
</div>

</div>

</section>
<!--Footer-->
