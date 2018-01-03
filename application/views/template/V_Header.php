<!DOCTYPE html>
<html>
  <head>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="baseUrl" content="<?=base_url();?>">
    <meta name="keywords" content="<?=$keywords;?>">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="STN">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>bootstrap.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>bootstrap-grid.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>bootstrap-reboot.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/');?>customs.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/'); ?>half-slider.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/'); ?>full-width-pics.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/'); ?>landing-page.css">
    <link rel="stylesheet" href="<?=base_url('application/assets/css/'); ?>landing-page.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script type="text/javascript" src="<?=base_url('application/assets/js/'); ?>jquery.js"></script>
  </head>
  <header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container">
        <a class="navbar-brand font-weight-bold" href="<?=base_url();?>home">S T N</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="<?=base_url();?>home"><i class="fas fa-home"></i> หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="<?=base_url();?>#"><i class="fas fa-flask"></i> สินค้า</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="<?=base_url();?>#"><i class="fas fa-shopping-cart"></i> ขอใบเสนอราคา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="<?=base_url();?>#"><i class="fas fa-phone"></i> ติดต่อ</a>
          </li>
          <li class="nav-item">
          <form method="post" action="<?php echo base_url();?>search">
            <input type="text" name="searchProduct" placeholder="search " class="form-control pull-left ">
          </li>
          <li class="nav-item">
            <button type="submit" name="buttonSearch" class="btn btn-outline-info pull-right"><i class="fas fa-search"></i> Search</button>
          </li>
        </form>
        </ul>
      </div>
    </nav>

    <!-- Masthead -->
      <div class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
        <a href="<?=base_url();?>home"><img class="img-fluid d-block mx-auto" src="<?=base_url('application/assets/img/logo/');?>stn.jpg" alt="" style="max-height:400px; max-width:400px"></a>
      </div>
      <!-- end Masthead -->
      <br><hr>

  </header>

  <body>
    
