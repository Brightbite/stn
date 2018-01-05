<br><br><br><hr>
<!--carousel feature brands-->
  <div class="col-md-12 text-center"><h3 class="text-info font-weight-bold ">Feature Brands</h3></div>
  <div class="container-fluid">
      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="4000" style="max-height:150px; margin:0 auto">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3 active">
                <img class="img-fluid mx-auto d-block" src="<?=base_url('application/assets/img/logo/');?>ajax.jpg" alt="slide 1">
            </div>
            <?php if(isset($feature_brand) == true){?>
              <?php foreach ($feature_brand as $brand){ $brand->BrandID;?>
            <div class="carousel-item col-md-3">
                <img class="img-fluid mx-auto d-block" src="<?=$brand->BrandPicture;?>" alt="<?=$brand->BrandID;?>">
            </div>
            <!-- end foreach -->
          <?php } ?>
          <!-- end  if -->
        <?php }else { ?>
        <h2>no images</h2>
        <?php } ?>
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
    <!-- Footer -->
    <br><br><br><hr>
    <nav class="navbar navbar-expand-md navbar-dark   bg-light">
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
            <p class="text-muted small mb-4 mb-lg-0">อีเมล: stn1508@hotmail.com, web@stn1508.com</p>
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
                <a href="#">
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

  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</html>
