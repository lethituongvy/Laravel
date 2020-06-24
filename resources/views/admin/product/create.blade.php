<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
        /* html,
        body { */
        /* background-image: url('https://www.chotot.com/kinhnghiem/wp-content/uploads/2018/05/cho-alaska-cho-tot.jpg'); */
        /* } */

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
        <form method="POST" action="{{'/admin/product'}}" enctype="multipart/form-data">
            <div>
                @csrf
                <div class="form-group">
                    <input class="form-control" name="name" placeholder="Nhập name" type="text">
                    @error('name')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category" style="float: left; font-size: 18px;"> Chọn loại sản phẩm</label><br>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="description" placeholder="Nhập Description" type="text"></div>
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="price" placeholder="Nhập Price" type="text"></div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="oldprice" placeholder="Nhập Gia Cu" type="text"> </div>
                <div class="col-xs-6 col-md-6"> <input type="file" name="image"></div>
            </div>
            <div class="row">
                <br>
                <div class="col-xs-6 col-md-6"> <input class="form-control" name="quantity" placeholder="Nhập Quantity" type="text"> </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Thêm sản phẩm</button>
            </div>
        </form>
    </div>
</body>

</html>