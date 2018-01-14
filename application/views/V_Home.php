<!-- <body> -->
<div class="container-fluid">
    <div class="row">
      <nav class="col-sm-2 d-none d-sm-block bg-light sidebar">
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
                    <a href="<?=base_url();?>product_by_catalog/<?=$category_menu->CategoryID;?>/<?=$category_menu->CategoryDesc;?>"
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
              <a href="#">
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
    <div class="py-6 bg-image-full jumbotron jumbotron-billboard" style="background-image: url('<?=base_url();?>application/assets/img/etc/header3.jpg'); width:1100px; height:200px;  object-fit: scale-down;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                  <h1 class="display-4 font-weight-bold text-warning">STN 1508</h1>
                  <p class="lead text-light">หจก. เอส.ที.เอ็น.(1508) เทรดดิ้ง จำกัด.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron bg-light">
      <h1 class="display-4 font-weight-bold text-info">STN 1508</h1>
      <p class="lead">หจก. เอส.ที.เอ็น.(1508) เทรดดิ้ง จำกัด.</p>
      <hr class="my-4">
      <p class="lead">
          <div class="card-body">
            <h5 class="card-title text-info font-weight-bold">สินค้า และ บริการ</h5>
            <p class="card-text text-dark font-weight-bold">
              - กรดพิคริก(Picric Acid)<br>
              - สารเคมี, อุปกรณ์ที่ใช้ในห้องแลป<br>
              - เครื่องแก้ว, พลาสติก, พอชเลน, ไฮโดมิเตอร์, เทอร์โมมิเตอร์, กระดาษกรอง<br>
              - HYDROMETER WITH SERIAL NUMBER (วัดค่าความถ่วงจำเพาะทุกชนิด ทุกช่วงวัด)<br>
              - เครื่องชั่ง, เครื่องวัด, เครื่องวัดความชื้น, พีเอช มิเตอร์, คอนดัคทิวิตี้<br>
              - ออยล์ บาท, วอเตอร์บาท และ เซอคูเรเตอร์<br>
              - อุปกรณ์ เซฟตี้<br>
              - ตู้ดูดควัน, ฮอทเพลท, ดิสเพนเซอร์, โพลมิเตอร์, เชคเกอร์     ฯลฯ<br>
              - ฮีทติ้ง, คูลิ่งบาท, โอเวน, อิเล็คโทรด<br>
              - ชุดวัด BOD, DOD, JAR TEST<br>
              - เครื่องวัดวิเคราะห์คุณภาพน้ำมัน<br>
              - เตาเผา, เครื่องผสมสีใน LAB, เครื่องมือควบคุมคุณภาพสีและโพลิเมอร์<br>
              - เฟอร์นิเจอร์ LAB<br>
              - รับงานสอบเทียบ<br>
              - เราเป็นตัวแทนจำหน่าย เครื่องมือ สำหรับห้องปฏิบัติการโลหะวิทยา เครื่องทดสอบ เครื่องมือวัดละเอียด จากผู้ผลิตชั้นนำทั่วโลก ฯลฯ
            </p>
            <a href="<?=base_url();?>contact#message" class="btn btn-primary float-right">ติดต่อสอบถามหา สินค้า และ บริการ</a>
          </div>

      </p>
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
