jQuery(document).ready(function(){

  // for show 

  show();
  function show(){

    $.ajax({
      type: "GET",
      url: "/subcategoey/datatable",
      dataType: "JSON",
      success: function (response) {

        var data= "";
        $.each(response.alldata, function (key, item) { 

          //var image = "<img height='100px' src='/backend/subcategory/"+item.image+"' />";
          data+='<tr>\
          <td>'+item.cat_id+'</td>\
          <td>'+item.name+'</td>\
          <td><img width="150px" height="150px" src="/backend/subcategory/'+item.image +'"></td>\
            <td>'+item.status+'</td>\
            <td><button id="updatebtn" value="'+item.id+'" class="updateid btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal"><i class="fa fa-edit"></i></button> </td>\
            <td> <button value="'+item.id+'" class="deleteid btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button></td>\
          </tr>';
          
        });
        jQuery(".data").html(data);
        
      }
    });

  }





//for add data 
jQuery('#subcategoryform').on("submit",function(e){

    e.preventDefault();

    let formData = new FormData(this);
    
    $.ajax({
        type: "POST",
        url: "/subcategoey/addsubcategory",
        data: formData,
        dataType: "JSON",
        contentType: false,
        processData: false,
        success: function (response) {

        if(response.status=="failed"){
          jQuery('.error_name').text(response.errors.name);
          jQuery('.error_image').text(response.errors.image);
          jQuery('.error_status').text(response.errors.status);
         
        }
        else{
          show();
          jQuery('.msg').text('Data Save Successfully');
          jQuery('.msg').fadeOut(1000);
          jQuery('.name').val('');
          jQuery('.status').val('');
          jQuery('.image').val('');




        }
            
        }
    });
});

// // for get id from current button and pass into modal button 

jQuery(document).on("click",".deleteid",function(){
  var id= jQuery(this).val();
  jQuery('.deletemodal').val(id);

});

   //for delete
   jQuery(document).on("click",".deletemodal",function(){
   
    var id=jQuery(this).val();
     
    $.ajax({
     type: "GET",
     url: "/subcategoey/deletesubcategory/"+id,
     dataType: "JSON",
     success: function (response) {
       show();
        jQuery("#deleteModal").modal("hide");
   
       
     }
    });
    
});

 
 // for update Show Product 
 jQuery(document).on("click",".updateid",function(){
  var id=jQuery(this).val();
   jQuery(".updateemodal").val(id);
    $.ajax({
  type: "GET",
  url: "/subcategoey/updatesubcategoryview/"+id,
  dataType: "JSON",
  success: function (response) {

    var image = "<img height='100px' src='/backend/subcategory/"+response.status.image+"' />";
    jQuery('.ucategory').val(response.status.name);
    jQuery('.ustatus').val(response.status.status);
    jQuery('.img').html(image);
    
    
  }
});


 });

 //for update product By modal

 jQuery('#updatecategoryform').on("submit",function(e){
     e.preventDefault();

    var id=jQuery('.updateemodal').val();

    let formData = new FormData(this);
 
    
    $.ajax({
        type: "POST",
        url: "/subcategoey/updatesubcategory/"+id,
        data: formData,
        dataType: "JSON",
        contentType: false,
        processData: false,
        success: function (response) {

        if(response.status=="failed"){
          jQuery('.error_name').text(response.errors.name);
          jQuery('.error_image').text(response.errors.image);
          jQuery('.error_status').text(response.errors.status);
         
        }
        else{
          show();
          jQuery('#updateModal').modal('hide');
          jQuery('.msg').text('Data Update Successfully');
          jQuery('.msg').fadeOut(1000);
          
          




        }
            
        }
    });


    


     });





});