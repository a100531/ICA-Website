<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <div class="spacing10">
    </div>



  <section>
    <div class="container">
      <form class="" action="#" method="post">
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
<?php echo form_dropdown('lecturers',$dropdownLecturers,'/',array('class' => 'form-control')); ?>
                </div>
                <div class="col-lg-2">
                  <p>Date: TILL</p>
                </div>
                <div class="col-lg-6">
                  <div class="form-group"> <!-- Date input -->
                    <input class="form-control" name="date" placeholder="MM/DD/YYY" type="date"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5">
                </div>
                <div class="col-lg-2">
                  <button type="button" class="btn btn-outline-secondary okayButton" >Ok</button>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
              </form>
          </div>
        </section>

    <!--Footer-->