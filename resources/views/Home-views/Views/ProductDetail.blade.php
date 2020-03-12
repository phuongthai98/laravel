@extends('Home-views.Master.Home')


@section('content')

<div class="container">
	<div class="modal-body">
        <div class="modal-product">

            <div class="product-images">
                <div class="main-image images">
                    <img alt="" src="{{url('')}}/public/upload/products/{{$pro_detail->image}}">
                </div>
                <div class="thumbnail-img">
                </div>
            </div><!-- .product-images -->
            
            <div class="product-info">
                <h1>{{$pro_detail->product_name}}</h1>
                <div class="price-box">
                    <p class="price"><span class="special-price"><span class="amount">{{$pro_detail->price}} VNĐ</span></span></p>
                </div>
                <div class="quick-add-to-cart">
                    <form method="post" class="cart">
                        <div class="numbers-row">
                            <input type="number" id="french-hens" value="3">
                        </div>
                        <a href="{{route('cart.add',['id'=>$pro_detail->id])}}"class="btn btn-primary">Add to cart</a>
                    </form>
                </div>
                <div class="quick-desc">
                    {{$pro_detail->content}}
                </div>
                <div class="social-sharing">
                    <div class="widget widget_socialsharing_widget">
                        <h3 class="widget-title-modal">Share this product</h3>
                        <ul class="social-icons">
                            <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                            <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .product-info -->
        </div><!-- .modal-product -->
    </div><!-- .modal-body -->
</div>

@stop