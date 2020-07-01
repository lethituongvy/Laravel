<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <style>
        #display {
            display: grid;
            grid-template-columns: 350px 350px 350px 350px;
            grid-gap: 20px;
            width: 100%;
        }
    </style>
</head>

<body>

    <div>
        @include('partials\header')
    </div>
    <div id="display">
        @foreach ($productcategory as $product)
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="{{'/storage/'.$product->image}}" alt="Card image cap" width="250px" height="200px">
                        <center>
                            <div class="caption">
                                <h5 class="card-title"> {{ $product->name}} </h5>
                                <p class="card-text"> <span>{{ $product->price }} $ </span> </p>

                                <div class="row">
                                    <div class="col-xs-6  col-md-6">

                                        <form action="/user/cart/{{$product->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <form action="/user/animals/show/{{ $product->id }}">
                                            <button type="submit" class="btn btn-warning">Detail</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div>
        @include('partials\footer')
    </div>
</body>

</html>