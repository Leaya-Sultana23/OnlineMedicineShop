jQuery(document).ready(function(){
    show(); 
    jQuery(".save").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        var name = jQuery(".name").val();
        var address = jQuery(".address").val();
        var description = jQuery(".description").val();
        var email = jQuery(".email").val();
        var phone = jQuery(".phone").val();
        var mfg = jQuery(".mfg").val();
        var created_date = jQuery(".created_date").val();
        var operator_name = jQuery(".operator_name").val();
        var status = jQuery(".status").val();
        $.ajax({
            url:"/supplier/store",
            type:"post",
            dataType:"json",
            data:{
                name :name,
                address :address,
                description :description,
                email :email,
                phone :phone,
                mfg: mfg,
                created_date :created_date,
                operator_name: operator_name,
                status: status,
            },
            success:function(response)
            {
                if(response.status=="faield"){
                    jQuery(".error_name").text(response.errors.name);
                    jQuery(".error_address").text(response.errors.address);
                    jQuery(".error_description").text(response.errors.description);
                    jQuery(".error_email").text(response.errors.email);
                    jQuery(".error_phone").text(response.errors.phone);
                    jQuery(".error_mfg").text(response.errors.mfg);
                    jQuery(".error_created_date").text(response.errors.created_date);
                    jQuery(".error_operator_name").text(response.errors.operator_name);
                    jQuery(".error_status").text(response.errors.status);
                }
                else{
                    jQuery(".msg").show().text("One Supplier Added");
                    jQuery(".msg").fadeOut(1000);
                    jQuery(".error_name").text("");
                    jQuery(".error_address").text("");
                    jQuery(".error_description").text('');
                    jQuery(".error_email").text('');
                    jQuery(".error_phone").text('');
                    jQuery(".error_mfg").text('');
                    jQuery(".error_created_date").text('');
                    jQuery(".error_operator_name").text('');
                    jQuery(".error_status").text('');
                    
                    
                    jQuery(".name").val('');
                    jQuery(".address").val('');
                    jQuery(".description").val('');
                    jQuery(".email").val('');
                    jQuery(".phone").val('');
                    jQuery(".mfg").val('');
                    jQuery(".created_date").val('');
                    jQuery(".operator_name").val('');
                    jQuery(".status").val('');
                }
            }
        })
    })


    
    function show(){
        $.ajax({
            url:'/supplier/show',
            type:'get',
            dataType:'JSON',
            success:function(response){
                var data='';
                $.each(response.data, function(key, item){
                    data+='<tr>\
                    <td>'+item.name+'</td>\
                    <td>'+item.address+'</td>\
                    <td>'+item.description+'</td>\
                    <td>'+item.email+'</td>\
                    <td>'+item.phone+'</td>\
                    <td>'+item.mfg+'</td>\
                    <td>'+item.created_date+'</td>\
                    <td>'+item.operator_name+'</td>';

                    if(item.status==1){
                        data+='<td><button value="'+item.id+'" class="change btn btn-success btn-sm" data-toggle="modal" data-target="#changemodal">Active</button></td>';
                    }

                    else if(item.status==2){
                        data+='<td><button value="'+item.id+'" class="change btn btn-secondary btn-sm" data-toggle="modal" data-target="#changemodal">Inactive</button></td>';
                    }
                        
                    data+='<td>\
                        <button data-toggle="modal" data-target="#edit" value="'+item.id+'" class="btn btn-info btnedit btn-sm"><i class="fa fa-edit"></i></button>\
                        <button data-toggle="modal" data-target="#delete" value="'+item.id+'" class="btn btn-danger btn-delete btn-sm"><i class="fa fa-trash"></i></button>\
                    </td>\
                </tr>';
                });
                jQuery(".alldata").html(data);
            }
        })
    }



    jQuery(document).on("click",".btn-delete",function(){
        var id=jQuery(this).val();
        jQuery(".delete").val(id);
    });
    jQuery(document).on("click",".delete",function(){
        var id=jQuery(this).val();
        $.ajax({
            url:"/supplier/destroy/"+id,
            type:"get",
            dataType:"json",
            success:function(response){
                show(); 
                jQuery(".msg").show().text("One Supplier Deleted");
                jQuery(".msg").fadeOut(1000);
                jQuery("#delete").modal("hide");
            }
        })
    })


    jQuery(document).on("click",".btnedit",function(){
        var id=jQuery(this).val();
        console.log(id);
        $.ajax({
            url:"/supplier/edit/"+id,
            type:"GET",
            dataType:"JSON",
            success:function(response){
               jQuery("#name").val(response.data.name); 
               jQuery("#address").val(response.data.address); 
               jQuery("#description").val(response.data.description); 
               jQuery("#email").val(response.data.email); 
               jQuery("#phone").val(response.data.phone); 
               jQuery("#mfg").val(response.data.mfg); 
               jQuery("#created_date").val(response.data.created_date); 
               jQuery("#operator_name").val(response.data.operator_name); 
               jQuery("#status").val(response.data.status);  
               jQuery(".btn-update").val(response.data.id);
            }
        })
    });


    jQuery(document).on("click",".btn-update",function(){
        var id=jQuery(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(id)
        var name = jQuery("#name").val();
        var address = jQuery("#address").val();
        var description = jQuery("#description").val();
        var email = jQuery("#email").val();
        var phone = jQuery("#phone").val();
        var mfg = jQuery("#mfg").val();
        var created_date = jQuery("#created_date").val();
        var operator_name = jQuery("#operator_name").val();
        var status = jQuery("#status").val();
        $.ajax({
            url:"/supplier/update/"+id,
            type:"POST",
            dataType:"JSON",
            data:{
                name :name,
                address :address,
                description :description,
                email :email,
                phone :phone,
                mfg: mfg,
                created_date :created_date,
                operator_name: operator_name,
                status: status,
            },
            success:function(response){
                show(); 
                jQuery(".msg").show().text("Supplier Information Updated");
                jQuery(".msg").fadeOut(1000);
                jQuery("#edit").modal("hide");
            }
        });
    });



    jQuery(document).on("click",".change",function(e){
        var id= jQuery(this).val();
        jQuery(".cstatus").val(id);
    })
    jQuery(document).on("click",".cstatus",function(e){
            var id= jQuery(this).val();
            $.ajax({
            url:"/supplier/change/"+id,
            type:"GET",
            dataType:"JSON",
            success: function(result){
                show(); 
                jQuery(".msg").show().text("Status Updated");
                jQuery(".msg").fadeOut(1000);
                jQuery("#changemodal").modal("hide");
            }
        })
    })
    


})