$(document).ready(function(){
    readRecords();
  });
function readRecords(){
    var readRecords = 'readRecords';
    $.ajax({
      url:'Corephp/fetch.php',
      type:'post',
      data:{readRecords:readRecords},
      success:function(data,status){
        $('#recodscontent').html(data);
      }
    })
}

function Addrecord(){
  var name = $('#name').val();
  //alert(name)
var email = $('#email').val();
var password = $('#password').val();
var cpassword = $('#cpassword').val();
var gender = $('#gender').val();
var city = $('#city').val();
$.ajax({
      url: "Corephp/fetch.php",
      type: "POST",
      data: {
          name: name,
          email: email,
          password: password,
          gender: gender,
    city:city
                    
      },
  success:function(data,status){
    //alert('success');
   readRecords();
  }
});

}
  ///delete users
  
  function deleteUsers(deleteid){
    var conf = confirm('are you sure');
    if(conf==true){
      $.ajax({
        url:'Corephp/fetch.php',
        type:'POST',
        data: {deleteid:deleteid},
        success:function(data,status){
        //alert ('data deleted');
          readRecords();
        }
      });
    }
  }

//Get Particular Record

  $(document).on('click','#btn_edit',function()
  {
      var id = $(this).attr('data-id');
      $.ajax(
          {
              url: 'Corephp/fetch.php',
              type: 'post',
              data:{id:id, callmethod:"geteditid"},
              dataType: 'JSON',
              success: function(response)
              {
                // alert(response.name);
                 $('#update_name').val(response.name);
                 $('#update_email').val(response.email);
                 $('#update_gender').val(response.gender);
                 $('#update_city').val(response.city);
                 
              }
              
          })
  })
function setId(id){
  $("#updateId").val(id);
}
  //update data 

  function UpdateData(id){
    var id = $("#updateId").val();
    //alert(id);
    var name= $("#update_name").val();
    
    var email= $("#update_email").val();
    var gender= $("#update_gender").val(); 
    //alert(gender)
    var city= $("#update_city").val();
    if(name!="" && email!="" && gender!="" && city!=""){
   $.ajax({
       url: 'Corephp/fetch.php',
       type:'post',
       data:{id:id, name: name , email: email, gender: gender , city: city,callmethod:'check',},
      // dataType:'JSON',
     success: function(data){
       //alert('hello');
     readRecords(data);
     }
   });
     }
    }