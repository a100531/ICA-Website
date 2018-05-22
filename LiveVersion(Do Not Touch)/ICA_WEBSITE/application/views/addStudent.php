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
                  <h2>Add new student</h2>
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
                      <select class="custom-select" name="" id="courseAddStudent">
                        <option selected>Student</option>
                        <option value="1">STUDENT 1</option>
                        <option value="2">STUDENT 2</option>
                        <option value="3">STUDENT 3</option>
                      </select>
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