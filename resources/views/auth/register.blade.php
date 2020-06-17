<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="/auth/register" method="post">
            @csrf

            <div class="row">
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="username" placeholder="Username" type="text">
                </div>
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="password" placeholder="Password" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="name" placeholder="Name" type="text">
                </div>
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="class" placeholder="Class" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"> <input class="form-control" name="role" placeholder="Role" type="text">
                </div>

                <br>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>
        </form>
    </div>
    </div>
    </div>
    </form>
</body>

</html>