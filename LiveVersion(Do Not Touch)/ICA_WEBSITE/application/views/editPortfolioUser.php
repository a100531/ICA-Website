<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="container">
  <div class="row imgRowWidth" >
    <div class="col-lg-12 navSpace">
    </div>
  </div>
  <div class="spacing">
  </div>

    <!--Content-->
    <section>
<?=form_open_multipart($form_action, array('class' => 'form-group')); ?>
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
            <img src="<?=$profileImage?>" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">Upload
<?=form_input($profile)?>
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
            <img src="<?=$profileImage1?>" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">Upload
<?=form_input($portfolio1)?>
            </label>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">

            <img src="<?=$profileImage2?>" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">Upload
<?=form_input($portfolio2)?>
            </label>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-3">

            <img src="<?=$profileImage3?>" class="rounded userPortfolio" alt="portfolioImg">
            <label class="btn btn-outline-secondary uploadBtn">Upload
<?=form_input($portfolio3)?>
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
<?=form_textarea($description)?>
            </div>

            <p class="addAcdResText">LINK TO MY PORTFOLIO</p>
<?=form_input($link)?>
          </div>
          <div class="col-lg-5">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
         </div>
         <div class="col-lg-5">
<?=form_button($buttons['submit'])?>

          </div>
        </div>

<?=form_close();?>

    </section>


      </div>
        <!--Footer-->