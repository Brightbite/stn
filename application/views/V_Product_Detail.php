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
            <a class="nav-link " href="#">ขอใบเสนอราคา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url();?>contact">ติดต่อสอบถาม</a>
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


  <!-- main content -->

    <br><br>


    <!-- first row -->
    <div class="col-md-5"><br>
        <img class="img img-responsive" src="<?=$product_detail->ProductPicture;?>" alt="" style="width:100%;max-width:680px; height:100%; max-height:720px; object-fit: scale-down;">
    </div>
    <div class="col-md-4">
      <!-- <div class="card-body"> -->
          <br><br> <br><br>
            <h3 class="text-info card-title"><?php echo $product_detail->ProductName;?> </h3><hr>
            <h6 class="text-muted text-white">Product ID# <?php echo $product_detail->ProductID;?></h6>
            <h7 class="text-muted text-white">Category: <?php echo $product_detail->CategoryName;?></h7><br><br>

    </div>
    <!-- end first row  -->

    <br><br>

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
