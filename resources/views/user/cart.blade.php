<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <center>
        <table border="1px;" height="10px;">

            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Xoa</th>
            </tr>
            <tr>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                    <td>{{$cart->title}}</td>
                    <td><img class="group list-group-image" src="{{'/storage/'.$cart->image}}" alt="Card image cap"></td>
                    <td>{{$cart->price}}</td>
                    <td><input type="number" value="1" min="1" max="10"></td>
                    <td><form action="{{'/user/animals/'.$cart->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">DELETE</button>
                    </form></td>
                </form>
            </tr>
        </table>
        <hr>
        <div id="thanhtoan">
            <h3>Tong tien: <span></span></h3>
            <hr>
            <div>
                <button>Thanh toan</button>
            </div>
        </div>
    </center>
</body>

</html>