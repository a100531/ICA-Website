<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <div class="spacing10">
    </div>



  <section>
    <div class="container">
<?=form_open($form_action, array('class' => 'form-group')); ?>
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                  <h2>Sick leave</h2>
                </div>
                <div class="col-lg-6">
                </div>
              </div>
              <div class="row" >
                <div class="col-lg-1">
                </div>
                <div class="col-lg-3">
                <p><?=$Name?> <?=$Surname?></p>
                </div>
                <div class="col-lg-2">
                  <p>Date: TILL</p>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
<?php foreach ($form_inputs as $input): ?>
                  <?=form_input($input);?>
<?php endforeach; ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5">
                </div>
                <div class="col-lg-2">
<?=form_button($buttons['submit'])?>
<?=form_close();?>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
              
          </div>
        </section>

    <!--Footer-->