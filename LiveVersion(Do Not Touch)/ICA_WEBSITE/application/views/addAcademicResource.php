<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="row" >
    <div class="col-lg-12 spacing10">
    </div>
  </div>



  <section>
    <div class="container-fluid">
              <div class="row">
                <div class="col-lg-1">
                </div>
<?=form_open($form_action)?>
                <div class="col-lg-4">
                  <h2>Add Academic Resources</h2>
                </div>
                <div class="col-lg-6">
                <p class="addAcdResText">TITLE</p>
<?=form_input($title)?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4">
                  <p class="addAcdResText">IMAGE</p>
                  <img src="/assets/images/no-photo.png" class="rounded addAcdResImg">
                </div>
                <div class="col-lg-6">
                </div>
              </div>
              <div class="row spacing2">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-2">
<?=form_input($file)?>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-lg-9">

                </div>

              </div>
              <div class="row spacing2">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-1 addAcdResText">
                  <p class="addAcdResText">LINK</p>
                </div>
                <div class="col-lg-10">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-4 ">
<?=form_input($link)?>
                </div>
                <div class="col-lg-7">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5">
                </div>

                <div class="col-lg-1">
<?=form_button($buttons['submit'])?>
                </div>
            </div>

<?=form_close()?>

          </div>
        </section>

    <!--Footer-->