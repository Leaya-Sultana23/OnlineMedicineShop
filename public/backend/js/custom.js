// jQuery(document).ready(function(){
//     show(); 
//     jQuery(".save").click(function(){
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         var name = jQuery(".name").val();
//         var description = jQuery(".description").val();
//         var office_addres = jQuery(".office_addres").val();
//         var email = jQuery(".email").val();
//         var phone = jQuery(".phone").val();
//         var operator_name = jQuery(".operator_name").val();
//         var operator_phone = jQuery(".operator_phone").val();
//         var tin = jQuery(".tin").val();
//         var trade_number = jQuery(".trade_number").val();
//         var status = jQuery(".status").val();
//         $.ajax({
//             url:"/vendor/store",
//             type:"post",
//             dataType:"json",
//             data:{
//                 name :name,
//                 description :description,
//                 office_addres :office_addres,
//                 email :email,
//                 phone :phone,
//                 operator_name: operator_name,
//                 operator_phone :operator_phone,
//                 tin :tin,
//                 trade_number: trade_number,
//                 status: status,
//             },
//             success:function(response)
//             {
//                 if(response.status=="faild"){
//                     jQuery(".error_name").text(response.errors.name);
//                     jQuery(".error_description").text(response.errors.description);
//                     jQuery(".error_office_addres").text(response.errors.office_addres);
//                     jQuery(".error_email").text(response.errors.email);
//                     jQuery(".error_phone").text(response.errors.phone);
//                     jQuery(".error_operator_name").text(response.errors.operator_name);
//                     jQuery(".error_operator_phone").text(response.errors.operator_phone);
//                     jQuery(".error_tin").text(response.errors.tin);
//                     jQuery(".error_trade_number").text(response.errors.trade_number);
//                     jQuery(".error_status").text(response.errors.status);
//                 }
//                 else{
//                     jQuery(".msg").show().text("Vendor Added");
//                     jQuery(".msg").fadeOut(1000);

//                     jQuery(".error_name").text("");
//                     jQuery(".error_description").text("");
//                     jQuery(".error_office_addres").text('');
//                     jQuery(".error_email").text('');
//                     jQuery(".error_phone").text('');
//                     jQuery(".error_operator_name").text('');
//                     jQuery(".error_operator_phone").text('');
//                     jQuery(".error_tin").text('');
//                     jQuery(".error_trade_number").text('');
//                     jQuery(".error_status").text('');
                    
                    
//                     jQuery(".name").val('');
//                     jQuery(".description").val('');
//                     jQuery(".office_addres").val('');
//                     jQuery(".email").val('');
//                     jQuery(".phone").val('');
//                     jQuery(".operator_name").val('');
//                     jQuery(".operator_phone").val('');
//                     jQuery(".tin").val('');
//                     jQuery(".trade_number").val('');
//                     jQuery(".status").val('');
//                 }
//             }
//         })
//     })


    
//     function show(){
//         $.ajax({
//             url:'/vendor/show',
//             type:'get',
//             dataType:'JSON',
//             success:function(response){
//                 var data='';
//                 $.each(response.data, function(key, item){
//                     data+='<tr>\
//                     <td>'+item.name+'</td>\
//                     <td>'+item.description+'</td>\
//                     <td>'+item.office_addres+'</td>\
//                     <td>'+item.email+'</td>\
//                     <td>'+item.phone+'</td>\
//                     <td>'+item.operator_name+'</td>\
//                     <td>'+item.operator_phone+'</td>';

//                     if(item.status==1){
//                         data+='<td><button value="'+item.id+'" class="change btn btn-success btn-sm" data-toggle="modal" data-target="#changemodal">Active</button></td>';
//                     }

//                     else if(item.status==2){
//                         data+='<td><button value="'+item.id+'" class="change btn btn-secondary btn-sm" data-toggle="modal" data-target="#changemodal">Inactive</button></td>';
//                     }
                        
//                     data+='<td>\
//                         <button data-toggle="modal" data-target="#edit" value="'+item.id+'" class="btn btn-info btn-edit btn-sm"><i class="fa fa-edit"></i></button>\
//                         <button data-toggle="modal" data-target="#delete" value="'+item.id+'" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash"></i></button>\
//                     </td>\
//                 </tr>';
//                 });
//                 jQuery(".ALLdata").html(data);
//             }
//         })
//     }



//     jQuery(document).on("click",".btn-delete",function(){
//         var id=jQuery(this).val();
//         jQuery(".delete").val(id);
//     });
//     jQuery(document).on("click",".delete",function(){
//         var id=jQuery(this).val();
//         $.ajax({
//             url:"/vendor/destroy/"+id,
//             type:"get",
//             dataType:"json",
//             success:function(response){
//                 show(); 
//                 jQuery(".msg").show().text("Vendor Deleted");
//                 jQuery(".msg").fadeOut(1000);
//                 jQuery("#delete").modal("hide");
//             }
//         })
//     })


//     jQuery(document).on("click",".btn-edit",function(){
//         var id=jQuery(this).val();
//         $.ajax({
//             url:"/vendor/edit/"+id,
//             type:"GET",
//             dataType:"JSON",
//             success:function(response){
//                jQuery("#name").val(response.data.name); 
//                jQuery("#description").val(response.data.description); 
//                jQuery("#office_addres").val(response.data.office_addres); 
//                jQuery("#email").val(response.data.email); 
//                jQuery("#phone").val(response.data.phone); 
//                jQuery("#operator_name").val(response.data.operator_name); 
//                jQuery("#operator_phone").val(response.data.operator_phone); 
//                jQuery("#tin").val(response.data.tin); 
//                jQuery("#trade_number").val(response.data.trade_number); 
//                jQuery("#status").val(response.data.status);  
//                jQuery(".edit").val(response.data.id);
//             }
//         })
//     });


//     jQuery(document).on("click",".edit",function(){
//         var id=jQuery(this).val();
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//             }
//         });

//         var name = jQuery("#name").val();
//         var description = jQuery("#description").val();
//         var office_addres = jQuery("#office_addres").val();
//         var email = jQuery("#email").val();
//         var phone = jQuery("#phone").val();
//         var operator_name = jQuery("#operator_name").val();
//         var operator_phone = jQuery("#operator_phone").val();
//         var tin = jQuery("#tin").val();
//         var trade_number = jQuery("#trade_number").val();
//         var status = jQuery("#status").val();
//         $.ajax({
//             url:"/vendor/update/"+id,
//             type:"POST",
//             dataType:"JSON",
//             data:{
//                 name :name,
//                 description :description,
//                 office_addres :office_addres,
//                 email :email,
//                 phone :phone,
//                 operator_name: operator_name,
//                 operator_phone :operator_phone,
//                 tin :tin,
//                 trade_number: trade_number,
//                 status: status,
//             },
//             success:function(response){
//                 show(); 
//                 jQuery(".msg").show().text("Product Updated");
//                 jQuery(".msg").fadeOut(1000);
//                 jQuery("#edit").modal("hide");
//             }
//         });
//     });



//     jQuery(document).on("click",".change",function(e){
//         var id= jQuery(this).val();
//         jQuery(".cstatus").val(id);
//     })
//     jQuery(document).on("click",".cstatus",function(e){
//             var id= jQuery(this).val();
//             $.ajax({
//             url:"/vendor/change/"+id,
//             type:"GET",
//             dataType:"JSON",
//             success: function(result){
//                 show(); 
//                 jQuery(".msg").show().text("Status Updated");
//                 jQuery(".msg").fadeOut(1000);
//                 jQuery("#changemodal").modal("hide");
//             }
//         })
//     })
    


// })