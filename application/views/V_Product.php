<!-- <body> -->
<div class="container-fluid">
    <div class="row">
      <nav class="col-sm-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>home">หน้าหลัก</a>
          </li>
            <li class="nav-item">
              <a class="nav-link active"
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
                          <?=$category_menu->CategoryName;?>
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
          </li><br><hr>
          <p>
              <p class="text-muted text-center">ช่องทางการติดต่อ</p>
              <p class="text-muted text-center"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1812</p>
              <p class="text-muted text-center"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1813</p>
              <p class="text-muted text-center"><i class="fas fa-fax text-success"></i> แฟกซ์: +66 (0) 2 736 1815</p>
              <p class="text-muted text-center"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508@hotmail.com</p>
              <p class="text-muted text-center"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508web@gmail.com</p>
              <p class="text-muted text-center"><i class="far fa-calendar-alt text-danger"></i> วันทำการ: วันจันทร์ - วันศุกร์ </p>
              <p class="text-muted text-center"><i class="far fa-clock text-danger"></i> เวลาทำการ: 9:00น. - 17:00น.</p>
                <a href="#">
                    <p class="text-muted text-center"><i class="fab fa-facebook-square fa-3x text-primary"></i> Facebook page: STN1508</p>
                </a>
                <a href="#" data-toggle="modal" data-target="#sModal">
                    <p class="text-muted text-center"><i class="fab fa-line fa-3x text-success"></i> Line ID: STN1508</p>
                </a>
          </p><hr>
          <p class="text-center"><a href="<?=base_url();?>contact#map"><button class="btn btn-outline-info text-center"><i class="fas fa-map-marker-alt"></i> แผนที่บริษัท STN</button></a></P>
          <p class="text-center"><a href="<?=base_url();?>contact#message"><button class="btn btn-outline-success text-center"><i class="fas fa-map-marker-alt"></i> ส่งข้อความติดต่อบริษัท STN</button></a></P>
        </ul>
      </nav>
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

  <!-- main content -->
  <div class="container">


    <br><br>
    <div class="jumbotron">
      <h1 class="display-4 text-info"><?=$category_desc->CategoryName?></h1>
      <hr class="my-4">
      <p class="lead text-muted"><?=$category_desc->CategoryDesc?></p>

    </div>


  <div class="row">
    <!-- first row -->
    <!-- Category Menu-->
      <?php if(is_array($show_product) == true){ ?>
      <?php foreach ($show_product as  $show) {  $show->CategoryID; ?>
        <div class="col-lg-3" >
          <div class="card mb-4 text-center" style="border-color:white">
            <a href="<?=base_url();?>product_detail/<?=$show->ProductID;?>">
              <input type="hidden" value="<?=$show->ProductID;?>">
              <img class="card-img-top"  src="<?=$show->ProductPicture;?>" style="width:200px; height:250px; object-fit: scale-down;">
            </a>
            <div class="card-block">
              <a href="<?=base_url();?>product_detail/<?=$show->ProductID;?>">
                <input type="hidden" value="<?=$show->ProductID;?>">
                <h5 class="card-title text-info">เคมีภัณฑ์ <?=$show->ProductName;?></h5>
              </a>
              <!-- <p class="card-text">เคมีภัณฑ์คุณภาพ <?=mb_substr($show->ProductDesc,0,150,'utf-8');?>...</p> -->
              <!-- <a href="<?=base_url();?>product_detail/<?=$show->ProductID;?>" class="btn btn-primary float-right">ดูเพิ่มเติม...</a> -->
            </div>
          </div>
        </div>
      <?php } //end foreach ?>
      <?php }else{ ?>
        <h2 class="text-muted">ติดต่อสอบถามหาสินค้าและบริการอื่นๆกับบริษัท STN <a href="<?=base_url();?>contact"><button class="btn btn-info"><i class="fas fa-phone"></i> ติดต่อบริษัท STN</button></a>
        <?php } ?>

  </div>

    <!-- end first row  -->

    <br><br>

    </div>
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
