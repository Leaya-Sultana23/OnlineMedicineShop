

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
            <div class="col-md-6 offset-md-3">
                <h4 class="mt-4">This is API Regitration</h4>
                <hr>
                <form action="{{route('apistore')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control mt-4" placeholder="Enter Your Name">
                        <input type="text" name="address" class="form-control mt-4" placeholder="Enter Your Address">
                        <input type="text" name="phone" class="form-control mt-4" placeholder="Enter Your Phone Number">
                        <input type="email" name="email" class="form-control mt-4" placeholder="Enter Your Email">
                        <input type="number" name="nid" class="form-control mt-4" placeholder="Enter Your National ID Card">
                        <button name="save" class="btn btn-primary form-control mt-2">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>