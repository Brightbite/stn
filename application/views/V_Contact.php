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
      <!-- <div class="py-5 bg-image-full" style="background-image: url('<?=base_url();?>application/assets/img/etc/contact2.jpg'); height:200px;">
      </div> -->
      <div class="py-6 bg-image-full jumbotron jumbotron-billboard" style="background-image: url('<?=base_url();?>application/assets/img/etc/contact2.jpg'); height:200px;">
          <div class="container">
              <div class="row">
                  <div class="col-xl-5">
                  </div>
              </div>
          </div>
      </div>

    <div class="row">
      <div class="col-md-7"><br>
        <h2 class="text-info">ส่งข้อความติดต่อสอบถาม</h2><hr>
          <h5 class="text-muted">ติดต่อสอบถาม / ขอใบเสนอราคา / อื่นๆ</h5>
          <form class="bg-light" method="post" id="message_form"  enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-6 col-form-label">ชื่อผู้ติดต่อ</label>
                <label class="col-md-6 col-form-label">บริษัท</label>
                <div class="col-md-6">
                <input type="text" name="customerName" id="customerName" class="form-control" required autocomplete="false" placeholder="ชื่อผู้ติดต่อ" maxlength="20">
              </div>
              <div class="col-md-6">
                <input type="text" name="customerCompany" id="customerCompany" class="form-control" required  placeholder="ชื่อบริษัท" maxlength="100">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-6 col-form-label">Email</label>
              <label class="col-md-6 col-form-label">เบอร์โทรศัพท์</label>
              <div class="col-md-6">
                <input type="text" name="customerEmail" id="customerEmail" class="form-control" required placeholder="Example@email.com" maxlength="50" aria-describedby="emailHelpInline">
              </div>
              <div class="col-md-6">
                <input type="text" name="customerTel" id="customerTel" class="form-control" required placeholder="Contact number" maxlength="20" aria-describedby="telHelpInline">
              </div>
            </div>
            <label for="comment">เรื่อง</label>
            <input type="text" name="customerSubject" id="customerSubject" class="form-control" required  placeholder="เรื่อง" maxlength="100"><br>
            <label for="message">ข้อความ:</label>
            <textarea class="form-control" rows="5" id="customerMessage"></textarea><br><hr>
            <input type="button" value="ส่งข้อความ" class="btn btn-primary btn-lg btn-block" id="btn-send-message">
          </form>
          <br><br>
        <h2 class="text-info card-title">ที่ตั้งสำนักงาน</h3><hr>
        <iframe
          width="635"
          height="450"
          frameborder="0"
          style="border:0"
          src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfq66xdhHTERNrmmuTMoHfc&key=AIzaSyAyrq1E46Brt0-e7SX9woDiYFDOZi9qyaQ"
          allowfullscreen>
        </iframe>
      </div>
      <div class="col-md-5 bg-light"><br>
          <h2 class="text-info card-title">ช่องทางการติดต่อ</h3><hr><br>
          <h4 class="text-dark"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1812</h4>
          <h4 class="text-dark"><i class="fas fa-phone text-primary"></i> โทร:  +66 (0) 2 736 1813</h4><br><hr><br>
          <h4 class="text-dark"><i class="fas fa-fax text-success"></i> แฟกซ์: +66 (0) 2 736 1815</h4><br><hr><br>
          <h4 class="text-dark"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508@hotmail.com</h4>
          <h4 class="text-dark"><i class="far fa-envelope text-warning"></i> อีเมล: stn1508web@gmail.com</h4><br><hr><br>
          <h4 class="text-dark"><i class="far fa-calendar-alt text-danger"></i> วันทำการ: วันจันทร์ - วันศุกร์ </h4>
          <h4 class="text-dark"><i class="far fa-clock text-danger"></i> เวลาทำการ: 9:00น. - 17:00น.</h4><br><hr><br>
            <a href="#">
                <h4 class="text-dark"><i class="fab fa-facebook-square fa-3x text-primary"></i> Facebook page: STN1508</h4><br>
            </a>
            <a href="#">
                <h4 class="text-dark"><i class="fab fa-line fa-3x text-success"></i> Line ID: STN1508</h4><br><hr><br>
            </a>
      </div>
    </div>
    <br><br><hr>
    </div>


  </div>
  <!-- end main container -->
  </div>
  <!-- end main row -->
</div>
<!-- end whole main container -->

  <!-- end main content -->

  <!-- Javascript -->
