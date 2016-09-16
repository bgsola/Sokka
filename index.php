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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <li><a href="">About Us</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Product</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container">
                <!--Slider-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!--Carousel Indicators-->
                    <!--<ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>-->
                    <!--Wrapper for slides-->
                    <div class="carousel-inner" role="listbox">
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
                </div>
                <div class="container-fluid bg-3 text-center">
                    <h3>Where To Find Me?</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>Ini adalah tulisan ngarang bebas tanpa berpikir hehehe</p>
                            <img class="img-circle" src="img/gallery/4.jpg" height="260px">
                        </div>
                        <div class="col-sm-4">
                            <p>Ini adalah tulisan ngarang bebas tanpa berpikir hehehe</p>
                            <img class="img-circle" src="img/gallery/6.jpg" height="260px">
                        </div>
                        <div class="col-sm-4">
                            <p>Ini adalah tulisan ngarang bebas tanpa berpikir hehehe</p>
                            <img class="img-circle" src="img/gallery/9.jpg" height="260px">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container-fluid footer container">
            <p>Design by &copy <a href="https://www.facebook.com/Unregisterred">Bagoes solekhudin</a> 2016</p>
        </div>
    </body>
</html>
