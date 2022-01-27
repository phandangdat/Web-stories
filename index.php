<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Thông tin trên thanh tiêu đề -->
    <header class="headerNav">
        <!-- navbar navbar-expand-lg : class này giữ cho navbar được năm ngang khi thu bé lại -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="">
                </a>

                <!-- nút hiện ra khi màn hình quá nhỏ -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-left"></i></span>
                </button>
                <!-- danh sách tiêu đề -->
                <div class="olclapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a id='pageMain' class="nav-link" href="#">Trang chủ</a></li>
                        <li class="nav-item"><a id='pageTuan' class="nav-link" href="#">Tuần</a></li>
                        <li class="nav-item active"><a id='pageTheLoai' class="nav-link" href="#">Thể Loại</a>
                            <ul class="sub-menu">
                                    <li><a href="#">Complete</a></li>
                                    <li><a href="#">Drama</a></li>
                                    <li><a href="#">BL</a></li>
                                    <li><a href="#">School life</a></li>
                                    <li><a href="#">Fantasy</a></li>
                                    <li><a href="#">Horror</a></li>
                                    <li><a href="#">Thriller</a></li>
                                    <li><a href="#">Historical</a></li>
                                    <li><a href="#">Comedy</a></li>
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Sci-fi</a></li>
                                    <li><a href="#">Romance</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a id='pageMoi' class="nav-link" href="#">Mới</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="body">
        <?php
        include("main.php");
    ?>
    </div>
    <footer id="footer" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="logo-part">
                                <div class=" logo-footer">
                                    <a class="navbar-brand" href="#">
                                        <img id="logoFooter" src="img/footer-logo.png" alt="">
                                    </a>
                                </div>
                                <p><b>Địa chỉ</b> </p>
                                <p>Toomicrs by theorist.</p>
                                <p>Toomics Global Co.,Ltd. | E-mail: datdangphan@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <h6> Về chúng tôi</h6>
                            <p>Bạn có thể xem thêm thông tin về chúng tôi tại đây</p>
                            <a href="#" class="btn-footer"> Liên hệ </a><br>
                            <a href="#" class="btn-footer"> Thông tin</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 px-4">
                            <h6> Help us</h6>
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li class="link-footer"> <a href="#"> Home</a> </li>
                                        <li class="link-footer"> <a href="#"> About</a> </li>
                                        <li class="link-footer"> <a href="#"> Service</a> </li>
                                        <li class="link-footer"> <a href="#"> Team</a> </li>
                                        <li class="link-footer"> <a href="#"> Help</a> </li>
                                        <li class="link-footer"> <a href="#"> Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <h6> Mạng xã hội</h6>
                            <div class="social">
                                <a href="https://www.facebook.com/dat.phandang"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="https://www.instagram.com/d.a.t.d.a.t/"><i class="fa fa-instagram"></i></a>
                            </div>
                            <form class="form-footer my-3">
                                <input type="text" placeholder="search here...." name="search">
                                <input type="button" value="Go">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>