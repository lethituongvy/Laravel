<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{'/admin/category'}}" enctype="multipart/form-data">
            <div>
                @csrf
                <div class="form-group">
                    <input class="form-control" name="name" placeholder="Nhập name" type="text">
                    <!-- @error('name')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror -->
                </div>
            </div>
            <div class="row">
                <br>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Thêm sản phẩm</button>
            </div>
        </form>
    </div>

</body>

</html>