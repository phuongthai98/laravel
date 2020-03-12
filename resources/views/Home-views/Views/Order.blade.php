@extends('Home-views.Master.Home')


@section('content')
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-4">
				<form action="" method="POST" role="form">
					<legend>Thông tin đặt hàng</legend>
				@csrf

				@if(isset(Auth::guard('cus')->user()->email))
					<div class="form-group">
						<label for="">Tên đầy đủ</label>
						<input type="text" class="form-control" name="full_name" value="{{Auth::guard('cus')->user()->full_name}}" placeholder="Your name">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" name="address" value="{{Auth::guard('cus')->user()->address}}" placeholder="Your address">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" value="{{Auth::guard('cus')->user()->phone}}" placeholder="Your phone number">
					</div>
				@else
				
					<div class="form-group">
						<label for="">Tên đầy đủ</label>
						<input type="text" class="form-control" name="full_name" placeholder="Your name">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" class="form-control" name="address" placeholder="Your address">
					</div>
					<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" name="phone" placeholder="Your phone number">
					</div>
				@endif

					<button type="submit" class="btn btn-primary">Xác nhận</button>
				</form>
			</div>

			<div class="col-md-8">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($cart->items as $k => $item)
								<tr>
									<td><img width="60px" src="{{url('')}}/public/upload/products/{{$item['image']}}" alt="Cart"/></td>
									<td>{{$item['name']}}</td>
									<td>{{number_format($item['price'])}} VNĐ</td>
									<td>{{$item['quantity']}}</td>
								</tr>
							@endforeach
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop