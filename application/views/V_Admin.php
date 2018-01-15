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


    <div class="table-responsive">
      <table class="table table-striped">
            <!--Column-->
             <tr class="align-center">
               <th>No.</th>
               <th>วันที่</th>
               <th>ชื่อผู้ติดต่อ</th>
               <th>บริษัท</th>
               <th>Email</th>
               <th>เบอร์โทร</th>
               <th>เรื่อง</th>
               <th>ข้อความ</th>
               <th>รายละเอียด</th>
               <th>ลบข้อความ</th>
             </tr>
             <!--Pull the updateData-->
             <?php if ($message == 'empty') {
                      echo '<tr><td colspan="7">ไม่มีข้อความ.</td></tr>';
                   }else{
                    $No = 1;
                    foreach ($message as $message) {
                      $MessageID = $message->ContactID;
                      $MessageDate = $message->ContactDate;
                      $MessageName = $message->ContactName;
                      $MessageCompany = $message->ContactCompany;
                      $MessageEmail = $message->ContactEmail;
                      $MessageTel = $message->ContactTel;
                      $MessageSubject = $message->ContactSubject;
                      $MessageText = $message->ContactMessage;
             ?>
             <!--Show updated data-->
                     <tr>
                       <td><?=$No; ?></td>
                       <td><?=$MessageDate;?></td>
                       <td><?=$MessageName;?></td>
                       <td><?=$MessageCompany;?></td>
                       <td><?=$MessageEmail;?></td>
                       <td><?=$MessageTel;?></td>
                       <td><?=$MessageSubject;?></td>
                       <td><?=$MessageText;?></td>
                       <td><button type="button" name="button" data-toggle="modal" data-target="#messageModal" class="btn btn-info pull-right" onclick="contactMessage('<?=$MessageDate?>',
                                                                                                                                                                '<?=$MessageName?>',
                                                                                                                                                                '<?=$MessageCompany?>',
                                                                                                                                                                '<?=$MessageEmail?>',
                                                                                                                                                                '<?=$MessageTel?>',
                                                                                                                                                                '<?=$MessageSubject?>',
                                                                                                                                                                '<?=$MessageText?>',
                                                                                                                                                                '<?=$MessageDate?>')">รายละเอียด</button></td>
                       <td><button type="button" name="button" class="btn btn-outline-danger pull-right" onclick="deleteMessage('<?=$MessageID?>','<?=$MessageName?>')">ลบข้อความ</button></td>
                     </tr>
           <?php   ++$No; } //end foreach
                  } //end else
           ?>
      </table>
    </div>



  </div>
  </main>
  <!-- end main container -->
  </div>
  <!-- end main row -->
</div>
<!-- end whole main container -->

  <!-- end main content -->

  <!--  form contact message-->
  <div class="modal fade bd-example-modal-lg" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="sModalLabel" >
    <div class="modal-dialog modal-lg " role="document">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h4 class="modal-title font-weight-bold text-primary" id="mDetail">ข้อมูลผู้ติดต่อ</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
           <label for="example-date-input" class="col-5 col-form-label font-weight-bold text-info">ข้อความวันที่: </label>
           <div class="col-5">
              <input class="form-control border-0 font-weight-bold text-dark" type="text" id="mDate" value="" >
           </div>
          </div>

          <div class="form-group row">
           <label for="example-date-input" class="col-5 col-form-label font-weight-bold text-info">ชื่อผู้ติดต่อ: </label>
           <div class="col-5">
              <input class="form-control border-0 font-weight-bold text-dark" type="text" id="mName" value="" maxlength="16">
           </div>
          </div>

          <div class="form-group row">
           <label for="example-date-input" class="col-5 col-form-label font-weight-bold text-info">บริษัท: </label>
           <div class="col-5">
              <input class="form-control border-0 font-weight-bold text-dark" type="text" id="mCompany" value="" maxlength="16">
           </div>
          </div>

          <div class="form-group row">
           <label for="example-date-input" class="col-5 col-form-label font-weight-bold text-info">Email: </label>
           <div class="col-5">
              <input class="form-control border-0 font-weight-bold text-dark" type="text" id="mEmail" value="" maxlength="16">
           </div>
          </div>

          <div class="form-group row">
           <label for="example-date-input" class="col-5 col-form-label font-weight-bold text-info">เบอร์โทรศัพท์: </label>
           <div class="col-5">
              <input class="form-control border-0 font-weight-bold text-dark" type="text" id="mTel" value="" maxlength="16">
           </div>
          </div>

          <div class="form-group row">
           <label for="example-date-input" class="col-5 col-form-label font-weight-bold text-info">เรื่อง: </label>
           <div class="col-5">
              <input class="form-control border-0 font-weight-bold text-dark" type="text" id="mSubject" value="" maxlength="16">
           </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="form-control-label font-weight-bold text-info ">Message: </label>
            <textarea class="form-control" cols="12" rows="10" id="mText"></textarea>
          </div>

        </div>
        <!-- end modal body  -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-dismiss="modal" id="close">ปิด</button>
          <button type="button" name="button" class="btn btn-outline-danger pull-right" onclick="deleteMessage('<?=$MessageID?>','<?=$MessageName?>')">ลบข้อความ</button>
        </div>
      </div>
    </div>
  </div>
     <!--  End Modal Form-->

  <!-- Javascript -->
  <script>
    function contactMessage(MessageDate,MessageName,MessageCompany,MessageEmail,MessageTel,MessageSubject,MessageText){
           $('#mDetail').text('ข้อขวามวันที่: '+ ' ' + MessageDate + ' ' +'โดยคุณ: ' + ' ' + MessageName);
           $('#mDate').val(MessageDate);
           $('#mName').val(MessageName);
           $('#mCompany').val(MessageCompany);
           $('#mEmail').val(MessageEmail);
           $('#mTel').val(MessageTel);
           $('#mSubject').val(MessageSubject);
           $('#mText').val(MessageText);
    }
    //Delete message
     function deleteMessage(MessageID,MessageName){
          if (confirm('Are you sure to delete user ' + MessageName)) {
                $.ajax({
                  url:'removemsg',
                  data:{MessageID:MessageID,MessageName:MessageName},
                  method:"GET"
                })
                .done(function(tResult) {
                     if (tResult == 'error') {
                         alert('!Cannot delete user.');
                     }else{
                         location.reload();
                     }
                })
                .fail(function(jqXHR, textStatus){
                    alert('Error:'+ jqXHR +' '+ textStatus);
                });
          }

    }
  </script>
