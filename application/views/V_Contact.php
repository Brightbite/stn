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
            <a class="nav-link " href="#">ขอใบเสนอราคา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>contact">ติดต่อสอบถาม</a>
          </li>
        </ul>

        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">ค้นหา</a>
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
        <h1 class="display-4">Address</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
      </div>
    </div>
  </main>
  <!-- end main container -->
  </div>
  <!-- end main row -->
</div>
<!-- end whole main container -->

  <!-- end main content -->



  <!-- Javascript -->
  <script>






  </script>
