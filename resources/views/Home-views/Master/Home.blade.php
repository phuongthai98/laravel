
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<!-- Tieu Long Lanh Kute -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rammus Shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts======================= -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        
        <!-- Fonts ======================== -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="{{url('')}}/public/Home/img/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{url('')}}/public/Home/css/jquery.countdown.css">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/bootstrap.min.css">
        <!-- Mobile Menu Slicknav CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/slicknav.css">
        <!-- Font-awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/font-awesome.min.css">
        <!-- rs-plugin CSS
        ============================================ -->            
        <link href="{{url('')}}/public/Home/lib/rs-plugin/css/settings.css" rel="stylesheet" /> 
        
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/owl.carousel.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/normalize.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/main.css">
        <!-- Style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/style.css">
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/public/Home/css/responsive.css">
        <!-- modernizr js
        ============================================ -->
        <script src="{{url('')}}/public/Home/js/vendor/modernizr-2.6.2.min.js"></script>
        
    </head>
    <body class="home_1 home_2">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
        <!--HEADER AREA START-->
        <header>
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!--HEADER-TOP-MENU LEFT START-->
                        <div class="header-top-menu">
                            <nav>
                                <ul>
                                    <li>
                                        @if(isset(Auth::guard('cus')->user()->email))
                                            <a href="">
                                            <img width="25px" src="{{url('')}}/public/upload/avatar/{{Auth::guard('cus')->user()->image}}" style="width: 30px;
  clip-path: circle(15px at 50% 50%);" alt="">{{Auth::guard('cus')->user()->full_name}}<span><i class="fa fa-angle-down"></i></span>
                                            </a>
                                        
                                        @else
                                        <a href=""><img width="25px" src="public/Home/img/470-4703547_icon-user-icon-hd-png-download.png" style="width: 30px;
  clip-path: circle(15px at 50% 50%);" alt=""><span><i class="fa fa-angle-down"></i></span></a>
                                        @endif
                                        @if(isset(Auth::guard('cus')->user()->email))
                                        <ul class="sup-menu" style="width: 200px; box-shadow: 1px 5px 10px 2px">
                                                <a href="" class="btn btn-primary">Profile</a>
                                                <a href="{{route('home_logout')}}" class="btn btn-primary">Log out</a>
                                        </ul>

                                        @else
                                        <ul class="sup-menu" style="width: 200px; box-shadow: 1px 5px 10px 2px">
                                            <a href="{{route('home_login')}}" class="btn btn-primary">Log in</a>
                                        </ul>
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--HEADER-TOP-MENU-LEFT END-->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <!--HEADER-TOP-MENU-RIGHT START-->
                        <div class="header-top-right">
                            <div class="heder-right-menu">
                            <nav>
                                <ul>
                                    <li><a href=""><span><i class="fa fa-align-justify"></i></span>All Category <span class="dropdown"><i class="fa fa-angle-down"></i></span></a>
                                        <ul>
                                            <li><a href="category_grid.php">Mens</a></li>
                                            <li><a href="category_grid.php">Womens</a></li>
                                            <li><a href="category_grid.php">Bag</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            </div>
                            <div class="form-and-cart">
                                <form method="post" action="{{route('search')}}" role='search'>
                                    @csrf
                                    <input type="text" name="search" placeholder="Search..."/>
                                    <button type="submit" class="search-button" style="border:none"><i style="line-height: 10px" class="fa fa-search"></i></button>
                                </form>
                                <div class="cart-empty shopping_cart">
                                    <a href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i></a>
                                    <!-- CART-PRODUCT-LIST START-->
                                    <div class="cart-product-list">
                                        <div class="mini-cart-content">
                                            @if(!empty($cart))
                                                @foreach($cart->items as $v)
                                                <div class="cart-img-details">                                          
                                                    <div class="cart-img-photo">
                                                        <a href="#"><img src="{{url('')}}/public/upload/products/{{$v['image']}}" alt="" /></a>
                                                        <span class="quantity">{{$v['quantity']}}</span>
                                                    </div>
                                                    <div class="cart-img-contaent">
                                                        <a href="#"><h4>{{$v['name']}}</h4></a>
                                                        <span>{{number_format($v['price'])}} VNĐ</span>
                                                    </div>
                                                    <div class="pro-del"><a href="{{route('cart.remove',['id' => $v['id']])}}"><i class="fa fa-times-circle"></i></a></div>
                                                </div>
                                                <div class="clear"></div>
                                                @endforeach
                                            @else
                                                echo <h3>sdsadas</h3>
                                            @endif
                                            <p class="total">Tổng tiền: <span class="amount">{{number_format($cart->total_price)}} VNĐ</span></p>
                                            <div class="clear"></div>
                                            <p class="cart-button-top"><a href="{{route('cart')}}">Giỏ hàng</a></p>
                                        </div>
                                    </div>
                                    <!-- CART-PRODUCT-LIST END-->
                                </div>
                            </div>
                        </div>
                        <!--HEADER-TOP-MENU-RIGHT END-->
                    </div>
                </div>
            </div>
        </div>
        <!--HEADER AREA TOP END-->

        <!--MAINMENU AREA START-->
        <div class="mainmenu-area">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="row">                           
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!--LOGO AREA START-->
                                    <div class="logo">
                                        <a href="{{route('home')}}"><img src="{{url('')}}/public/Home/img/logo-3.png" alt="" /></a>
                                    </div>
                                    <!--LOGO AREA END-->
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                <!--MAINMENU START-->
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="nav">
                                                <li class="current"><a href="{{route('home')}}"><span><i class="fa fa-home"></i></span>Home <i class="fa fa-arrow-circle-o-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{route('home')}}">Home page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><span><i class="fa fa-briefcase"></i></span>About</a></li>
                                                <li><a href="blog_sidebar.php"><span><i class="fa fa-pencil-square-o"></i></span>Blogs <i class="fa fa-arrow-circle-o-right"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog_sidebar.php">Blog With Sidebar</a></li>
                                                        <li><a href="blog_no_sidebar.php">Blog With Out Sidebar</a></li>
                                                        <li><a href="blog_details.php">Blog details page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="category_grid.php"><span><i class="fa fa-shopping-cart"></i></span>Shop <i class="fa fa-arrow-circle-o-right"></i></a>
                                                    <div class="mega-menu">
                                                        <div class="single-mega-menu">
                                                            <h3 class="hedding-border">Shop Categories</h3>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Men</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Women</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Shoes</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Bags</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Accessories</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Clothings</a>
                                                        </div>
                                                        <div class="single-mega-menu">
                                                            <h3 class="hedding-border midle">Shop Variants</h3>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Shop full width</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Shop sidebar right</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Shop sidebar left</a>
                                                            <a href="category_grid.php"><i class="fa fa-arrow-circle-o-right"></i>Sategory listing</a>
                                                            <a href="product_details.php"><i class="fa fa-arrow-circle-o-right"></i>Products detail</a>
                                                        </div>
                                                        <div class="single-mega-menu">
                                                            <h3 class="hedding-border left-border">Page</h3>
                                                            <a href="{{route('cart')}}"><i class="fa fa-arrow-circle-o-right"></i>Checkout</a>
                                                            <a href="{{route('cart')}}"><i class="fa fa-arrow-circle-o-right"></i>Cart</a>
                                                            <a href="#"><i class="fa fa-arrow-circle-o-right"></i>My account</a>
                                                            <a href="#"><i class="fa fa-arrow-circle-o-right"></i>Order tracking</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="category_list.php"><span><i class="fa fa-leaf"></i></span>Featured</a></li>
                                                <li><a href="contact_us.php"><span><i class="fa fa-envelope"></i></span>Contact</a></li>
                                            </ul>                       
                                        </nav>
                                    </div>
                                    <!--MAINMENU END-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MOBILE-MENU START-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <ul id="mobile-menu">
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
                                        <ul>
                                            <li><a href="index-2.php">Home page 2</a></li>
                                            <li><a href="index-3.php">Home page 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="blog_sidebar.php">Blogs</a>
                                        <ul>
                                            <li><a href="blog_sidebar.php">Blog With Sidebar</a></li>
                                            <li><a href="blog_no_sidebar.php">Blog With Out Sidebar</a></li>
                                            <li><a href="blog_details.php">Blog details page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="category_grid.php">Shop</a>
                                        <ul>
                                            <li><a href="category_grid.php">Men</a></li>
                                            <li><a href="category_grid.php">Women</a></li>
                                            <li><a href="category_grid.php">Shoes</a></li>
                                            <li><a href="category_grid.php">Bags</a></li>
                                            <li><a href="category_grid.php">Accessories</a></li>
                                            <li><a href="category_grid.php">Clothings</a></li>
                                            <li><a href="category_grid.php">Shop full width</a></li>
                                            <li><a href="category_grid.php">Shop sidebar right</a></li>
                                            <li><a href="category_grid.php">Shop sidebar left</a></li>
                                            <li><a href="category_grid.php">Sategory listing</a></li>
                                            <li><a href="product_details.php">Products detail</a></li>
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="{{route('cart')}}">Cart</a></li>
                                            <li><a href="#">My account</a></li>
                                            <li><a href="#">Order tracking</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="category_list.php">Featured</a></li>
                                    <li><a href="contact_us.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- MOBILE-MENU END-->
                </div>
            </div>
        </div>
        <!--MAINMENU AREA END-->
        </header>
        <!--HEADER AREA END-->
        @yield('content')
                <!-- FOOTER-AREA START-->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="footer">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-5">
                                    <!-- FOOTER-LOGO START-->
                                    <div class="footer-logo">
                                        <a href="index.html"><img alt="" src="{{url('')}}/public/Home/img/logo_footer_1.png"></a>
                                        <p>Vestibulum gravida magna ut commodo lacinia. Quisque dictum in arcu ut vestibulum. Morbi sed tempor lacus...  <a href="#">Readmore>></a></p>
                                    </div>
                                    <!-- FOOTER-LOGO END-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-4 hidden-sm">
                                    <!-- INFORMATION START-->
                                    <div class="information">
                                        <h3>Infomation</h3>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    Specials
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    New products
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    Best sellers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    Our stores
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    Contact us
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- INFORMATION END-->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                <!-- MYACCOUNT START-->
                                    <div class="myaccount">
                                        <h3>My Account</h3>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    My orders
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    My credit slips
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    My addresses
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span><i class="fa fa-arrow-circle-o-right"></i></span>
                                                    My personal info
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- MYACCOUNT END-->
                                </div>
                                
                                <!-- JOIN-US AREA START-->
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <div class="join-us">
                                        <h3>Join us</h3>
                                        <span>Follow with us now!</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- JOIN-US AREA END-->
                            </div>
                            <!-- ROW END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER-AREA START-->
        <div class="footer-bottum-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="footer-bottum">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <!-- FOOTER-BOTTUM-MENU START-->
                                    <div class="footer-bottum-menu">
                                        <ul>
                                            <li><a href="#">Our stores</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">Terms and conditions of use</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                        </ul>
                                    </div>
                                    <!-- FOOTER-BOTTUM-MENU END-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- CARD-AREA START-->
                                    <div class="card-area">
                                        <a href="#"><img src="{{url('')}}/public/Home/img/paypal.png" alt="" /></a>
                                        <a href="#"><img src="{{url('')}}/public/Home/img/amazon.png" alt="" /></a>
                                        <a href="#"><img src="{{url('')}}/public/Home/img/skrill.png" alt="" /></a>
                                        <a href="#"><img src="{{url('')}}/public/Home/img/visa.png" alt="" /></a>
                                        <a href="#"><img src="{{url('')}}/public/Home/img/discover.png" alt="" /></a>
                                        <a href="#"><img src="{{url('')}}/public/Home/img/master.png" alt="" /></a>
                                    </div>
                                    <!-- CARD-AREA END-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- COPY-RIGHT START-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copy-right">
                        <p>Copyright &copy; 2015 <a href="#">Rammustheme</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- COPY-RIGHT END-->  

        
        <!-- jquery-1.11.3.min js -->
        <script src="{{url('')}}/public/Home/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap.min js -->
        <script src="{{url('')}}/public/Home/js/bootstrap.min.js"></script>
        <!-- FILTER_PRICE js -->
        <script src="{{url('')}}/public/Home/js/jquery-ui.min.js"></script>
        <!-- owl.carousel.min js -->
        <script src="{{url('')}}/public/Home/js/owl.carousel.min.js"></script>
        <!-- jquery.slicknav.min js -->
        <script src="{{url('')}}/public/Home/js/jquery.slicknav.min.js"></script>
        <!-- plugins js -->
        <script src="{{url('')}}/public/Home/js/plugins.js"></script>
        <!-- jquery.scrollUp js -->
        <script src="{{url('')}}/public/Home/js/jquery.scrollUp.min.js"></script>
        <!-- RS Lib js -->      
        <script src="{{url('')}}/public/Home/lib/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="{{url('')}}/public/Home/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="{{url('')}}/public/Home/lib/rs-plugin/rs.home.js"></script>
        
        <!-- Countdown JS-->
        <script src="{{url('')}}/public/Home/js/jquery.plugin.min.js"></script>
        <script src="{{url('')}}/public/Home/js/jquery.countdown.min.js"></script>
        <!-- main JS -->
         <script src="{{url('')}}/public/Home/js/main.js"></script>
    </body>

<!-- Tieu Long Lanh Kute -->
</html>
