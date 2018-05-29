<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="spacing"></div>
  <section>
      <div class="row navUnderTitleColour">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-7" >
            <h1 class ="pagetitle">Vacancies</h1>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <img src="/assets/images/vacancies.png" class="portfolioLogoImg" alt="Portfolio">
        </div>
      </div>
  </section>
  <div class="container">



    <div class="spacing6">
    </div>
    <!--Content-->
    <section>
<?php foreach ($vacancies->result_array() as $vacancy): ?>

        <div class="row">
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5">

              <h2><?=$vacancy['v_name']?></h2>
              <p>
<?=$vacancy['v_description']?>
              </p>
          </div>
          <div class="col-lg-6">
          
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
          </div>
          <div class="col-lg-2">
<?=form_open($form_edit)?>
    <input type="hidden" name="id" value="<?=$vacancy['id']?>"/>
<?=form_button($Edit['submit'])?>
<?=form_close()?>
<?=form_open($form_delete)?>
    <input type="hidden" name="id" value="<?=$vacancy['id']?>"/>
<?=form_button($Delete['submit'])?>
<?=form_close()?>
            </div>
        </div>
<?php endforeach;?>
    </section>
  </div>
        <!--Footer-->