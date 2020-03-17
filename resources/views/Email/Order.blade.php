<h2>Hi {{$name}}</h2>


<p>Cảm ơn bạn đã đặt hàng của chúng tôi!</p>

<p>Dưới đây là các sản phẩm bạn đã mua</p>


<table border="1" cellspacing="0" cellpadding="10" width="400">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
		</tr>
	</thead>
	<tbody style="text-align: center">
		<?php $a = 0; ?>
		@foreach($cart->items as $k => $item)
		<tr>
			<td>{{$a += 1}}</td>
			<td>{{$item['name']}}</td>
			<td>{{number_format($item['price'])}}</td>
			<td>{{$item['quantity']}}</td>
			<td>{{$cart->total_price}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
