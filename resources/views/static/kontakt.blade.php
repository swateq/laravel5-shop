@extends('layout')
@section('title')
Laravel5 | Kontakt
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
</div>
</div>
</nav>
</header>
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
        <p>
          lub z salonem obsługującym Państwa zamówienie, numer telefonu podany w emailu.
        </p>
      </div>
    </div>
  </div>
  @endsection
