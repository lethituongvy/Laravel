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
                    <input id="name" placeholder="Nhập name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                <div class="col-xs-6 col-md-6">
                    <input id="description" placeholder="Nhập description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                    @error('description')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-xs-6 col-md-6">
                    <input id="price" placeholder="Nhập price" type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                    @error('price')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input id="oldprice"  placeholder="Nhập oldprice"type="oldprice" class="form-control @error('oldprice') is-invalid @enderror" name="oldprice" value="{{ old('oldprice') }}" required autocomplete="oldprice" autofocus>
                    @error('name')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-xs-6 col-md-6">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="username" autofocus>
                    @error('image')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <br>
                <div class="col-xs-6 col-md-6">
                    <input id="quantity" placeholder="Nhập quantity "type="quantity" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                    @error('quantity')

                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Thêm sản phẩm</button>
            </div>
        </form>
    </div>
</body>

</html>