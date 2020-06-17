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
                <h4 style="color: #D8D840;">Giỏ hàng</h4>
                <img src="https://dogily.vn/wp-content/uploads/2019/10/gio-hang.png" alt="">
            </div>
            <div style="margin:auto; display:flex">
                @if(Auth::user())
                <h3 >Hi: {{Auth::user()->name }} <span>
                        <form action="/home/logout" method="GET">
                            <Button type="submit">logout</Button>
                        </form>
                    </span> </h3>
                @else
                <form action="/auth/login">
                    <button type="submit">Login</button>
                </form>
                <form action="/auth/register">
                    <button type="submit">Register</button>
                </form>
                @endif
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <center>
                    <nav class="navbar navbar-inverse">
                        <ul class="nav navbar-nav" id="menu">
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-bars"> DANH MỤC SẢN PHẨM</i><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Chó cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> Mèo cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Bán chó cảnh</a></li>
                                    <li><a href="Home/hoakhaitruong.php"> Bán mèo cảnh</a></li>
                                    <li><a href="Home/hoachiabuon.php"> Shop phụ kiện</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Dịch vụ</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Thú kiểng</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Tin tức</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Facebook</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Youtube</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> CHÓ CẢNH<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Chó cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> Mèo cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Bán chó cảnh</a></li>
                                    <li><a href="Home/hoakhaitruong.php"> Bán mèo cảnh</a></li>
                                    <li><a href="Home/hoachiabuon.php"> Shop phụ kiện</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Dịch vụ</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Thú kiểng</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Tin tức</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Facebook</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Youtube</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> MÈO CẢNH<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Chó cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> Mèo cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Bán chó cảnh</a></li>
                                    <li><a href="Home/hoakhaitruong.php"> Bán mèo cảnh</a></li>
                                    <li><a href="Home/hoachiabuon.php"> Shop phụ kiện</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Dịch vụ</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Thú kiểng</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Tin tức</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Facebook</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Youtube</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> BÁN CHÓ CẢNH<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Chó cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> Mèo cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Bán chó cảnh</a></li>
                                    <li><a href="Home/hoakhaitruong.php"> Bán mèo cảnh</a></li>
                                    <li><a href="Home/hoachiabuon.php"> Shop phụ kiện</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Dịch vụ</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Thú kiểng</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Tin tức</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Facebook</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Youtube</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> BÁN MÈO CẢNH<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Chó cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> Mèo cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Bán chó cảnh</a></li>
                                    <li><a href="Home/hoakhaitruong.php"> Bán mèo cảnh</a></li>
                                    <li><a href="Home/hoachiabuon.php"> Shop phụ kiện</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Dịch vụ</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Thú kiểng</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Tin tức</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Facebook</a></li>
                                    <li><a href="Home/hoatinhyeu.php"> Youtube</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> SHOP PHỤ KIỆN<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Bò sát cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> chim cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Chuột Hamster</a></li>
                                    <li><a href="Home/hoakhaitruong.php">Cá cảnh</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DỊCH VỤ<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Trông giữ thú</a></li>
                                    <li><a href="Home/hoasukien.php">Bệnh viện thú y</a></li>
                                    <li><a href="Home/hoacuoi.php">Phối giống chó mèo</a></li>
                                    <li><a href="Home/hoakhaitruong.php">Spa & Grooming</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> THÚ KIỂNG<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Bò sát cảnh</a></li>
                                    <li><a href="Home/hoasukien.php"> chim cảnh</a></li>
                                    <li><a href="Home/hoacuoi.php"> Chuột Hamster</a></li>
                                    <li><a href="Home/hoakhaitruong.php">Cá cảnh</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> TIN TỨC<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> Tin tức thú cưng</a></li>
                                    <li><a href="#">Hoạt động Dogily petshop</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"> <i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li class="dropdown"><a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </nav>
                </center>
            </div>
        </div>
    </header>
</body>

</html>