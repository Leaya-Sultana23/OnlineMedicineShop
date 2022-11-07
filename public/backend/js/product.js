jQuery(document).ready(function(){
      show();
    function show(){

        $.ajax({
          type: "GET",
          url: "/product/manageproduct",
          dataType: "JSON",
          success: function (response) {
    
            var data= "";
            $.each(response.productdata, function (key, item) { 
    
              // var image = "<img height='100px' src='/backend/subcategory/"+item.image+"' />";
              data+='<tr>\
              <td>'+item.product_name+'</td>\
              <td>'+item.product_code+'</td>\
              <td>'+item.product_price+'</td>\
              <td>'+item.discount+'</td>\
              <td>'+item.discount_price+'</td>\
              <td>'+item.short_description+'</td>\
              <td>'+item.long_description+'</td>\
              <td><img width="150px" height="150px" src="/backend/subcategory/'+item.thumbnails +'"></td>\
              <td>'+item.quantity+'</td>\
                 <td>'+item.status+'</td>\
                <td><button id="updatebtn" value="'+item.id+'" class="updateproduct btn btn-success btn-sm" data-toggle="modal" data-target="#updateproduct"><i class="fa fa-edit"></i></button> </td>\
                <td> <button value="'+item.id+'" class="deleteproduct btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModalproduct"><i class="fa fa-trash"></i></button></td>\
              </tr>';
              
            });
            jQuery(".product").html(data);
            
          }
        });
    
      }







   //value pass in modal button
  jQuery(document).on('click','.deleteproduct',function () {
        
    var id= jQuery(this).val();
     jQuery('.deletemodalproduct').val(id);

  });

   jQuery(document).on('click','.deletemodalproduct',function(){
    
     var id=jQuery(this).val();
        $.ajax({
            type: "GET",
            url: "/product/deletesubproduct/"+id,
            dataType: "JSON",
            success: function (response) {
                jQuery("#deleteModalproduct").modal("hide");
                alert('delete Successfully');
                show();
            }
        });

   });


   // for update Show Product 
 jQuery(document).on("click",".updateproduct",function(){
    var id=jQuery(this).val();
     jQuery(".productupdateid").val(id);
      $.ajax({
    type: "GET",
    url: "/product/updateproductview/"+id,
    dataType: "JSON",
    success: function (response) {
  
      var image = "<img height='100px' src='/backend/product/"+response.status.image+"' />";
      jQuery('.uname').val(response.status.product_name);
      jQuery('.uproduct_code').val(response.status.product_code);
      jQuery('.uproduct_price').val(response.status.product_price);
      jQuery('.uproduct_discount').val(response.status.discount);
      jQuery('.uproduct_discount_price').val(response.status.discount_price);
      jQuery('.ushort_description').val(response.status.short_description);
      jQuery('.ulong_description').val(response.status.long_description);
      jQuery('.uimage').val(image);
      jQuery('.uquantity').val(response.status.quantity);
      jQuery('.ustatus').val(response.status.status);
    }
  });

  //for update product By modal

 jQuery('#updateproductform').on("submit",function(e){
    e.preventDefault();

   var id=jQuery('.productupdateid').val();

   let formData = new FormData(this);

   
   $.ajax({
       type: "POST",
       url: "/product/updateproduct/"+id,
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

     
         jQuery('#updateproduct').modal('hide');
         jQuery('.msg').text('Data Update Successfully');
         jQuery('.msg').fadeOut(1000);

       }
           
       }
   });

    });


});







});