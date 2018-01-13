
    <!-- Footer -->
    <br><br><hr>
    <nav class="navbar navbar-expand-md bg-light">
      <div class="container">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="<?=base_url();?>contact">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">copyright 2018 &copy; S.T.N. 1508 Trading LTD., Part.</p>
            <p class="text-muted small mb-4 mb-lg-0">เวลาทำการ: วันจันทร์ - วันศุกร์ 9:00น. - 17:00น.</p>
            <p class="text-muted small mb-4 mb-lg-0">โทร: +66 (0) 2 736 1812, โทร: +66 (0) 2 736 1813, แฟกซ์: +66 (0) 2 736 1815 </p>
            <p class="text-muted small mb-4 mb-lg-0">อีเมล: stn1508@hotmail.com, stn1508web@gmail.com</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a href="#">
                  <div style="color:blue">
                    <i class="fab fa-facebook-square fa-3x"></i>
                  </div>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" data-toggle="modal" data-target="#sModal">
                  <div style="color:green">
                    <i class="fab fa-line fa-3x"></i>
                  </div>
                </a>
              </li>
            </ul>
            <br><br>
            <p class = "float-right"><a href="#" class="text-info"> <i class="fa fa-chevron-up text-info" aria-hidden="true"></i>Back to top</a></p>
          </div>

      </div>
    </nav>
    <!-- modal line id -->
    <div class="modal fade" id="sModal" tabindex="-1" role="dialog" aria-labelledby="sModalLabel" ng-controller="loginController">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" id="sModalLabel">Line ID: STN1508</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
            <img src="<?php echo base_url();?>application/assets/img/etc/line.png" style="object-fit: scale-down;">
          <div class="modal-footer">
            <a href="<?php echo base_url();?>contact" button type="button"  class="btn btn-outline-primary btn-lg btn-block">ส่งข้อความติดต่อสอบถาม</button></a>
          </div>
        </div>
      </div>

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url('application/assets/src/'); ?>J_Contact.js"></script>
  <script type="text/javascript" src="<?php echo base_url('application/assets/src/'); ?>J_Search.js"></script>
  <script type="text/javascript" src="<?php echo base_url('application/assets/js/'); ?>jquery.min.js"></script>
</html>
