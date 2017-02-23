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
          </div><!--/.nav-collapse -->
        </div>
      </nav></header>

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
  $('.btn-add-to-cart').click(function(){ 
    if($('.selectpicker').val()<'30')
    {
            $('.btn-add-to-cart').toggleClass("animated shake",function(){
               $(this).remove();
            }); 
            $('.selectpicker').toggleClass("animated flash red-border",function(){
               $(this).remove();
            }); 
    }
    $.ajax({

            type: "get",
            url: url + '/' + {{$product->id}},
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });  
});
</script>

@endsection