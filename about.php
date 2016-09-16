<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sokkaroof | Genteng sokka</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <style type="text/css">
        .content{margin-bottom: 20px;}
        .navbar{margin-top: 50px}
        .nav{margin-top: 20px}
        ul.nav li a{font-weight: bold;color: #000;font-family: courier new;font-size: 16px}
        .navbar-brand{background: url(img/logo1.png)center /contain no-repeat;width: 200px}
        .navbar-brand{height: 100px;margin-left: 0px}
        .navbar-toggle{border: 1px solid #000;margin-top: 30px}
        .icon-bar{background: #000}
        .carousel-inner img{width: 100%;margin: auto;}
        @media (max-width: 768px){#myCarousel{display: none;}}
        .bg-3{margin-top: 50px}
        .col-sm-4 img{width: 100%;padding: 20px}
        .footer{padding-top: 15px;border-top: 1px solid #e5e5e5}
        </style>
    </head>
    <body>
        <!--Header-->
        <nav class="navbar">
            <div class="container">
                <!--Logo Header-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand text-hide" href="index.php">Logo</a>
                </div>
                <!--Menu Header-->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="product.php">Product<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Plentong</a></li>
                                <li><a href="">Magas</a></li>
                                <li><a href="">Morando</a></li>
                                <li><a href="">Nock</a></li>
                                <li><a href="">Batu bata</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container">
                <!--Slider-->
                <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
                    <!--Carousel Indicators-->
                    <!--<ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>-->
                    <!--Wrapper for slides-->
                    <!--<div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="" ><img class="img-responsive" src="img/banner/banner1.jpg" alt="Image"></a>
                            <div class="carousel-caption">
                                <h3>Sell $3</h3>
                                <p>Banner 1</p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="" ><img class="img-responsive" src="img/banner/banner3.jpg" alt="Image"></a>
                            <div class="carousel-caption">
                                <h3>Sell $3</h3>
                                <p>Banner 2</p>
                            </div>
                        </div>
                    </div>
                    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>-->
                <!--</div>-->
                <div class="container-fluid">
                    <div class="col-sm-8">
                        <h3>Tentang Kami</h3>
                        <div class="col-xs-12">
                            <p style="text-align:justify">Kami merupakan sebuah perusahaan bangunan atap rumah (Genteng) dan bahan dinding (Batu Bata). Kami menyediakan berbagai jenis genteng Sokka yang legendaris dan terkenal kualitasnya. Produk yang kami tawarkan merupakan produk ciptaan kami sendiri yang dibuat oleh para pekerja kami dan saya sebagai pemilik pabrik. Menciptakan sebuah hasil yang bagus dan berkualitas bukanlah perkara mudah, perlu keseriusan dalam mengerjakan produksi barang tersebut. Kami "YON SOKKA" berkomitmen untuk memberikan Barang dan Pelayanan yang berkualitas untuk para pelanggan dimanapun anda berada.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12">
                            <h3>News More</h3>
                            <ul class="nav">
                                <li><a href=""><h5>News</h5></a></li>
                                <li><a href=""><h5>News1</h5></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <h3>Rekening</h3>
                            <div class="well">
                                <img src="img/logo-mandiri.png">
                                <p class="text-center">No.Rek:238.74382.68</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container-fluid footer container">
            <div class="col-sm-8">
                <p>Design by &copy <a href="https://www.facebook.com/Unregisterred">Bagoes solekhudin</a> 2016</p>
            </div>
            <div class="col-sm-4">
                <div class="w3-xlarge navbar-right">
                    <a href="https://www.facebook.com/genteng.sokka.7" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
                    <a href="" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
                    <a href="" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </body>
</html>
