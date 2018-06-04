<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<div class="container-fluid">
<div class="row imgRowWidth" >
<div class="col-lg-12 navSpace">
</div>
</div>
<section>
  <div class="row navUnderTitleColour">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-7" >
        <h1 class ="pagetitle">Academic Resources</h1>
    </div>
    <div class="col-lg-4 d-none d-lg-block">
        <img src="/assets/images/academic-resources.png" class="portfolioLogoImg" alt="Portfolio">
    </div>
  </div>
</section>
<div class="spacing6">
</div>
<!--Content-->
<section>
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-10">
    </div>
  </div>

  
  <div class="row">
<?php foreach($links as $link):?>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-2">
    <a href="<?=$link['link']?>">
      <img src="<?=$link['image']?>" class="rounded portfolioImg" alt="portfolioImg">
    </a>

    </div>
    <div class="col-lg-2">
<?=form_open($resource_delete)?>
    <input type="hidden" name="title" value="<?=$link['title']?>"/>
<?=form_button($Delete['submit'])?>
<?=form_close()?>
    </div>
    <?php endforeach;?>
</div>
</section>
  </div>
    <!--Footer-->