@extends('layout')
@section('title')
Laravel5 | Kontakt
@endsection
<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{url('/')}}">CMS with Laravel 5</a>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mężczyzna <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
						<a href="products,mezczyzna,newest" class="btn-custom btn-custom-black btn-custom-block btn-custom-highlight" style="background: #6ac5d2;">Wiosna lato 2017</a>
						<a href="products,mezczyzna,sale" class="btn-custom btn-custom-black btn-custom-block btn-custom-highlight">Wyprzedaż</a>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Obuwie</li>
							<li><a href="#">Kozaki</a></li>
                            <li><a href="#">Mokasyny</a></li>
                            <li><a href="#">Półbuty</a></li>
							<li><a href="#">Półbuty wizyowe</a></li>
                            <li><a href="#">Klapki</a></li>
							<li><a href="#">Sandały</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Dodatki</li>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Oferty specjalne</li>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
            <li class="dropdown mega-dropdown">
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Features</li>
							<li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
							<li><a href="#">Four Columns Grid</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
							<li><a href="#">Google Fonts</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Plus</li>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
                    <li class="col-sm-3">
    					<ul>
							<li class="dropdown-header">Women Collection</li>                            
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
				</ul>				
			</li>
            <li><a href="#">Store locator</a></li>
		</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="#">My cart (0) items</a></li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</div>

<!--
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
          </div>
        </div>
      </nav>
</header>
-->
@section('content')

<div class="container kontakt-wrapper">
	<h1>Kontakt</h1>
	<div class="row">
		<div class="col-md-4">
			<p>
				BADURA S.A.
				34-100 Wadowice, ul. Wałowa 4
				NIP: 5512298086
			</p>
		</div>
		<div class="col-md-4">
			<p>
				Sekretariat:
				+48 (33) 873 26 53 Fax wew. 110
				E-mail: sekretariat@badura.pl
				Pon. - Pt. w godz. 8:00 - 16:00
				</p>
				<p>
				Dział obsługi posprzedażowej:
				+48 507 614 802
				E-mail: reklamacje@badura.pl
				Pon. - Pt. w godz. 8:00 - 16:00
				<p>
				Dział handlowy:
				+48 (33) 873 26 53 Fax wew. 106
				Pon. - Pt. w godz. 8:00 - 16:00 
			</p>
		</div>
		<div class="col-md-4">
			<h3>POMOC</h3>
			<p>
				W razie pytań lub wątpliwości odnośnie danego modelu obuwia  (długości wkładek, szerokości cholewek itp.) prosimy o kontakt z salonem Badury fizycznie posiadającym dany model pod numerem podanym pod tabelką z rozmiarami na stronie szczegółów modelu.
				</p>
				<p>
				W sprawach dotyczących złożonych zamówień( a także zwrotów, wymian i płatności) 
				prosimy o kontakt z obsługą sklepu internetowego pod numerem:
				</p>
				<p>
				728944751  (9.00-17.00  pon-pt) lub email: bok@badura.pl
				</p>
				<p><button class="btn btn-danger btn-delete">Usuń</button> 
				lub z salonem obsługującym Państwa zamówienie, numer telefonu podany w emailu.
			</p>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>  
@endsection