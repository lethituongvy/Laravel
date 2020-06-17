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
        /* #id{ */

        /* display: grid; */
        /* grid-template-columns: 350px 350px 350px 350px; */
        /* grid-gap: 20px;
            width: 100%; */
        /* } */
    </style>
</head>

<body>
    <div>
        @include('partials\header')
    </div>
    <form action="">
        <div id="id">
            @foreach ($research as $search)
            <div class="container">
                <div class="row" style="display:flex;">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="{{'/storage/'.$search->image}}" alt="Card image cap">
                            <center>
                                <div class="caption">
                                    <h5 class="card-title"> {{ $search->title}} </h5>
                                    <p class="card-text"> <span>{{ $search->price }} $ </span> </p>

                                    <div class="row">
                                        <div class="col-xs-6  col-md-6">
                                            <form action="/user/cart/{{$search->id}}">
                                                <button type="submit" class="btn btn-warning">Add to cart</button>
                                            </form>
                                        </div>
                                        <div class="col-xs-6  col-md-6">
                                            <form action="/user/animals/show/{{ $search->id }}">
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
    </form>
    <div>
    @include('partials\footer')
    </div>
</body>

</html>