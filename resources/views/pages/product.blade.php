@extends('layout.main')

@section('container')
<div class="container">
	<a href="/product/create" class="btn btn-primary btn-sm py-3">Tambah Produk</a>
	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
	<div class="table-responsive py-3">
		<table class="table table-hover table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Picture</th>
					<th>Act</th>
				</tr>
			</thead>
			<tbody>
			@foreach($product as $product)
				<tr>
					<td> {{$loop->iteration}} </td>
					<td> {{$product->name}} </td>
					<td> {{$product->description}} </td>
					<td> {{$product->price}} </td>
					<td> {{$product->picture}} </td>
					<td>
						<a href="/product/{{$product->id}}/edit" class="btn btn-success">Edit</a>
						<!-- <a href="" class="badge badge-warning">delete</a> -->
						<form action="/product/{{$product->id}}" method="post" class="d-inline">
							@method('delete')
							@csrf
							<button type="submit" class="btn btn-warning">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection