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

  <!-- main content -->
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4 text-dark ">ห้างหุ้นส่วนจำกัด เอส.ที.เอ็น.(1508) เทรดดิ้ง</h1>
      <hr class="my-4">
      <p class="lead">รายละเอียด</p>
    </div>
    <div class="row">
      <div class="col-md-7"><br>
        <h2 class="text-info card-title">รายละเอียดที่ตั้งสำนักงาน</h3><hr>
        <iframe
          width="600"
          height="450"
          frameborder="0"
          style="border:0"
          src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfq66xdhHTERNrmmuTMoHfc&key=AIzaSyAyrq1E46Brt0-e7SX9woDiYFDOZi9qyaQ"
          allowfullscreen>
        </iframe>
      </div>
      <div class="col-md-5 bg-light"><br>
          <h2 class="text-info card-title">รายละเอียดช่องทางการติดต่อ</h3><hr><br>
          <h3 class="text-dark"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1812</h3>
          <h3 class="text-dark"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1813</h3><hr><br>
          <h3 class="text-dark"><i class="fas fa-fax text-success"></i> แฟกซ์: +66 (0) 2 736 1815</h3><hr><br>
          <h4 class="text-dark"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508@hotmail.com</h4>
          <h4 class="text-dark"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508web@gmail.com</h4><hr><br>
          <h4 class="text-dark"><i class="far fa-calendar-alt text-danger"></i> วันทำการ: วันจันทร์ - วันศุกร์ </h4>
          <h4 class="text-dark"><i class="far fa-clock text-danger"></i> เวลาทำการ: 9:00น. - 17:00น.</h4><hr><br>
            <a href="#">
                <h4 class="text-dark"><i class="fab fa-facebook-square fa-3x text-primary"></i> Facebook page: STN1508</h4><br>
            </a>
            <a href="#">
                <h4 class="text-dark"><i class="fab fa-line fa-3x text-success"></i> Line ID: STN1508</h4>
            </a>
      </div>
    </div>
  </div>
  <!-- end main container -->
  </div>
  <!-- end main row -->
</div>
<!-- end whole main container -->

  <!-- end main content -->



  <!-- Javascript -->
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyrq1E46Brt0-e7SX9woDiYFDOZi9qyaQ&callback=initMap">
  </script>
