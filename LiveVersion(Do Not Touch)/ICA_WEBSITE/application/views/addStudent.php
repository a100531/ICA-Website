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
  
    <div class="spacing10"></div>
  
  <section>
    <div class="container-fluid">
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                  <h2>Add new student</h2>
                </div>
                <div class="col-lg-6">
                </div>
              </div>

                <div class="row">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-3">
                    <?=form_open('/', array('class' => 'form-group')); ?>

<?php foreach ($form_inputs as $input): ?>
                    <div class="formSpacing">
                      <?=form_input($input);?>
                    </div>
<?php endforeach; ?>
                    <div class="formSpacing">
                      <select class="custom-select" name="" id="courseAddStudent">
                        <option selected>Student</option>
                        <option value="1">STUDENT 1</option>
                        <option value="2">STUDENT 2</option>
                        <option value="3">STUDENT 3</option>
                      </select>
                    </div>

                    <?=form_close();?>
                  </div>
                  <div class="col-lg-6">
                  </div>
                </div>

                  <div class="row">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-5">
<?=form_button($buttons['submit'])?>
                    </div>
                    <div class="col-lg-2">
                    </div>
                  </div>
          </div>
  </section>
<!--Footer-->