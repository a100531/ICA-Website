<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <div class="spacing10">
    </div>

  <section>
    <div class="container-fluid">
<?=form_open_multipart($form_action, array('class' => 'form-group',)); ?>
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                  <h2>Upload timetable</h2>
                </div>
                <div class="col-lg-6">
                </div>
              </div>

              <div class="spacing6">

              </div>
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                  <p class="addAcdResText">NEW TIMETABLE ONLY PDF PLEASE!!</p>
                  <img src="/assets/images/no-photo.png" class="rounded addAcdResImg">
                </div>
                <div class="col-lg-6">
                </div>
              </div>
              <div class="row spacing2">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-2">
                  <label class="btn btn-outline-secondary uploadBtn">Choose Timetable
<?=form_input($timetable)?>
                 </label>

                </div>
                <div class="col-lg-1">
                </div>
                <div class="col-lg-9">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-2">
<?=form_button($button['submit'],'Upload Timetable')?>
                </div>
                <div class="col-lg-2">

                </div>
              </div>
            </form>
          </div>
        </section>

    <!--Footer-->