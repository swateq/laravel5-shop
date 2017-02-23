@extends('layout')
<header>
	@include('includes/header')
</header>
@section('content')
<table class="table table-striped">
	<thead> <tr> <th>#</th> <th>Name</th><th>Model</th><th>Cena promocyjna</th><th>Cena podstawowa</th><th>Promocja</th><th>Aktywny</th></thead>
	<tbody>
@foreach ($products as $product)
<tbody> 
	<tr> 
		<th scope="row">{{ $product->id }}</th>
		 <td>{{ $product->name }}</td>
		 <td>{{ $product->seolink }}</td>
		 <td>{{ $product->pricePromo }}</td>
		 <td>{{ $product->priceBrutto }}</td>
		 <td>{{ $product->promotion }} </td>
		 <td>{{ $product->active }} </td>
	</tr>
@endforeach
</tbody> </table>
<div class="row">
<button class="btn btn-primary col-md-4 col-md-offset-4 addProduct"><a href="/laravel5-learning/public/insert" class="no-style">Dodaj produkt</a></button>
	
</div>
<div class="container">
	<div class="row">
		@foreach ($products as $product)
		@if($product->active==1)
		<div class="col-md-3 col-sm-4">
			<a href="{{$product->seolink }}"><img src="../public/images/{{ $product->thumb }}" alt="" style=" width: 100%;"></a>
			<div class="row">
				<div class="col-md-6">
					<span class="seolink">{{$product->seolink}}</span><br/><h4 class="productName">{{$product->name}}</h4>
				</div>
				<div class="col-md-6">	
					@if ($product->promotion == 1)
						<span class="pull-right crossed-price"><strike>{{ $product->priceBrutto }}</strike></span>	
						<br/>
						<span class="pull-right price">{{ $product->pricePromo }}</span>		
					@else
					<span class="pull-right">{{ $product->priceBrutto }}</span>	
					@endif
				</div>
			</div>
		</div>	
		@endif
		@endforeach
	</div>
</div>
@endsection
