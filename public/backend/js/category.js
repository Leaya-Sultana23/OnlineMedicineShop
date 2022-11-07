jQuery(document).ready(function(){
    show();
    jQuery("#form").on("submit", function(e){
        e.preventDefault();
        
        var allData = new FormData(this);
        $.ajax({
            url:"/category/storeCategory",
            type:"POST",
            dataType:"JSON",
            data:allData,
            contentType:false,
            processData:false,
            success:function(response){

                if(response.status=="faild"){
                    jQuery(".error_name").text(response.errors.name);
                    jQuery(".error_description").text(response.errors.description);
                    jQuery(".error_image").text(response.errors.image);
                    jQuery(".error_status").text(response.errors.status);
                }
                else{
                    jQuery('.msg').html("<div class='alert alert-primary' role='alert'>Category save</div>");
                    jQuery('.msg').fadeOut(2000);
                    show();
                }
                
                
            }
        })
    })

    function show(){
        $.ajax({
            url:"/category/showCategory",
            type:"get",
            dataType:"JSON",
            success:function(response){
                var sl=1;
                var show = "";
                // var path = '{{ URL::asset('/backend/category/') }}';
                $.each(response.show,function(key,item){
                    var status = "";
                    var image = "<img height='100px' src='/backend/category/"+item.image+"' />";
                    if (item.status==1) {
                        status="<button value="+item.id+" class='status btn btn-info btn-sm'><i class='fas fa-check-circle'></i></button>";
                    }else{
                        status="<button value="+item.id+" class='status btn btn-danger btn-sm'><i class='fas fa-check-circle'></i></button>";
                    }
// <td><img height="100px" src="{{asset("backend/category"'+item.image+')}}"></img></td>\
                    show += '<tr>\
                    <td>'+sl+'</td>\
                    <td>'+item.name+'</td>\
                    <td>'+item.description+'</td>\
                    <td>'+image+'</td>\
                    <td>'+status+'</td>\
                    <td>\
                        <button value='+item.id+' class="btnupdate btn btn-info btn-sm"  data-toggle="modal" data-target="#update"><i class="fas fa-edit"></i></button>\
                        <button value='+item.id+' class="btnDelete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>\
                    </td>\
                    </tr>';
                    sl++;
                })
                jQuery(".allData").html(show);
            }
        })
    }
    
    jQuery(document).on("click",".btnDelete",function(){
        
        var id = jQuery(this).val();
        $.ajax({
            url:"/category/deleteCategory/"+id,
            type:"get",
            dataType:"json",
            success:function(response){
                jQuery('.msg').html("<div class='alert alert-danger' role='alert'>Data Delete</div>");
                jQuery('.msg').fadeOut(2000);
                show();
            }
        })
    })


    jQuery(document).on("click",".status",function(){
        var id = jQuery(this).val();
      
        $.ajax({
            url:"/category/status/"+id,
            type:"get",
            dataType:"JSON",
            
            success:function(response){
                show();
            }
        })

    })

jQuery(document).on("click",".btnupdate",function(){
    var id = jQuery(this).val();
        jQuery(".update").val(id);
        $.ajax({
            url:"/category/edit/"+id,
            type:"get",
            dataType:"JSON",
            success:function(response){
                var image = "<img height='100px' src='/backend/category/"+response.data.image+"' />";
                jQuery(".name").val(response.data.name);
                jQuery(".description").val(response.data.description);
                // jQuery(".image").val(response.data.image);
                jQuery(".status").val(response.data.status);
                jQuery(".update").val(response.data.id);
                jQuery("#img").html(image);
                //alert(response.data.image);
            }
               
        })
})


jQuery("#Modalform").on("submit", function(e){
    e.preventDefault();
     var id = jQuery(".update").val();
     var updateData = new FormData(this);

    $.ajax({
            url:"/category/update/"+id,
            type:"POST",
            dataType:"JSON",
            data:updateData,
            contentType:false,
            processData:false,
        success:function(response){
            alert("UPDATED");
        }
    })

})





});