@extends('app')
@section('content')
	<div class="catalog-list">
		<div class="catalog-sort">сортировка</div>
	@if(isset($products))
		@foreach($products as $product)
			<ul class="product">
				<li><a href=""><img src="/images/test.png"></a></li>
				<li class="catalog-item-name"><a href="">{{$product->name}}</a></li>
				<li><span class="price-item">230</span></li>
				<li class="cart-catalog-input">
					<span class="count-minus"></span>
					<span><input id="product-count" type="text" value='1'></span></input>
					<span class="count-plus"></span>
				</li>
				<li><button data-id="{{$product->id}}" class="buy-btn">в корзину</button></li>
			</ul>		
		@endforeach
	@endif
	</div>
@stop





