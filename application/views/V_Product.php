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
                <a href="#">
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
      <h1 class="display-4"><?=$category_desc->CategoryName?></h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
    </div>


    <!-- first row -->
    <div class="row">
      <!-- Category Menu-->
      <?php if(is_array($show_product) == true){ ?>
      <?php foreach ($show_product as  $show) {  $show->CategoryID; ?>
        <div class="card" style="width: 14rem;">
          <a href="<?=base_url();?>product_detail/<?=$show->ProductID;?>">
            <input type="hidden" value="<?=$show->ProductID;?>">
            <img class="card-img-top"  src="<?=$show->ProductPicture;?>" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
          </a>
          <div class="card-body">
            <h5 class="card-title">เคมีภัณฑ์ <?=$show->ProductName;?></h5>
            <p class="card-text">เคมีภัณฑ์คุณภาพ <?=mb_substr($show->ProductDesc,0,150,'utf-8');?>...</p>
            <a href="<?=base_url();?>product_detail/<?=$show->ProductID;?>" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
          </div>
        </div>
      <?php } //end foreach ?>
      <?php }else{ ?>
        <h2 class="text-light">no product information</a>
      <?php } ?>
    </div>
    <!-- end first row  -->

    <br><br>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">second row Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>

    <!-- second row -->
      <div class="row">
      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

    </div>
    <!--end second row -->
    <br><br>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">เคมีภัณฑ์ อื่นๆ</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>

    <!-- third row -->
      <div class="row">
      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>barrel.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">Acetone 112 Trichloroethylene Ethanol 95-98%</p>
          <a href="#" class="btn btn-primary float-right">ดูเพิ่มเติม...</a>
        </div>
      </div>
    </div>
    <!--end third row -->
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
