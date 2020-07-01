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
        .container-fluid {
            display: grid;
            grid-template-columns: 50% 50%;
            grid-template-rows: 10px 20px;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div>
            <form action="/user/order" method="POST">
            @csrf
                <div>
                    <label for="Tên"></label>
                    <input type="text" name="name" placeholder="Nhập tên">
                </div>
                <div>
                    <label for="Số diện thoại"></label>
                    <input type="text" name="phone" placeholder="Nhập số điện thoại">
                </div>
                <div>
                    <label for="Địa chỉ"></label>
                    <input type="text" name="address" placeholder="Nhập địa chỉ">
                </div>
                <button type="submit" class="btn btn-success">Mua hàng</button>
            </form>
        </div>
        <div>
            <div class="orders">
                <table border="1px" solid red">
                    <?php
                    $total = 0;
                    ?>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Tạm tính</th>
                    </tr>
                    @foreach($carts as $cart)
                    <tr>
                        <td>{{$cart->infoProduct->name}}</td>
                        <td><img src="/storage/{{$cart->infoProduct->image}}" width="100px;" height="100px;"></td>
                        <td>{{$cart->infoProduct->price}}</td>
                        <td>{{number_format($cart->quantity)}}</td>
                        <td>{{number_format($cart->infoProduct->price * $cart->infoProduct->quantity)}}</td>
                        <?php
                        $total = $total + $cart->infoProduct->price * $cart->infoProduct->quantity;
                        ?>
                    </tr>
                    @endforeach


                </table>
                <b> TOTAL:{{number_format($total)}}</b>
            </div>
        </div>
    </div>

</body>

</html>