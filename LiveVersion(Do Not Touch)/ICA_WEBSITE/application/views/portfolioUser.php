<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="spacing"></div>




<!--Content-->
<div class="container-fluid">
  <section>
      <div class="row navUnderTitleColour">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-7" >
            <h1 class ="pagetitle">Portfolio</h1>
        </div>
        <div class="col-lg-4 d-none d-md-block">
            <img src="/assets/images/personal-portfolio.png" class="portfolioLogoImg" alt="Portfolio">
        </div>
      </div>
  </section>
</div>
  <div class="spacing10"></div>
<div class="container">


<section>

  <div class="row">

    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
      <img src="<?=$portfolioImage1?>" class="rounded userPortfolio" alt="portfolioImg">
        <p id="userPortfoliotext"><?=$name?> <?=$surname?></p>
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-1">
        <img src="<?=$portfolioImage2?>" class="rounded userPortfolio" alt="portfolioImg">
    </div>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-1">
        <img src="<?=$portfolioImage3?>" class="rounded userPortfolio" alt="portfolioImg">
    </div>

    <div class="col-lg-2">
    </div>
    <div class="col-lg-1">
        <img src="<?=$portfolioImage4?>" class="rounded userPortfolio" alt="portfolioImg">
    </div>

  </div>
  <div class="spacing">
  </div>
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
        <p class="userCorse">Interactive Media</p>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-4">
      <p class="addAcdResText">DESCRIPTION</p>
    </div>
    <div class="col-lg-4">
    </div>
  </div>

  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-2">
<?=anchor('editPortfolioUser','Edit',array('class' => 'btn btn-outline-secondary portfolioDeleteButton','target' => '_self'))?>
<?=anchor('editPortfolioUser','Delete',array('class' => 'btn btn-outline-secondary portfolioDeleteButton','target' => '_self'))?>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5">
      <div class="form-group">
        <textarea readonly class="form-control" rows="5"> <?=$description?></textarea>
      </div>
    </div>
    <div class="col-lg-3">
    </div>
  </div>

    <div class="row">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-5">
          <?=anchor($link,'LINK TO MY PORTFOLIO',array('class' => 'addAcdResText','target' => '_blank'))?>
      </div>
    </div>


  
</section>
</div>

  </div>
    <!--Footer-->