<!-- <body> -->
<div class="container-fluid">
    <div class="row">
      <nav class="col-sm-2 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">

          <li class="nav-item">
            <a class="nav-link active" href="<?=base_url();?>home">หน้าหลัก</a>
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
                    <a href="<?=base_url();?>product_by_catalog/<?=$category_menu->CategoryID;?>/<?=$category_menu->Description;?>"
                      class="btn bg-light text-info" role="group">
                      <?=$category_menu->Description;?>
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
            <a class="nav-link " href="#">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Export</a>
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

    <div class="jumbotron">
      <h1 class="display-4">กรดพิคริก!</h1>
      <img class="card-img float-right" src="<?=base_url('application/assets/img/product/');?>merck1.jpg" alt="Card image" style="max-height:1149px; max-width:270px">
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>

    <div class="card">
      <div class="card-header">
        Featured ตาม Order
      </div>
      <div class="card-body">
        <h5 class="card-title">ใช้ catalog number</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">สอบถามสารเคมี</a>
      </div>
    </div>

    <br><br>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>

    <!-- first row -->
    <div class="row">
      <div class="card" style="width: 14rem;">
        <img class="card-img-top"  src="<?=base_url('application/assets/img/product/');?>merck1.jpg" alt="Card image" style="max-height:400px; max-width:400px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">เคมีภัณฑ์ Merck</h5>
          <p class="card-text">เคมีภัณฑ์คุณภาพจาก Merck</p>
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
  <br><br><br><hr>
<!--carousel feature brands-->
  <div class="col-md-12 text-center"><h3 class="text-info font-weight-bold ">Feature Brands</h3></div>
  <div class="container-fluid">
      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="4000" style="max-height:150px; margin:0 auto">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3 active">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>ajax.jpg" alt="slide 1">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>fluka.jpg" alt="slide 2">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>IKA.jpg" alt="slide 3">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>Merck.jpg" alt="slide 4">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>PGL.jpg"  alt="slide 5">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>sigma.jpg" alt="slide 6">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>TOWA.jpg" alt="slide 7">
            </div>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>GLM.jpg" alt="slide 7">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
              <i class="fa fa-chevron-left fa-lg text-muted"></i>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
              <i class="fa fa-chevron-right fa-lg text-muted"></i>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
  <!-- end of carousel -->

  <!-- Javascript -->
  <script>






  </script>
