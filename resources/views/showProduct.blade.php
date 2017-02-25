@extends('layout')
@section('title')
Produkt &raquo; {{$product->seolink}}
@endsection
<header>
	<nav class="navbar navbar-default navbar-static-top navbar-inverse no-margin">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/laravel5-learning/public">CMS with Laravel 5</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              @foreach ($podstrony as $podstrona)
                @if ($podstrona->active==1)
                  <li><a href="/laravel5-learning/public/page/{{$podstrona->seolink}}" class="fu">{{$podstrona->name}}</a></li>
                @endif
              @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> <span class="shopping-cart-counter">{{ Cart::count()}}</span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
						<?php $cartItems=Cart::content();?>

						@foreach($cartItems as $item)
						  <li id="item{{$item->id}}">
                  <span class="item">
                    <span class="item-left">
                        <img src="/laravel5-learning/public/images/{{ $item->options->thumb }}" width="50" height="50" alt="" />
                        <span class="item-info">
                            <span>{{$item->name}}</span>
                            <span>{{$item->price}}zł<span class="item-qty">{{$item->qty}}</span></span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right removeFromCart" value="{{$item->id}}">x</button>
                    </span>
                </span>
              </li>
              @endforeach
              <li class="divider"></li>
              <li><a class="text-center" href="/laravel5-learning/public/cart">Pokaż koszyk</a></li>
          </ul>
        </li>
      </ul>
              <li><a href="{{ url('/admin') }}">Admin</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
		</header>

@section('content')

<div class="container product-wrapper" id="lightgallery">
	<div class="row">
		<div class="col-md-6">
			<img src="/laravel5-learning/public/images/{{ $product->thumb }}" alt="" style=" width: 100%;">
		</div>
		<div class="col-md-6 product-desc-wrapper">
			<h4> {{$product->seolink}} </h4>
			<h2>{{$product->name}}</h2>
			<div class="price-wrapper">
				<h2>{{$product->priceBrutto}}</h2>
			</div>
			<select class="selectpicker select-fix-menu l choose-size" title="Wybierz rozmiar" style="padding: 9px 10px;">
                                    <option value="100">wybierz rozmiar</option>
                                    <option value="36" title="36">36</option>
                                    <option value="37" title="37">37</option>
                                    <option value="38" title="38">38</option>
                                    <option value="39" title="39">39</option>
                                    <option value="40" title="40">40</option>
                                    </select>
            <div>
                <button class="btn-custom btn-custom-black btn-custom-block btn-add-to-cart">
                    Dodaj
                    do koszyka
                </button>
            </div>
                                    <br/>
            <h3>Opis</h2>
            	<p>{{$product->description}}</p>
		</div>
	</div>

</div>
<script>
$(document).ready(function(){
  var url = "/laravel5-learning/public/cart";
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $('.btn-add-to-cart').click(function(){
    if($('.selectpicker').val()<'30')
    {
            $('.btn-add-to-cart').toggleClass("animated shake",function(){
               $(this).remove();
            });
            $('.selectpicker').toggleClass("animated flash red-border",function(){
               $(this).remove();
            });
    }else{
    $.ajax({
            type: "post",
            url: url + '/add/' + {{$product->id}},
            success: function (data) {
                console.log(data);
								$('.shopping-cart-counter').html(parseInt($('.shopping-cart-counter').html(),10)+1);
								var product='<li id="item{{$product->id}}">';
	              product+='<span class="item">';
	              product+='<span class="item-left">';
	              product+='<img src="/laravel5-learning/public/images/{{ $product->thumb }}" width="50" height="50" alt="" />';
	              product+='<span class="item-info">';
	              product+='<span>{{$product->name}}</span>';
	              product+='<span>{{$product->priceBrutto}}zł<span class="item-qty"> </span> </span>';
	              product+='</span>';
	              product+='</span>';
	              product+='<span class="item-right">';
	              product+='<button class="btn btn-xs btn-danger pull-right removeFromCart">x</button>';
	              product+='</span>';
	              product+='</span>';
	           		product+='</li>';
							if(data=='0'){
								$('.dropdown-menu').prepend(product);
								$('#item{{$product->id}} .item-qty').html('1');
							}else{
								$('#item{{$product->id}} .item-qty').html(parseInt($('#item{{$product->id}} .item-qty').html(),10)+1);
							}
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
			}
    });

	  $('.removeFromCart').click(function(e){
	  var product_id = $(this).val();
		 e.preventDefault();
		 console.log(product_id);
			$.ajax({
	            type: "post",
	            url: url + '/remove/' + product_id,
	            success: function (data) {
	                console.log(data);
									$('.shopping-cart-counter').html(parseInt($('.shopping-cart-counter').html(),10)-1);
	            },
	            error: function (data) {
	                console.log('Error:', data);
	            }
	        });
    });
});
</script>

@endsection
