<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<div class="spacing">
</div>
<section class="container-fluid">
  <div class="row navUnderTitleColour">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-7" >
        <h1 class ="pagetitle">Portfolios of Interactive Media students</h1>
    </div>
    <div class="col-lg-4 d-none d-lg-block">
        <img src="/assets/images/portfolio-list.png" class="portfolioLogoImg" alt="Portfolio">
    </div>
  </div>
</section>
<div class="spacing10">

</div>
<div class="container">

<!--Content-->
  <section>
<?php foreach ($portfolios->result_array() as $portfolio): ?>
    <div class="row">
     

      <div class="col-lg-1">
      </div>
<?php $data = read_xml('portfolioUploads/'.$portfolio['id'].'/paths.xml') ?>
      <div class="col-lg-3">
        <img src="<?='portfolioUploads/'.$portfolio['id'].'/'.$portfolio['id'].'portfolioImage.png'?>" class="rounded portfolioImg" alt="portfolioImg">
        <p class="portfoliotext"><?=$portfolio['u_email']?></p>
      </div>
      <div class="col-lg-8">
        <p class="portfolioDescription"><?=$data['description']?></p>
        <a href="<?=$data['link']?>" class="btn btn-outline-secondary portfolioDeleteButton">Portfolio</a>
      </div>
     

    </div>
    <div class="spacing"></div>
    <hr>
    
<?php endforeach;?>
  </section>
</div>