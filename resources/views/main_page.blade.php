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
              <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 2 <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-cart" role="menu">
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://localhost/laravel5-learning/public/images/2330-69-1318_(1).jpg" width="50" height="50" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li>
                  <span class="item">
                    <span class="item-left">
                        <img src="http://localhost/laravel5-learning/public/images/9327-69-637_(1).jpg"  width="50" height="50" alt="" />
                        <span class="item-info">
                            <span>Item name</span>
                            <span>23$</span>
                        </span>
                    </span>
                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                    </span>
                </span>
              </li>
              <li class="divider"></li>
              <li><a class="text-center" href="">Pokaż koszyk</a></li>
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
<div class="row">
</div>
		<div id="carousel-example-generic" class="carousel slide main-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                  <?php $first=true;
                        $size=count ($sliderImgs);
                   ?>
                @for ($i = 0; $i < $size; $i++)
                @if($i==0)
                  <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
                @else
                  <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class=""></li>
                @endif
                @endfor
                </ol>
                <div class="carousel-inner">
                  @foreach($sliderImgs as $sliderImg)
                  @if ($first==true)
                  <div class="item active">
                    <img src="/laravel5-learning/public/images/{{$sliderImg}}" alt="{{$sliderImg}}">
                  </div>
                  {{$first=false}}
                  @else
                  <div class="item">
                    <img src="/laravel5-learning/public/images/{{$sliderImg}}" alt="{{$sliderImg}}">
                  </div>
                  @endif
                  @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="carrousel-arrow fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="carrousel-arrow fa fa-angle-right"></span>
                </a>
              </div>

</div>

<div id="ona_on">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset('images/main-new-collection-women.jpg')}}" alt="Ona">
				<figcaption>
					<h3>NOWA<br/>KOLEKCJA</h3>
					<button type="button" name="button">Dla niej</button>
				</figcaption>
			</div>
			<div class="col-md-6">
				<figcaption>
					<h3>NOWA<br/>KOLEKCJA</h3>
					<button type="button" name="button">Dla niego</button>
				</figcaption>
				<img src="{{asset('images/main-new-collection-men.jpg')}}" alt="On">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row" id="show_products_conatiner">
		@foreach ($products as $product)
		@if($product->active==1)
		<div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-offset="350">
			<a href="../product/{{$product->seolink }}"><img src="/laravel5-learning/public/images/{{ $product->thumb }}" alt="" style=" width: 100%;"></a>
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
<script>
  AOS.init({
  duration: 700,
  once: true
})
</script>
<script type="text/javascript" src="http://localhost:35729/livereload.js">

</script>
@endsection
