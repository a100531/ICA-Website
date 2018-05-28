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
<?=form_open_multipart($form_image, array('class' => 'form-group',)); ?>
        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4">
            <h2>Edit Profile</h2>
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
            <label class="btn btn-outline-secondary uploadBtn">Choose Image
<?=form_input($File)?>
            </label>
<?=form_button($submitImage['submit'],'Upload Profile Image')?>
          </div>
          <div class="col-lg-8">
          </div>
        </div>
  
<?=form_close()?>
        <div class="spacing">

        </div>
<?=form_open_multipart($form_action, array('class' => 'form-group',)); ?>  
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
<?=form_button($submitLinkDesc['submit'])?>

          </div>
        </div>

<?=form_close();?>

    </section>


      </div>
        <!--Footer-->