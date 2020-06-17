<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
        html,
        body {
            background-image: url('https://www.chotot.com/kinhnghiem/wp-content/uploads/2018/05/cho-alaska-cho-tot.jpg');
        }

        body {
            padding-top: 0px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .login-screen-bg {
            background-color: #EFEFEF;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST" action="/admin/animals" enctype="multipart/form-data">
            <div>
                @csrf
                <div class="row">
                    <div class="col-xs-6 col-md-6"> <input class="form-control" name="title" placeholder="Nhập title" type="text"></div>
                    <div class="col-xs-6 col-md-6"> <input class="form-control" name="description" placeholder="Nhập Description" type="text"></div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6"> <input class="form-control" name="price" placeholder="Nhập giá" type="text"> </div>
                    <div class="col-xs-6 col-md-6"> <input type="file" name="image"></div>
                </div>
                <div class="row">
                    <br>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Thêm sản phẩm</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>