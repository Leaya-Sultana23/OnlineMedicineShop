
                jQuery(document).ready(function(){
                    show();

                            jQuery(document).on("click",".update",function(){
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                }
                            });
                                var id = jQuery(this).val();
                                var cupon_code = jQuery("#ucupon_code").val();
                                var discount = jQuery("#udiscount").val();
                                var discount_amount = jQuery("#udiscount_amount").val();
                                var start_at = jQuery("#ustart_at").val();
                                var end_at = jQuery("#uend_at").val();
                                var status = jQuery("#ustatus").val();
                            $.ajax({
                                url:"/cupon/update/"+id,
                                type:"POST",
                                dataType:"JSON",
                                data:{
                                    cupon_code:cupon_code,
                                    discount:discount,
                                    discount_amount:discount_amount,
                                    start_at:start_at,
                                    end_at:end_at,
                                    status:status
                                },

                                success:function(response){
                                    dd(response);
                                    if(response["msg"]=="404"){
                                        jQuery(".msg").html('<div class="alert alert-danger">Data Not Updated</div>')
                                        jQuery(".alert").fadeOut(1000);
                                        jQuery(".update").modal("hide");
                                        show();

                                    }
                                    else if(response.msg=="success"){
                                        show();
                                        jQuery(".msg").html('<div class="alert alert-success">Data Update</div>');
                                        jQuery(".alert").fadeOut(1000);
                                        jQuery(".modal").hide();
                                        jQuery(".modal-backdrop").hide();
                                    }
                                }
                            })
                        })

                            jQuery(document).on("click",".edit",function(){
                            var id=jQuery(this).val();
                            jQuery(".update").val(id);
                            $.ajax({
                                url:"edit/"+id,
                                type:"GET",
                                dataType:"JSON",
                                success:function(result){

                                        jQuery("#ucupon_code").val(result.alldata.cupon_code);
                                        jQuery("#udiscount").val(result.alldata.discount);
                                        jQuery("#udiscount_amount").val(result.alldata.discount_amount);
                                        jQuery("#ustart_at").val(result.alldata.start_at);
                                        jQuery("#uend_at").val(result.alldata.end_at);
                                        jQuery("#ustatus").val(result.alldata.status);


                                }
                            })
                        })

                        jQuery(document).on("click", ".deleteId", function(){
                        var id=jQuery(this).val();
                        jQuery(".btnDelete").val(id);
                        })
                //DELETE JQUERY
                        jQuery(document).on("click",".btnDelete", function(){
                            var id=jQuery(this).val();
                            $.ajax({
                                url:"delete/"+id,
                                type:"GET",
                                dataType:"JSON",
                                success:function(result){
                                    if(result.status=="404"){
                                        alert("data not found")
                                    }
                                    else{
                                        show();
                                        jQuery(".modal").hide();
                                        jQuery(".modal-backdrop").hide();


                                    }
                                }
                            })
                        })
                                function show(){
                                $.ajax({
                                    url:"show",
                                    type:"GET",
                                    dataType:"JSON",
                                    success:function(result){
                                        if(result.status=="success"){
                                            var allData="";
                                            $.each(result.alldata, function(key, item){
                                                allData += '<tr>\
                                                <td>'+item.cupon_code+'</td>\
                                                <td>'+item.discount+'</td>\
                                                <td>'+item.discount_amount+'</td>\
                                                <td>'+item.start_at+'</td>\
                                                <td>'+item.end_at+'</td>\
                                                <td>'+item.status+'</td>\
                                                <td>'+item.product_id+'</td>\
                                                <td>\
                                                    <button data-toggle="modal" data-target="#update" value="'+item.id+'" class="edit btn btn-info btn-sm"> <i class="fa fa-edit"></i> </button>\
                                                    <button data-toggle="modal" data-target="#delete" value="'+item.id+'" class="deleteId btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>\
                                                </td>\
                                                </tr>';
                                            });
                                            jQuery(".All").html(allData);

                                        }
                                        else if(result.status=="404"){
                                            alert("Error 404: Data Not Found");
                                        }
                                    }
                                });
                            }
                //Add Section
                        jQuery(".addcupon").click(function(){
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    var cupon_code = jQuery(".cupon_code").val();
                                    var discount = jQuery(".discount").val();
                                    var discount_amount = jQuery(".discount_amount").val();
                                    var start_at = jQuery(".start_at").val();
                                    var end_at = jQuery(".end_at").val();
                                    var status = jQuery(".status").val();
                                    var product_id = jQuery(".product_id").val();
                                    $.ajax({
                                    url:'store',
                                    type:'POST',
                                    datatype:'JSON',
                                    data:{
                                        cupon_code:cupon_code,
                                        discount:discount,
                                        discount_amount:discount_amount,
                                        start_at:start_at,
                                        end_at:end_at,
                                        status:status,
                                        product_id:product_id
                                    },
                                    success:function(result){
                                        if(result["msg"]=="404"){
                                            jQuery(".msg").html('<div class="alert alert-danger">Data Not Submited</div>')
                                            jQuery(".alert").fadeOut(1000);
                                        }
                                        else if(result.msg=="success"){
                                            show();
                                            jQuery(".msg").html('<div class="alert alert-success">Data Submited</div>');
                                            jQuery(".alert").fadeOut(1000);
                                            jQuery(".cupon_code").val("");
                                            jQuery(".discount").val("");
                                            jQuery(".discount_amount").val("");
                                            jQuery(".start_at").val("");
                                            jQuery(".end_at").val("");
                                            jQuery(".status").val("");
                                            jQuery(".product_id").val("");
                                        }
                                    }
                                });

                                });
                });
 
