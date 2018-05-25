<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
<div class="row" >
<div class="col-lg-12 spacing6">
</div>
</div>
<!--content-->
<section>

<div class="row">
  <div class="col-lg-4">
  </div>
  <div class="col-lg-2 d-none d-lg-block">
    <img src="/assets/images/face.png" id="loginFaceImg" alt="">
  </div>
  <div class="col-lg-2 d-none d-lg-block">
    <img src="/assets/images/hello.png" id="loginhelloImg" alt="">
  </div>
</div>
  <div class="spacing2">

  </div>
<div class="row" >
  <div class="col-lg-5">
  </div>
  <div class="col-lg-3">
    <h1>Log in</h1>
  </div>
  <div class="col-lg-3">
  </div>
</div>
<div class="row" >
  <div class="col-lg-4">
  </div>
  <div class="col-lg-4">
    <?=form_open($form_action, array('class' => 'form-group')); ?>

<?php foreach ($form_inputs as $input): ?>
    <div class="formSpacing">
      <?=form_input($input);?>
    </div>
<?php endforeach; ?>
<?=form_button($buttons['submit'])?>
<?=form_close();?>
  </div>
</div>

</div>

</section>
<!--Footer-->
