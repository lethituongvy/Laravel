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
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            width: 100%;
        }

        #display {
            display: grid;
            grid-template-columns: 350px 350px 350px 350px;
            grid-gap: 20px;
            width: 100%;
        }

        /* #display img {
            width: 350px
        } */

        #id {
            display: grid;
            grid-template-columns: 200px 800px 250px;
            grid-gap: 5px;
            padding-left: 100px;
            margin: auto;
            /* padding: 20px; */

        }

        #menus {
            margin: auto;
            line-height: 0.5px;
            border: 1px solid #66CBFF;
        }

        .navbar nav navbar-nav {
            line-height: 0.5px;
        }

        .narbar {
            border: 1px solid black;
        }

        #ids {
            /* display: grid; */
            grid-template-columns: 150px 150px;
            grid-gap: 20px;
        }
    </style>
</head>

<body>
    <div>
        @include('partials\header')
    </div>
    <hr>
    <div id="id">
        <!-- menu -->
        <div id="menus">
            <div class="container-fluid">
                <div class="row">
                    <center>
                        <nav class="navbar">
                            <ul class=" nav navbar-nav" id="menu">
                                <li><a href="#">Menu</i></a>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mèo cảnh</i><span class="caret"></span></a>
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
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bán chó cảnh</i><span class="caret"></span></a>
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
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bán mèo cảnh</i><span class="caret"></span></a>
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
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop phụ kiện</i><span class="caret"></span></a>
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
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Thú cưng đang bán<span class="caret"></span></a>
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
                                <br>
                                <li class="dropdown"><a href="#"> <i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li class="dropdown"><a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </center>
                </div>
            </div>
        </div>
        <!-- slide bar -->
        <div class="container" style="padding: 10px;">
            <div class="row">
                <div class="col-md-8">
                    <div class="slidee">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="https://dogily.vn/wp-content/uploads/2019/11/Slider-02.jpg" alt="" style="height: 507px; width: 1000px;">
                                </div>
                                <div class="item">
                                    <img src="https://dogily.vn/wp-content/uploads/2019/11/Slider-03.jpg" alt="" style="height: 507px; width: 1000px;margin-bottom: 0px;">
                                </div>
                                <div class="item">
                                    <img src="https://dogily.vn/wp-content/uploads/2019/11/Slider-01.jpg" alt="" style="height: 507px; width: 1000px;margin-bottom: 0px;">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- khung ho tro -->
        <div style="border: 1px solid #66CBFF; height:515px">
            <h4>CHẤT LƯỢNG CHO TẤT CẢ</h4>
            <div id="ids">
                <div style="display:flex">
                    <div>
                        <img src="https://dogily.vn/wp-content/uploads/2019/10/mien-phi-giao-hang.png" alt="">
                        <h5><span style="color: #D8D840;">Miễn phí giao hàng</h5>
                    </div>
                    <hr>
                    <div>
                        <img src="https://dogily.vn/wp-content/uploads/2019/10/ho-tro-247.png" alt="">
                        <h5><span style="color: #D8D840;">Hỗ trợ liên tục 27/4</h5>&emsp;
                    </div>
                </div>
                <div style="display: flex;">
                    <div>
                        <img src="https://dogily.vn/wp-content/uploads/2019/10/yen-tam-suc-khoe.png" alt="">
                        <h5><span style="color: #D8D840;">Yên tâm về sức khỏe</h5>
                    </div>
                    <hr>
                    <div>
                        <img src="https://dogily.vn/wp-content/uploads/2019/10/bao-hanh-dai-han.png" alt="">
                        <h5> <span style="color: #D8D840;">Bảo hành dài hạn</span> </h5>
                    </div>
                </div>
                <hr style="color: yellow;">
                <div style="display:flex">
                    <div>
                        <img src="https://dogily.vn/wp-content/uploads/2019/10/img_hotline.png" alt="">
                    </div>
                    <div>
                        <h6><span style="color: #D8D840;">Dịch vụ CSKH chu đáo</h6>
                        <h6><span style="color: #D8D840;">Hotline: 0384456878</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- hiển thị sản phẩm -->
    <div>
        <div id="display">
            @foreach ($products as $product)
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="{{'storage/'.$product->image}}" alt="Card image cap">
                            <center>
                                <div class="caption">
                                    <h5 class="card-title"> {{ $product->title}} </h5>
                                    <p class="card-text"> <span>{{ $product->price }} $ </span> </p>

                                    <div class="row">
                                        <div class="col-xs-6  col-md-6">
                                            <form action="/user/cart/{{$product->id}}">
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
    </div>
    <hr>
    <div>
        @include('partials\footer')
    </div>
</body>

</html>