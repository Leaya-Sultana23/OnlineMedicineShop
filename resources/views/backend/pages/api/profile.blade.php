

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Registration </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
   
    <div class="cotainer">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>NID</th>
                        </tr>
                    </thead>
                    <tbody class="allData">
                        <tr>
                            <td>{{$api->name}}</td>
                            <td>{{$api->address}}</td>
                            <td>{{$api->phone}}</td>
                            <td>{{$api->email}}</td>
                            <td>{{$api->nid}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <h4 class="mt-4">This is API Regitration</h4>
                <hr>
                <form action="{{route('updateApi',$api->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="appname" class="form-control mt-4" placeholder="Enter Your App Name">
                        <input type="text" name="description" class="form-control mt-4" placeholder="Enter Your description">
                        <input type="text" name="url" class="form-control mt-4" placeholder="Enter Your url">
                        <button value="" name="save" class="btn btn-primary form-control mt-2">Sign Up</button>
                        
                    </div>
                </form>
                <button value="{{$api->id}}" id="getcode" class="btn btn-primary form-control mt-2">Get Code</button>
                <h5 class="mt-5">Your Client ID : <br> <span class="clientid"></span></h5>
                <h5 class="mt-5">Your Token is :<br> <span class="token"></span></h5>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>


    <script>

        jQuery(document).ready(function(){
            jQuery("#getcode").click(function(){
                var id = jQuery(this).val();
                $.ajax({
                    url:"/api/myApi/getcode/"+id,
                    type:"get",
                    dataType:"JSON",
                    success:function(response){
                        jQuery('.clientid').text(response.status.clientid);
                        jQuery('.token').text(response.status.token);
                    }

                });
            });
        });


    </script>


</body>
</html>