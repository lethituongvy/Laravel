<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card-body">
        <form action="{{'/admin/category/'.$edit->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <!-- <button type="submit">Update</button> -->
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input id="name" value="{{$edit->name}}" type="name" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="current-name">
                @error('name')
                <div class="alert alert-success">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn float-right login_btn">
            </div>
        </form>
    </div>
</body>

</html>