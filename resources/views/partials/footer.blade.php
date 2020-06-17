<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        html,body{
            background-color: black;
        }
        .container {
            padding: 2px;
        }

        .search-box {
            display: inline-block;
            width: 100%;
            border-radius: 3px;
            /* padding: 4px 55px 4px 15px; */
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
            transition: all 200ms ease-in-out;
        }

        .search-box .search-btn:hover {
            color: #fff;
            background-color: #8FBE00;
        }

        #dd {
            display: grid;
            grid-template-columns: 50px 400px 100px 400px 500px;
            grid-template-rows: 10px 20px;
            margin: auto;
            padding: 20px;
        }

        #class {
            display: grid;
            grid-template-columns: 300px 400px 300px 300px;
            grid-template-rows: 10px 20px;
            margin: auto;
            padding: 20px;
            width:100%
        }
        footer{
            background-color: black;
            color: white;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
    <footer>
        <div id="dd">
            <div style="margin: auto;">
                <img src="https://dogily.vn/wp-content/uploads/2019/10/icon-email.png" alt="">
            </div>
            <div>
                <div class="search-box">
                    <form class="search-form" action="http://hocwebgiare.com/">
                        <input class="form-control" placeholder="Đăng kí nhận tin" type="text">
                        <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i>
                    </form>
                </div>
            </div>
            <div style="margin: auto;">
                <img src="https://dogily.vn/wp-content/uploads/2019/10/icon-shipping.png" alt="">
            </div>
            <div>
                <h5>Giao hàng miễn phí tại TP.HCM, Ha Nội, Đà Nẵng. Áp dụng cho đơn hàng 500 trở lên</h5>
            </div>
            <div style="margin: auto;">
                <img src="https://dogily.vn/wp-content/uploads/2019/12/logo_bank-atm.png" alt="">
            </div>
        </div>
        <hr />
        <div id="class">
            <div>
                <h3>
                    <ul>VỀ CHÚNG TÔI</ul>
                </h3>
                <ul>Giới thiệu</ul>
                <ul>Chi nhánh</ul>
                <ul>Liên hệ</ul>
                <ul><img src="https://dogily.vn/wp-content/uploads/2019/10/icon-bocongthuong.png" alt=""></ul>
                <ul><img src="https://images.dmca.com/Badges/_dmca_premi_badge_7.png?ID=1bf3f65e-4ac8-457e-8400-9d299263f727" alt=""></ul>
            </div>
            <div>
                <h3>
                    <ul>HỖ TRỢ KHÁCH HÀNG</ul>
                </h3>
                <ul>Hướng dẫn mua hàng</ul>
                <ul>Điều khoản và điều kiện</ul>
                <ul>Chính sách bảo mật</ul>
                <ul>Chính sách thanh toán</ul>
                <ul>Chính sách giao hàng</ul>
                <ul>Chính sách đổi trả</ul>
                <ul>Hướng dẫn gửi trả hàng</ul>
                <ul>Chính sách bảo hành</ul>
                <ul>Mua trả góp</ul>
                <ul>Chất lượng dịch vụ</ul>
            </div>
            <div>
                <h3>
                    <ul>TOP TÌM KIẾM</ul>
                </h3>
                <span><span style="background-color: #3BB64C;">Mèo Anh lông ngắn</span>
                    &emsp;<span style="background-color: #3BB64C;">Mèo tai cụp Scrottish</span>
                    &emsp;<span style="background-color: #3BB64C;">Mèo Munthkin</span>
                    &emsp;<span style="background-color: #3BB64C;">Mèo ba tư</span>
                    &emsp;<span style="background-color: #3BB64C;">Mèo Bengal</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Akita</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Shiba</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Alaska</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Samoyed</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Husky</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Phốc sóc</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Poodle</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Pug</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Golden</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Labrador</span>
                    &emsp;<span style="background-color: #3BB64C;">Chó Phú Quốc</span></span>
            </div>
            <div>
                <h3>
                    <ul>THÔNG TIN LIÊN HỆ</ul>
                </h3>
                <ul>Địa chỉ:606/121 đường Ba Tháng Hai, phường 14, quận 10, thành phố Hồ Chí Minh &emsp;<span style="color:#D8D820">Chỉ đường</span></ul>
                <ul>Địa chỉ trang trại giống Dogily Kennel 1 Hà Nội: 262 Vĩnh Hưn, Hai Bà Trưng, Hà Nội&emsp;<span style="color:#D8D820">Chỉ đường</span></ul>
                <ul>Địa chỉ: Trang trại nhân giống Dogily Kennel 2: Ngõ 1, xóm 2, thôn 3, Xã Vạn Phú, huyện Thanh Trì, Hà Nội &emsp;<span style="color:#D8D820">Chỉ đường</span></ul>
                <ul>Email: vy.le21@student.passerellesnumeriques.org</ul>
                <ul>Holine: (+84) 38 4456 878</ul>
            </div>
        </div>
    </footer>
</body>

</html>