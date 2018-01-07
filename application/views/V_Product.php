<!-- <body> -->
<div class="container-fluid">
    <div class="row">
      <nav class="col-sm-2 col-md-2 d-none d-sm-block bg-light sidebar">
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
            <a class="nav-link" href="<?=base_url();?>contact">ติดต่อสอบถาม</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ค้นหา</a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">Nav item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nav item again</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">One more nav</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Another nav item</a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">Nav item again</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">One more nav</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Another nav item</a>
          </li>
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
