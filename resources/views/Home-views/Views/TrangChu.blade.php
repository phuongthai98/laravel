@extends('Home-views.Master.Home')
@section('content')
<!--OUR-SERVICE START-->
        <div class="our-service">
            <div class="container">
                <div class="row">
                    <div class="service">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-service">
                                <span class="icon"><i class="fa fa-plane"></i></span>
                                <div class="text">
                                    <h2>Free standard delivery</h2>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-service">
                                <span class="icon"><i class="fa fa-refresh"></i></span>
                                <div class="text">
                                    <h2>100% Money back guarantee</h2>
                                    <p>Praesent mollis cursus risus non aliquam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-service">
                                <span class="icon"><i class="fa fa-comments"></i></span>
                                <div class="text">
                                    <h2>Online support 24/7</h2>
                                    <p>Fusce commodo justo sit amet neque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--OUR-SERVICE END-->
        
        <div class="slider-and-category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                    <!-- SAID-BAR START -->
                        <div class="side-bar"> 
                            <h2><i class="fa fa-align-justify"></i>Category</h2>
                            <nav>
                                <ul>
                                    <li><a href="{{route('home')}}"><span><i class="fa fa-female"></i></span>Womens <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
                                        <div class="category-mega-menu">
                                            <span class="menu-text">
                                            @foreach($menu1 as $v)                         
                                                <a href="category_grid.php">{{$v->catalog_name}}</a>
                                            @endforeach
                                        </span>
                                        <span>
                                            <img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
                                        </span>
                                        </div>
                                    </li>
                                    
                                    <li><a href="{{route('home')}}"><span><i class="fa fa-male"></i></span>Mens <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
                                        <div class="category-mega-menu">
                                            <span class="menu-text">                            
                                                @foreach($menu1 as $v)                         
                                                <a href="category_grid.php">{{$v->catalog_name}}</a>
                                                @endforeach
                                            </span>
                                            <span>
                                                <img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
                                            </span>
                                        </div>
                                    </li>
                                    
                                    <li><a href="{{route('home')}}"><span><i class="fa fa-suitcase"></i></span>Bags <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
                                        <div class="category-mega-menu">
                                            <span class="menu-text">                            
                                                @foreach($menu1 as $v)                         
                                                <a href="category_grid.php">{{$v->catalog_name}}</a>
                                                @endforeach
                                            </span>
                                            <span>
                                                <img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
                                            </span>
                                        </div>
                                    </li>
                                    
                                    <li><a href="{{route('home')}}"><span><i class="fa fa-gift"></i></span>Gift</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- SAID-BAR END -->
                    </div>          
                    <div class="col-lg-9 col-md-9">
                    <!-- SLIDER_AREA START-->
                        <div class="slider">
                            <div class="fullwidthbanner-container" >
                                <div class="fullwidthbanner2">
                                    <ul>
                                        <!-- SLIDER_LAYOUT ONE START-->
                                        @foreach($banner as $v)
                                        <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                            <img src="{{url('')}}/public/upload/banner/{{$v->image}}" alt="slide" >
                                            <div class="tp-caption large_black sfr"
                                                data-x="140"
                                                data-y="100"
                                                data-speed="1100"
                                                data-start="1500"
                                                data-easing="easeInOutBack"                                         
                                                style="font-size: 18px; font-weight: 400; text-transform: normal; color: #ffaa31;font-family: Playfair Display;font-style:italic">
                                                    Sale up to 50% off
                                            </div>
                                            <div class="tp-caption large_black sfr"
                                                data-x="170"
                                                data-y="120"
                                                data-speed="1100"
                                                data-start="1500"
                                                data-easing="easeInOutBack"                                         
                                                style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
                                            </div>
                                            <div class="tp-caption large_black sfr"
                                                data-x="70"
                                                data-y="140"
                                                data-speed="1100"
                                                data-start="2000"
                                                data-easing="easeInOutBack"
                                                    style="font-family: Open Sans; font-size: 54px; font-weight: 700;text-transform: uppercase; color: #fff;text-align:center;line-height:60px">
                                                    handBags <br />For men
                                            </div>
                                            <div class="tp-caption large_black sfr"
                                                data-x="170"
                                                data-y="260"
                                                data-speed="1100"
                                                data-start="2300"
                                                data-easing="easeInOutBack"                                         
                                                style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;">
                                            </div>
                                            <div class="tp-caption large_black sfr"
                                            data-x="30"
                                            data-y="300" 
                                            data-speed="1100"
                                            data-start="2700"
                                            data-easing="easeInOutBack"
                                                style="font-family: Open Sans; font-size: 14px; font-weight: 300; color: #FFF;line-height:25px;text-transform: normal;text-align:center">
                                                Fusce ac consectetur neque, nec pharetra dolor. Aenean metus <br /> mauris, facilisis vel leo non, ornare pretium eros.
                                            </div>
                                            <div class="tp-caption lfb carousel-caption-inner"
                                            data-x="150"
                                            data-y="370"
                                            data-speed="1300"
                                            data-start="3000"
                                            data-easing="easeInOutBack" 
                                                style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #F3F3F3;">
                                                <a href="#" class="s-btn" style="background: none;color: #fff;display: block;padding: 12px 28px;border:2px solid #fff">shop now</a>
                                            </div>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- SLIDER_AREA END-->
                    </div>                  
                </div>
            </div>
        </div>
        <!-- MAINCONTAIN-AREA START-->
        <div class="maincontain-area">
            <div class="container">
                <div class="row">
                    <div class="maincontain">
                        <div class="col-lg-3 col-md-3">
                        <div class="row">
                                <div class="col-lg-12 col-md-12">
                                <!-- BEST-PRODUCT START-->
                                    <div class="best-product">
                                        <h3 class="area-heading">Best Seller</h3>
                                        <!-- BESTSELLER-PRODUCT-ALL START-->
                                        <div class="best-product-all">
                                        <!-- SINGLE-BESTSELLER-PRODUCT START-->
                                        @foreach($pror as $v)
                                            <div class="single-featured-product">
                                                <div class="product_img">
                                                    <a href="{{route('product_detail',$v->id)}}">
                                                        <img src="{{url('')}}/public/upload/products/{{$v->image}}" alt="Special" class="primary-image"/>
                                                        <img src="{{url('')}}/public/Home/img/special_product.jpg" alt="Special" class="secondary-image"/>
                                                    </a>
                                                    <div class="add-cart-area">
                                                        <div class="fet-price" style="padding: 0px 9px;">
                                                            <span class="addcart-text">{{$v->price}} VNĐ</span>
                                                            <span class="addcart-text-del">$132.00</span>
                                                        </div>
                                                        <div class="wish">
                                                            <a class="shopping-cart" href="{{route('cart.add',['id' => $v->id])}}">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a class="favourite" href="#">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="infor-text">
                                                    <a href="{{route('product_detail',$v->id)}}"><span>{{$v->product_name}}</span></a>
                                                    <span class="star">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- SINGLE-BESTSELLER-PRODUCT END-->
                                            @endforeach
                                        </div>
                                        <!-- BESTSELLER-PRODUCT-ALL END-->
                                    </div>
                                    <!-- BEST-PRODUCT END-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                <!-- SPECIAL-PRODUCT START -->
                                    <div class="special-product">
                                        <h3 class="area-heading">Special</h3>
                                        <!-- SPECIAL-PRODUCT-ALL START-->
                                        <div class="special-product-all">
                                        <!-- SINGLE-SPECIAL-PRODUCT START-->
                                            <div class="single-special-product">
                                                <a href="{{route('product_detail',$v->id)}}">
                                                    <div class="product_img">
                                                        <img src="{{url('')}}/public/Home/img/special_product.jpg" alt="Special" />
                                                    </div>
                                                </a>
                                                <div id="defaultCountdown"></div>
                                                <div class="addtocart_area">
                                                    <div class="fet-price" style="padding: 0px 9px;">
                                                        <span class="addcart-text">$120.00</span>
                                                        <span class="addcart-text-del">$132.00</span>
                                                    </div>
                                                    <div class="wish">
                                                        <a href="{{route('cart.add',['id'=>$v->id])}}" class="shopping-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" class="favourite">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="infor-text">
                                                    <a href="{{route('product_detail',$v->id)}}"><span>Vestibulum et mollis nunc</span></a>
                                                    <span class="star">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- SINGLE-SPECIAL-PRODUCT END-->
                                            <!-- SINGLE-SPECIAL-PRODUCT START-->
                                            <div class="single-special-product">
                                                <a href="{{route('product_detail',$v->id)}}">
                                                    <div class="product_img">
                                                        <img src="{{url('')}}/public/Home/img/special_product.jpg" alt="Special" />
                                                    </div>
                                                </a>
                                                <div id="defaultCountdown2"></div>
                                                <div class="addtocart_area">
                                                    <div class="fet-price" style="padding: 0px 9px;">
                                                        <span class="addcart-text">$120.00</span>
                                                        <span class="addcart-text-del">$132.00</span>
                                                    </div>
                                                    <div class="wish">
                                                        <a href="{{route('cart.add',['id'=>$v->id])}}" class="shopping-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" class="favourite">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="infor-text">
                                                    <a href="{{route('product_detail',$v->id)}}">
                                                        <span>Vestibulum et mollis nunc</span>
                                                    </a>
                                                    <span class="star">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- SINGLE-SPECIAL-PRODUCT END-->
                                            <!-- SINGLE-SPECIAL-PRODUCT START-->
                                            <div class="single-special-product">
                                                <a href="{{route('product_detail',$v->id)}}">
                                                    <div class="product_img">
                                                        <img src="{{url('')}}/public/Home/img/special_product.jpg" alt="Special" />
                                                    </div>
                                                </a>
                                                <div id="defaultCountdown3"></div>
                                                <div class="addtocart_area">
                                                    <div class="fet-price" style="padding: 0px 9px;">
                                                        <span class="addcart-text">$120.00</span>
                                                        <span class="addcart-text-del">$132.00</span>
                                                    </div>
                                                    <div class="wish">
                                                        <a href="{{route('cart.add',['id'=>$v->id])}}" class="shopping-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" class="favourite">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="infor-text">
                                                    <a href="{{route('product_detail',$v->id)}}"><span>Vestibulum et mollis nunc</span></a>
                                                    <span class="star">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- SINGLE-SPECIAL-PRODUCT END-->
                                        </div>
                                        <!-- SPECIAL-PRODUCT-ALL END-->
                                    </div>
                                    <!-- SPECIAL-PRODUCT END -->
                                </div>
                            </div>
                            <!-- Special Product End -->
                            <!-- OFFER_AREA START-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <!-- OFFER_AREA START-->
                                    <div class="offer_area">
                                        <div class="offer_img">
                                            <img src="{{url('')}}/public/Home/img/offer-img.jpg" alt="Offer" />
                                            <div class="offer-text">
                                                <h2>Sale</h2>
                                                <p>up to</p>
                                                <h2 class="amout">30</h2>
                                            </div>
                                        </div>
                                        <div class="news-letter">
                                            <h2>send newsletter</h2>
                                            <form action="#">
                                                <span class="input-box">
                                                    <i class="fa fa-envelope"></i><input type="text" name="Email" placeholder="Email"/>
                                                </span>
                                                <input type="button" value="Send" />
                                            </form>
                                        </div>
                                    </div>
                                    <!-- OFFER_AREA END-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <!--FEATURED PRODUCT START-->
                            <div class="row">
                                <!--FEATURED-PRODUCT-AREA START-->
                                <div class="featured-product-area">
                                    <h3 class="area-heading">Featured</h3>
                                    <div class="featured-product-corusol">
                                        @foreach($pro as $v)
                                        <div class="col-lg-4 col-md-4">
                                            <!--SINGLE-FEATURED-PRODUCT START-->
                                            <div class="single-featured-product">
                                                <div class="product_img">
                                                    <a href="{{route('product_detail',$v->id)}}">
                                                        <img src="{{url('')}}/public/upload/products/{{$v->image}}" alt="Special" class="primary-image"/>
                                                        <img src="{{url('')}}/public/best-hot-price-new-11563166160sizij67ygq.png" alt="Special" class="secondary-image"/>
                                                    </a>
                                                    <a class="modal-view" href="{{route('product_detail',$v->id)}}">
                                                        <span class="quick-view">
                                                            <i class="fa fa-external-link"></i>Quick view
                                                        </span>
                                                    </a>
                                                    <div class="add-cart-area">
                                                        <div class="fet-price" style="padding: 0px 9px;">
                                                            <span class="addcart-text">{{$v->price}} VNĐ</span>
                                                            <span class="addcart-text-del">$132.00</span>
                                                        </div>
                                                        <div class="wish">
                                                            <a href="{{route('cart.add',['id'=>$v->id])}}" class="shopping-cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" class="favourite">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="infor-text">
                                                    <a href="{{route('product_detail',$v->id)}}"><span>{{$v->product_name}}</span></a>
                                                    <span class="star">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--SINGLE-FEATURED-PRODUCT END-->
                                        </div>
                                        @endforeach
                                    
                                        
                                    </div>
                                </div>
                                <!--FEATURED-PRODUCT-AREA END-->
                            </div>
                            <!--Featured Product End-->
                            
                            <!-- ADD-AREA START-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="add-area">
                                        <div class="add-img">
                                            <img src="{{url('')}}/public/Home/img/add_mans.jpg" alt="Mans" />
                                        </div>
                                        <div class="add-discription">
                                            <p>the best your choise</p>
                                            <h2>Shop’s men collection</h2>
                                            <a href="#">Shop collection</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ADD-AREA END-->
                            
                            <!-- TOP-CATEGORY-AREA START-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="top-category-area">
                                        <h3 class="area-heading">Top categories</h3>
                                        <!-- TOP-CATEGORY-MENU START-->
                                        <div class="top-category-menu">
                                        <a href="category_grid.php">
                                            <div>
                                                <i class="fa fa-female"></i>
                                                <p>Women</p>
                                            </div>
                                        </a>
                                        <a href="category_grid.php">
                                            <div>
                                                <i class="fa fa-male"></i>
                                                <p>Men</p>
                                            </div>
                                        </a>
                                        <a href="category_grid.php">
                                            <div>
                                                <i class="fa fa-suitcase"></i>
                                                <p>Bags</p>
                                            </div>
                                        </a>
                                        <a href="category_grid.php">
                                            <div>
                                                <i class="fa fa-video-camera"></i>
                                                <p>Digital Camera</p>
                                            </div>
                                        </a>
                                        <a href="category_grid.php">
                                            <div>
                                                <i class="fa fa-apple"></i>
                                                <p>Mobile Phone</p>
                                            </div>
                                        </a>
                                        </div>
                                        <!-- TOP-CATEGORY-MENU END-->
                                    </div>
                                </div>
                            </div>
                            <!-- TOP-CATEGORY-AREA END-->
                            
                            <!-- TOP-CATEGORY-PRODUCT-AREA START-->
                            <div class="row">
                                <div class="top-category-product-area">                             
                                    <!-- TOP-CATEGORY-SINGLE-PRODUCT START-->
                                    @foreach($pror as $v)
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="single-featured-product">
                                            <div class="product_img">
                                                <a href="category_grid.php">
                                                    <img src="{{url('')}}/public/upload/products/{{$v->image}}" alt="Category" class="primary-image"/>
                                                    <img src="{{url('')}}/public/best-hot-price-new-11563166160sizij67ygq.png" alt="Category" class="secondary-image"/>
                                                </a>
                                                <a class="modal-view" href="{{route('product_detail',$v->id)}}">
                                                    <span class="quick-view">
                                                        <i class="fa fa-external-link"></i>Quick view
                                                    </span>
                                                </a>
                                                <div class="add-cart-area">
                                                    <div class="fet-price" style="padding: 0px 9px;">
                                                        <span class="addcart-text">{{$v->price}} VNĐ</span>
                                                        <span class="addcart-text-del">$132.00</span>
                                                    </div>
                                                    <div class="wish">
                                                        <a href="{{route('cart.add',['id'=>$v->id])}}" class="shopping-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" class="favourite">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="infor-text">
                                                <a href="category_grid.php"><span>{{$v->product_name}}</span></a>
                                                <span class="star">
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star active"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TOP-CATEGORY-SINGLE-PRODUCT END-->
                                    @endforeach
                                    
                                </div>
                                <!-- TOP-CATEGORY-PRODUCT-AREA END-->
                            </div>
                            <!-- TOP-CATEGORY-PRODUCT-AREA END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAINCONTAIN-AREA END-->
        
        
        <!-- LOGO-BAND-AREA START-->
        <div class="logo-band-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 logo-band">
                        <h3 class="area-heading">Logo Brands</h3>
                        <div class="logo-area">
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_1.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_2.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_3.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_4.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_5.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_2.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_4.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_1.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                            <!-- SINGLE-LOGO START-->
                            <div class="single-logo">
                                <a href="#">
                                    <div class="logo-pic">
                                        <img src="{{url('')}}/public/Home/img/logo_band/logo_3.png" alt="Logo" />
                                    </div>
                                </a>
                            </div>
                            <!-- SINGLE-LOGO END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO-BAND-AREA END-->
        
@stop