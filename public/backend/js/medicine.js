jQuery(document).ready(function () { 
    jQuery('.cat_id').on('change', function () { 
        var id = jQuery(this).val();
        if (id) {
            $.ajax({
                url: '/medicine/subcategory/'+id,
                type: "GET",
                dataType: "JSON",
                success: function (response) {
                    var subdt = "";
                    $.each(response.data, function (key, item) {
                        subdt += '<option value="'+ item.cat_id + '">' + item.name + '</option>';
                    });
                    jQuery('.subcat_id').html(subdt);
                }

            })
        }
    });
});