<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="/css/cart.css">

    <script src="https://use.fontawesome.com/c560c025cf.js"></script>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shopping cart
                <a href="{{'/home'}}" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                @foreach($cartdata as $cart)
                <!-- PRODUCT -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="group list-group-image" src="{{'/storage/'.$cart->image}}" alt="Card image cap" width="120" height="100">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-4">
                        <h4 class="product-name"><strong>{{$cart->name}}</strong></h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-6 text-md-right row">
                        <div class="col-4 col-sm-4 col-md-4 text-md-right" style="padding-top: 5px">
                            <h6><strong>{{number_format($cart->price)}} <span class="text-muted">VND</span></strong></h6>

                        </div>
                        <div class="col-4 col-sm-4 col-md-4 text-md-right" style="padding-top: 5px">
                            <td class="col-sm-1 col-md-1 text-center"><strong>{{number_format($cart->price * $cart->quantity)}} VND</strong></td>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2" style="display: flex;">
                            <div class="quantity">
                                <a href="/user/cart/{{$cart->id}}/increase"><button type="button" class="btn btn-secondary">+</button></a>
                                <input type="text" name="quantity" value="{{$cart->quantity}}" class="form-control">
                                <a href="/user/cart/{{$cart->id}}/crease"><button type="button" class="btn btn-secondary">-</button></a>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <form action="/user/cart/{{$cart->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <hr> -->
                <!-- END PRODUCT -->
                <!-- PRODUCT -->

                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        <?php
                        $total = 0;
                        ?>
                        Total price:
                        <?php
                        foreach ($cartdata as $cart) {
                            $total = $total + ($cart->price * $cart->quantity);
                        }
                        echo $total;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>