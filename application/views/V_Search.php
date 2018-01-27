<!-- <body> -->
<div class="container-fluid">
    <div class="row">
      <nav class="col-sm-2 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>home">หน้าหลัก</a>
          </li>
            <li class="nav-item">
              <a class="nav-link"
                data-toggle="collapse"
                data-target="#navbarToggleExternalContent"
                aria-controls="navbarToggleExternalContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                href="#">สินค้า
              </a>
              <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="bg-light p-4">
                    <ul class="nav nav-link">
                      <!-- Category Menu-->
                      <?php if(is_array($category_menu) == true){ ?>
                      <?php foreach ($category_menu as  $category_menu) {  $category_menu->CategoryID; ?>
                        <a href="<?=base_url();?>product_by_catalog/<?=$category_menu->CategoryID;?>/<?php echo $category_menu->CategoryName;?>"
                          class="btn bg-light text-info" role="group">
                          <?=$category_menu->CategoryDesc;?>
                        </a>
                      <?php } //end foreach ?>
                      <?php }else{ ?>
                      <a href="" class="bg-dark text-light list-group-item">All Catalog</a>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>contact">ติดต่อ</a>
          </li>
        </ul><br><hr>
        <p>
            <p class="text-muted text-center">ช่องทางการติดต่อ</p>
            <p class="text-muted text-center"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1812</p>
            <p class="text-muted text-center"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1813</p>
            <p class="text-muted text-center"><i class="fas fa-fax text-success"></i> แฟกซ์: +66 (0) 2 736 1815</p>
            <p class="text-muted text-center"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508@hotmail.com</p>
            <p class="text-muted text-center"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508web@gmail.com</p>
            <p class="text-muted text-center"><i class="far fa-calendar-alt text-danger"></i> วันทำการ: วันจันทร์ - วันศุกร์ </p>
            <p class="text-muted text-center"><i class="far fa-clock text-danger"></i> เวลาทำการ: 9:00น. - 17:00น.</p>
              <a href="https://www.facebook.com/STN-1508-Trading-Part-326135951220447/">
                  <p class="text-muted text-center"><i class="fab fa-facebook-square fa-3x text-primary"></i> Facebook page: STN1508</p>
              </a>
              <a href="#" data-toggle="modal" data-target="#sModal">
                  <p class="text-muted text-center"><i class="fab fa-line fa-3x text-success"></i> Line ID: STN1508</p>
              </a>
        </p><hr>
        <p class="text-center"><a href="<?=base_url();?>contact#map"><button class="btn btn-outline-info text-center"><i class="fas fa-map-marker-alt"></i> แผนที่บริษัท STN</button></a></P>
        <p class="text-center"><a href="<?=base_url();?>contact#message"><button class="btn btn-outline-success text-center"><i class="fas fa-map-marker-alt"></i> ส่งข้อความติดต่อบริษัท STN</button></a></P>
      </nav>
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

  <!-- main content -->
  <div class="container">
    <div class=" jumbotron jumbotron-billboard" style="background-image: url('<?=base_url();?>application/assets/img/etc/header1.jpg'); width:1100px; height:200px;  object-fit: scale-down;">
                <div class="col-xl-12">
                  <h1 class="display-4 text-warning">ผลการค้นหา</h1>
                  <p class="lead text-light">ผลการค้นหา</p>
                </div>
    </div>
    <br><br>
    <h1 class="display-4 text-info font-weight-bold"><i class="fas fa-search"></i> keyword: <?=$search_item?></h1><hr><br>
    <!-- first row -->
    <div class="row">
      <!-- Category Menu-->
      <?php if(is_array($search_product) == true){ ?>
      <?php foreach ($search_product as  $search) {  $search->CategoryID; ?>
        <div class="col-lg-3">
          <div class="card mb-4 text-center" style="border-color:white">
          <a href="<?=base_url();?>product_detail/<?=$search->ProductID;?>">
            <input type="hidden" value="<?=$search->ProductID;?>">
            <img class="card-img-top"  src="<?=$search->ProductPicture;?>" alt="Card image" style="width:200px; height:250px; object-fit: scale-down;">
            <h5 class="card-title text-info"><?=$search->ProductName;?></h5>
          </a>
          </div>
        </div>
      <?php } //end foreach ?>
      <?php }else{ ?>
        <h2 class="text-muted">ไม่พบสินค้าที่ท่านค้นหา กรุณาลองกรอกข้อมูลอื่น หรือ <a href="<?=base_url();?>contact"><button class="btn btn-info"><i class="fas fa-phone"></i> ติดต่อบริษัท STN</button></a>
      <?php } ?>
    </div>
    <!-- end first row  -->
    <br><br>
  </main>
  <!-- end main container -->
  </div>
  <!-- end main row -->
</div>
<!-- end whole main container -->

  <!-- end main content -->

  <!-- end of carousel -->

  <!-- Javascript -->
  <script>






  </script>
