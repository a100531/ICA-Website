<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  
    <div class="spacing10"></div>
  
  <section>
    <div class="container-fluid">
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                  <h2>Add new account</h2>
                </div>
                <div class="col-lg-6">
                </div>
              </div>

                <div class="row">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-3">
<?=form_open($form_action, array('class' => 'form-group')); ?>

<?php foreach ($form_inputs as $input): ?>
                    <div class="formSpacing">
                      <?=form_input($input);?>
                    </div>
<?php endforeach; ?>
                    
                    <div class="formSpacing">
<?php echo form_dropdown('roles',$dropdownRoles,'3',array('class' => 'form-control')); ?>
                    </div>
                    <div class="formSpacing">
<?php echo form_dropdown('category',$dropdownCourse,'/',array('class' => 'form-control')); ?>
                    </div>
                  </div>
                  <div class="col-lg-6">
                  </div>
                </div>

                  <div class="row">
                    <div class="col-lg-5">
                    </div>
                    <div class="col-lg-5">
<?=form_button($buttons['submit'])?>
<?=form_close();?>
                    </div>
                    <div class="col-lg-2">
                    </div>
                  </div>
          </div>
  </section>
<!--Footer-->