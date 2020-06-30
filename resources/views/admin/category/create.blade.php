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
                    <input id="name"  placeholder="Nhập name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <div class="alert alert-success">{{ $message }}</div>
                    @enderror
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