<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <div class="spacing10">
    </div>



  <section>
    <div class="container">
            <div class="row">
<?=form_open($form_action, array('class' => 'form-group',)); ?>
              <div class="col-lg-1">
              </div>
              <div class="col-lg-4">
                <h2>Add Vacancy</h2>
              </div>
              <div class="col-lg-6">
              </div>
            </div>
            <div class="row spacing2">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-2 ">
                  <p class="addAcdResText">ADD COURSE</p>
<?php echo form_dropdown('category',$dropdownCourse,'/',array('class' => 'form-control')); ?>
                </div>
                <div class="col-lg-2">
                <p class="addAcdResText">EXPIRY DATE</p>
<?=form_input($expiry_date);?>
                </div>
                <div class="col-lg-4">
                <p class="addAcdResText">ADD LINK</p>
<?=form_input($vacancy_link);?>
                </div>
            </div>



            <div class="row spacing2">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-5 ">
                <p class="addAcdResText">ADD THE NAME OF VACANCY</p>
<?=form_input($vacancy_name);?>
              </div>
              <div class="col-lg-1">
              </div>
            </div>



            <div class="row spacing2">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-5 ">
                <p class="addAcdResText">DESCRIPTION</p>
<?=form_textarea($vacancy_description)?>
              </div>
              <div class="col-lg-1">
              </div>
            </div>



            <div class="row">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-1">
<?=form_button($buttons['submit'])?>
              </div>
              <div class="col-lg-7">
              </div>
            </div>
<?=form_close()?>
    </div>
  </section>

    <!--Footer-->