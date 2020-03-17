@extends('Home-views.Master.Home')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

				@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{!! Session::get('success') !!}
				</div>
				@endif
				<form action="" method="POST" role="form">
			<legend>Contact</legend>
		@csrf
			<div class="form-group">
				<label for="">Tên</label>
				<input type="text" class="form-control" name="name" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">email</label>
				<input type="text" class="form-control" name="email" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<input type="text" class="form-control" name="content" placeholder="Input field">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Contact</button>
		</form>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				
			</div>
			
		</div>
		
	</div>

@stop