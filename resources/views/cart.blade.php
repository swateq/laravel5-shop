@extends('layout')
@section('title')
Laravel5 | Strona glowna
@endsection
<header>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

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
              <li><a href="{{ url('/admin') }}">Admin</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav></header>
@section('content')
<div class="container">
	<div class="row">
		<h1>Twoj koszyk!</h1>
    W koszyku masz <span id="counter">{{ sizeof(Cart::content()) }}</span> produktow
		@if(sizeof(Cart::content())>0)
		<h3>Masz cos w koszyku!</h3>
		@else
		<h3>Nie masz nic w koszyku!<h3>
		@endif
    <button class="btn btn-primary add-to-cart">Dodaj do koszyka</button>
	</div>
	{{Cart::content()}}
	
</div>

<script>
  $(document).ready(function(){
    $('.add-to-cart').click(function(){
    $('#counter').html(parseInt($('#counter').text())+1);
    });
  });

</script>
@endsection
