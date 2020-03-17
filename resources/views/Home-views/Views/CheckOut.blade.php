@extends('Home-views.Master.Home')
@section('content')
<!-- CART_LIST_AREA START-->
		<div class="cart_list_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="single_cart_list table-responsive">
								@if(Session::has('success'))
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{!! Session::get('success') !!}
							</div>
								@endif
								@if(Session::has('error'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{!! Session::get('error') !!}
							</div>
								@endif
							<table class="table">
								<tr>
									<th>Hình ảnh</th>
									<th>Tên sản phẩm</th>
									<th>Giá</th>
									<th>Số lượng</th>
									<th></th>
								</tr>
								@foreach($cart->items as $k => $item)
								<tr>
									<td><img width="60px" src="{{url('')}}/public/upload/products/{{$item['image']}}" alt="Cart"/></td>
									<td>{{$item['name']}}</td>
									<td>{{number_format($item['price'])}} VNĐ</td>
									<td>
										<form action="{{route('cart.update',['id' => $item['id']])}}" method="get" class="form-inline" role="form">
											<input type="number" name="quantity" value="{{$item['quantity']}}"/>
											<input type="submit" value="update"/>
										</form>
									</td>
									<td><a href="{{route('cart.remove',['id'=>$item['id']])}}"><i class="glyphicon glyphicon-trash" style="color:red"></i></a></td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				<div class="total_subtotal_area">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="total_subtotal">
								<a href="{{route('cart.clear')}}" class="btn btn-danger pull-left" style="padding: 11px 100px; line-height: 108px;">Làm rỗng giỏ hàng</a>
								<div class="total_subtotal_amount">
									<div class="subtotal">
										<span>Tổng tiền:</span>
										<span class="amount"><b style="color:red">{{number_format($cart->total_price)}}</b> VNĐ</span>
									</div>
									<div class="total">
										<a href="{{route('order')}}" class="btn btn-primary">Đặt hàng</a>
										<a href="{{route('home')}}" class="btn btn-primary pull-right">Tiếp tục mua hàng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CART_LIST_AREA END-->
@stop