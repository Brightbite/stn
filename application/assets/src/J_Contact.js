$(document).ready(function(){


  $('#btn-send-message').click(function(){
      leave_message();
  });


});

function leave_message(){
  console.log('validation');
  //validate form
  if ($('#customerName').val().length == 0){
      $('#customerName').focus();
      alert('กรุณากรอกชื่อผู้ติดต่อ');
  }
  else if ($('#customerCompany').val().length == 0) {
           $('customerCompany').focus();
           alert('กรุณากรอกชื่อบริษัทผู้ติดต่อ');
  }
  else if ($('#customerEmail').val().length == 0) {
           $('#customerEmail').focus();
           alert('กรุณากรอก Email เพื่อรับติดต่อกลับ');
  }
  else if ($('#customerTel').val().length == 0) {
           $('#customerTel').focus();
           alert('กรุณากรอกเบอร์โทรศัพท์ เพื่อรับติดต่อกลับ');
  }
  else if ($('#customerSubject').val().length == 0) {
           $('#customerSubject').focus();
           alert('กรุณากรอกหัวข้อเรื่อง');
  }
  else if ($('#customerMessage').val().length == 0) {
           $('#customerMessage').focus();
           alert('กรุณากรอกข้อความที่ต้องการส่ง');
  }else {
    var customerName = $('#customerName').val();
    var customerCompany = $('#customerCompany').val();
    var customerEmail = $('#customerEmail').val();
    var customerTel = $('#customerTel').val();
    var customerSubject = $('#customerSubject').val();
    var customerMessage = $('#customerMessage').val();
    console.log('validation2');
    $.ajax({
      url:'message',
      data:{customerName:customerName,
            customerCompany:customerCompany,
            customerEmail:customerEmail,
            customerTel:customerTel,
            customerSubject:customerSubject,
            customerMessage:customerMessage},
      method:"POST"
    })
    .done(function(msgResult){
      console.log('validation3');
      if (msgResult == 'error') {
        alert('ไม่สามารถส่งข้อความได้');
      }else {
        //if message send clear form
        $('#customerName').val('');
        $('#customerCompany').val('');
        $('#customerEmail').val('');
        $('#customerTel').val('');
        $('#customerSubject').val('');
        $('#customerMessage').val('');
        alert('ข้อความของคุณถูกส่งเรียบร้อย')
      }
    })
    .fail(function(jqXHR, textStatus){
        alert('Error:'+ jqXHR +' '+ textStatus);
    });
  }
}
