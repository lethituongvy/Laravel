<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <style>
        #display {
            display: grid;
            grid-template-columns: 500px 400px;
            grid-gap: 20px;
        }
    </style>
</head>

<body>
    <div>
        @include('partials\header')
    </div>
    <hr>
    <!-- <hr> -->
    <div id="display">
        <center>
            <div>
                <img class="group list-group-image" src="{{'/storage/'.$show->image}}" alt="Card image cap">
            </div>
        </center>
        <div style="border: 1px solid #66CBFF">
            <center>
                <h5 class="card-title">Tên: {{$show->title}}</h5>
                <hr>

                <h5 class="card-title">Giá: {{$show->price}}$</h5>
                <h5 class="card-title">Mô tả:{{ $show->description}} </h5>
                <div>
                    <div class="col-xs-12 col-md-6">
                        <h5 class="card-title">Số lượng:<span><input type="number" value="1" min="1" max="10"></span></h5>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <form action="/user/cart/{{$show->id}}">
                            <button type="submit" class="btn btn-warning">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </center> 
        </div>
    </div>
    <!-- <hr> -->
    <hr>
    <div>
        @include('partials\footer')
    </div>

</body>

</html>