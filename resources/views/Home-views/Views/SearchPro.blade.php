@extends('Home-views.Master.Home')
@section('content')
	<!--MENU-BOTTOM START-->
		<div class="menu-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="category-gird-menu">
							<nav>
								<ul>
									<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
									<li><a class="active-current" href="category_list.php">Category List</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MENU-BOTTOM END-->
		
		
		<div class="slider-and-category">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
					<!-- SAID-BAR START -->
						<div class="side-bar"> 
							<h2><i class="fa fa-align-justify"></i>Category</h2>
							<nav>
								<ul>
									<li><a href="category_grid.php"><span><i class="fa fa-female"></i></span>Womens <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
										<div class="category-mega-menu">
											<span class="menu-text">							
												<a href="category_grid.php">Clothing</a>
												<a href="category_grid.php">Shoes</a>
												<a href="category_grid.php">Bags</a>
												<a href="category_grid.php">Headwear</a>
												<a href="category_grid.php">Accessories</a>
												<a href="category_grid.php">News Arrivals</a>
											</span>
											<span>
												<img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
											</span>
										</div>
									</li>
									
									<li><a href="category_grid.php"><span><i class="fa fa-male"></i></span>Mens <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
										<div class="category-mega-menu">
											<span class="menu-text">							
												<a href="category_grid.php">Clothing</a>
												<a href="category_grid.php">Shoes</a>
												<a href="category_grid.php">Bags</a>
												<a href="category_grid.php">Headwear</a>
												<a href="category_grid.php">Accessories</a>
												<a href="category_grid.php">News Arrivals</a>
											</span>
											<span>
												<img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
											</span>
										</div>
									</li>
									
									<li><a href="category_grid.php"><span><i class="fa fa-suitcase"></i></span>Bags <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
										<div class="category-mega-menu">
											<span class="menu-text">							
												<a href="category_grid.php">Clothing</a>
												<a href="category_grid.php">Shoes</a>
												<a href="category_grid.php">Bags</a>
												<a href="category_grid.php">Headwear</a>
												<a href="category_grid.php">Accessories</a>
												<a href="category_grid.php">News Arrivals</a>
											</span>
											<span>
												<img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
											</span>
										</div>
									</li>
									
									<li><a href="category_grid.php"><span><i class="fa fa-video-camera"></i></span>Digital Camera <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
										<div class="category-mega-menu">
											<span class="menu-text">							
												<a href="category_grid.php">Clothing</a>
												<a href="category_grid.php">Shoes</a>
												<a href="category_grid.php">Bags</a>
												<a href="category_grid.php">Headwear</a>
												<a href="category_grid.php">Accessories</a>
												<a href="category_grid.php">News Arrivals</a>
											</span>
											<span>
												<img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
											</span>
										</div>
									</li>
									
									<li><a href="category_grid.php"><span><i class="fa fa-apple"></i></span>Mobile Phone </a></li>
									
									<li><a href="category_grid.php"><span><i class="fa fa-desktop"></i></span>Computer <span class="right-icon"><i class="fa fa-arrow-circle-o-right"></i></span></a>
										<div class="category-mega-menu">
											<span class="menu-text">							
												<a href="category_grid.php">Clothing</a>
												<a href="category_grid.php">Shoes</a>
												<a href="category_grid.php">Bags</a>
												<a href="category_grid.php">Headwear</a>
												<a href="category_grid.php">Accessories</a>
												<a href="category_grid.php">News Arrivals</a>
											</span>
											<span>
												<img src="{{url('')}}/public/Home/img/mens.jpg" alt="Mens" />
											</span>
										</div>
									</li>
									<li><a href="#"><span><i class="fa fa-gift"></i></span>Gift</a></li>
								</ul>
							</nav>
						</div>
						<!-- SAID-BAR END -->
						<div class="row">
							
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- MANUFACTURERS-AREA START-->
								<div class="manufacturers-area">
									<h2 class="category-heding">Manufacturers</h2>
									<div class="manufacturers-color-menu">
										<nav>
											<ul>
												<li><a href="#"><i class="fa fa-arrow-right"></i>Aliquam</a></li>
												<li><a href="#"><i class="fa fa-arrow-right"></i>Duis tempus id</a></li>
												<li><a href="#"><i class="fa fa-arrow-right"></i>Leo quis molestie.</a></li>
												<li><a href="#"><i class="fa fa-arrow-right"></i>Suspendisse</a></li>
												<li><a href="#"><i class="fa fa-arrow-right"></i>Nunc gravida</a></li>
											</ul>
										</nav>
									</div>
								</div>
								<!-- MANUFACTURERS-AREA END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- COMPARE START-->
								<div class="compare">
									<div class="news-letter">
										<h2>Compare</h2>
										<form action="#">
											<span class="input-box">
											<input type="text" name="Email" placeholder="You have no item(s) to compare"/>
											</span>
										</form>
									</div>
								</div>
								<!-- COMPARE END-->
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6">
								<!-- POPULAR-TAGS START-->
								<div class="popular-tags">
									<h2 class="category-heding">Popular tags</h2>
									<div class="tags">
										<ul>
											<li><a href="#">agency</a></li>
											<li><a href="#">blog</a></li>
											<li><a href="#">business</a></li>
											<li><a href="#">clean</a></li>
											<li><a href="#">corporate</a></li>
											<li><a href="#">creative</a></li>
											<li><a href="#">ecommerce</a></li>
											<li><a href="#">elegant</a></li>
											<li><a href="#">fashion</a></li>
											<li><a href="#">minimal</a></li>
										</ul>
									</div>
								</div>
								<!-- POPULAR-TAGS END-->
							</div>
							<!-- OFFER_AREA START-->
							<div class="col-lg-12 col-md-12 hidden-sm">
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
								</div>
								<!-- OFFER_AREA END-->
							</div>
						</div>
					</div>			
					<div class="col-lg-9 col-md-9">
						<!-- CATEGORY-BANNER START-->
						<div class="category-banner">
							<img src="{{url('')}}/public/Home/img/category_banner.jpg" alt="" />
						</div>
						<!-- CATEGORY-BANNER END-->
						<!-- GIRD CATEGORY-FORM START-->
						<div class="category-form">
							<div class="col-lg-3 col-md-3 col-sm-3">
								<!-- GIRD-AND-LIST-MENU START-->
								<div class="gird-and-list-menu">
									<nav>
										<ul>
											<li><a href="category_list.php" class="gird-active-color"><i class="fa fa-th-list"></i></a></li>
											<li><a href="category_grid.php"><i class="fa fa-th-large"></i></a></li>
										</ul>
									</nav>
								</div>
								<!-- GIRD-AND-LIST-MENU END-->
							</div>
							<!-- FORM-AREA START-->
							<div class="col-lg-9 col-md-9">
								<div class="form-area">
									<div class="sort-by">
										Sort By
										<select name="short">
											<option value="">Position</option>
											<option value="">Position</option>
										</select>
									</div>
									<div class="show-value">
										Show
										<select name="show">
											<option value="16">16</option>
											<option value="15">15</option>
										</select>
										Per Page
									</div>
								</div>
							</div>
							<!-- FORM-AREA END-->
						</div>
						<!-- GIRD CATEGORY-FORM END-->
						
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<!--CATEGORY PRODUCT CATEGORY_SINGLE_LIST START-->
							@foreach($search_pro as $v)
								<div class="category_single_list">
								<div class="category_image">
									<a href="{{route('product_detail',$v->id)}}"><img src="{{url('')}}/public/upload/products/{{$v->image}}" alt="" /></a>
								</div>
								<div class="category_text">
									<div class="price_old_new">
										@if(!empty($v->sale_price))
										<p> Giá: {{$v->sale_price}}</p>
										<p class="old_price"><del>{{$v->price}} VNĐ</del></p>
										@else
										<p> Giá: {{$v->price}}</p>
										@endif
									</div>
									<div class="category_prod_description">
										<h2><a href="{{route('product_detail',$v->id)}}">{{$v->product_name}}</a></h2>
										<p>{{$v->content}}</p>
									</div>
									<div class="category_prod_card_area">
										<a href="{{route('cart.add',['id' => $v->id])}}">
											<span class="cart">
												<i class="fa fa-shopping-cart"></i>
											</span>
										</a>
										<a href="" class="add-text-lis">
											<span>Add to cart</span>
										</a>
										<a href="#" class="heart">
											<span>
												<i class="fa fa-heart-o"></i>
											</span>
										</a>
									</div>
								</div>
								</div>
								<!--CATEGORY PRODUCT CATEGORY_SINGLE_LIST END-->
								@endforeach
							</div>
						</div>
						<!--CATEGORY PRODUCT LIST END-->
						<!--PGAINATION AREA START-->
						<div class="row">
							<div class="clear-fix">
								{{$search_pro->links()}}
							</div>
						</div>
						<!--PGAINATION AREA END-->
					</div>					
				</div>
			</div>
		</div>
		
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- LOGO-BAND-AREA END-->
@stop