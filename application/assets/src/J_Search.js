$(document).ready(function(){


  $('#btn-prod-search').click(function(){
      searchProd();
  });


});

  function searchProd(){
    if ($('#searchProduct').val().length == 0) {
        $('#searchProduct').focus();
        alert('กรุณากรอกรายละเอียดการค้นหา');
    }else {
      var searchProduct = $('#searchProduct').val();
    }
    console.log(searchProduct);
    $.ajax({
      url:'search',
      data:{searchProduct:searchProduct},
      method:"POST"
    })
    .done(function(msgResult){
      console.log('validation3');
      if (msgResult == 'error') {
        alert('ไม่สามารถค้นหาได้');
      }else {
        //if message send clear form
        $('#searchProduct').val('');
      }
    })
    .fail(function(jqXHR, textStatus){
      console.log('validated error');
        alert('Error:'+ jqXHR +' '+ textStatus);
    });
  }
