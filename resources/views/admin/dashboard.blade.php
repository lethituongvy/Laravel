<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            /* background-image: url('https://i.pinimg.com/736x/e0/fa/84/e0fa84017712e6acb5a32a05029ca1e2.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        button {
            width: 50%;
            height: 50%;
            color: grey;
            /* background-color: maroon; */
        }
        table{
            width: 25%;
        }
        .class {
            width: 20%;
        }
    </style>
</head>

<body>
    <center>
        <h1>welcome admin</h1>
    </center>
    <!-- <table border="2px" solid black>
            <form action="">Home</form>
            <form action="">Home</form>
            <form action="">Home</form>
            <form action="">Home</form>
            <form action="">Home</form>
            <form action="">Home</form>
    </table> -->
    <center>
        <div class="main">
            <form action="/admin/product/index" method="GET">
                <button type="submit">QUẢN LÍ SẢN PHẨM</button>
            </form>
            <form action="/admin/users/index" method="GET">
                <button type="submit">QUẢN LÍ USERS</button>
            </form>
            <form action="/admin/category/index" method="GET">
                <button type="submit">QUẢN LÍ CATEGORY</button>
            </form>
            <form action="/admin/category/index" method="GET">
                <button type="submit">DISCOUNT</button>
            </form>
            <form action="/admin/category/index" method="GET">
                <button type="submit">ORDER</button>
            </form>
        </div>
    </center>

</body>

</html>