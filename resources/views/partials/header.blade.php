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
        #class {
            display: grid;
            grid-template-columns: 50px 400px 50px 100px 50px 100px 100px 10px;
            grid-template-rows: 10px 20px;
            margin: auto;
            padding: 20px;
        }

        .search-box {
            display: inline-block;
            width: 100%;
            border-radius: 3px;
            padding: 4px 55px 4px 15px;
            position: relative;
            background: #fff;
            border: 1px solid #ddd;
            -webkit-transition: all 200ms ease-in-out;
            -moz-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
        }

        .search-box.hovered,
        .search-box:hover,
        .search-box:active {
            border: 1px solid #aaa;
        }

        .search-box input[type=text] {
            border: none;
            box-shadow: none;
            display: inline-block;
            padding: 0;
            background: transparent;
        }

        .search-box input[type=text]:hover,
        .search-box input[type=text]:focus,
        .search-box input[type=text]:active {
            box-shadow: none;
        }

        .search-box .search-btn {
            position: absolute;
            right: 2px;
            top: 2px;
            color: #aaa;
            border-radius: 3px;
            font-size: 21px;
            padding: 5px 10px 1px;
            -webkit-transition: all 200ms ease-in-out;
            -moz-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
        }

        .search-box .search-btn:hover {
            color: #fff;
            background-color: #8FBE00;
        }

        .container-fluid {
            background-color: #FF8040;
            text-decoration: none;
            height: 50px;
        }

        ul li {
            list-style-type: none;
            margin-left: 20px;
        }

        .navbar {
            display: flex;
            width: 100%;
            justify-content: space-between;
            margin-top: auto;
        }

        .menu li:hover .sub-menu {
            z-index: 1;
            opacity: 1;
        }

        .sub-menu {
            width: 160%;
            padding: 5px 0px;
            position: absolute;
            top: 100%;
            left: 0px;
            z-index: -1;
            opacity: 0;
            transition: opacity linear 0.15s;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.2);
            background: #2e2728;
        }

        .sub-menu li {
            display: block;
            font-size: 16px;
        }

        .sub-menu li a {
            padding: 10px 30px;
            display: block;
        }

        .sub-menu li a:hover,
        .sub-menu .current-item a {
            background: #3e3436;
        }
    </style>

</head>

<body>
    <header>
        <div id="class" style="display: flex;">
            <div style="margin: auto;">
                <a href="/home"> <img src="https://dogily.vn/wp-content/uploads/2019/05/logo-pet.png" alt=""> </a>
            </div>
            <div style="margin: auto;">
                <div class="search-box">
                    <form class="search-form" action="/user/search">
                        <input name="txtSearch" class="form-control" placeholder="Tìm kiếm" type="text">
                        <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i>
                    </form>
                </div>
            </div>
            <div style="margin:auto;display:flex">
                <img src="https://dogily.vn/wp-content/uploads/2019/10/hot-line.png" alt="">
                <h4 style="color: #D8D840;">Hỗ trợ khách hàng</h4>
            </div>
            <div style="margin:auto ; display:flex">
                <a href="{{'/user/cart'}}">
                    <h4 style="color: #D8D840;">Giỏ hàng</h4>
                </a>
                <img src="https://dogily.vn/wp-content/uploads/2019/10/gio-hang.png" alt="">
            </div>
            <div style="margin:auto; display:flex">
                @if(Auth::user())
                <h3>Hi: {{Auth::user()->name }} <span>
                        <form action="/home/logout" method="GET">
                            <Button type="submit">logout</Button>
                        </form>
                    </span> </h3>
                @else
                <form action="/auth/login">
                    <button type="submit">Login</button> </form>
                <form action="/auth/register">
                    <button type="submit">Register</button>
                </form>
                @endif
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <center>

                    <nav class="navbar">
                        <h4>TRANG CHỦ</h4>
                        <div>
                            <!-- <h4>DANH MỤC SẢN PHẨM</h4>
                            -->
                        </div>
                        <h4>Liên hệ</h4>
                    </nav>
                </center>
            </div>
        </div>
    </header>
</body>

</html>