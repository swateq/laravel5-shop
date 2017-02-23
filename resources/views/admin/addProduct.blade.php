@extends('layout')

@section('content')
<form action="/laravel5-learning/public/create" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<label for="name">Nazwa:</label>
<input type='text' name='name' /><br/>
<label for="seolink">Symbol:</label>
<input type='text' name='seolink' /><br/>
<label for="pricePromo">Cena promocyjna:</label>
<input type='text' name='pricePromo' /><br/>
<label for="priceBrutto">Cena podstawowa:</label>
<input type='text' name='priceBrutto' /><br/>
<label for="active">Aktywny:</label>
<input type='text' name='active' /><br/>
<label for="promotion">Promocja:</label>
<input type='text' name='promotion' /><br/>
<br/>
<input type='submit' value="Add product" />

</form>
@endsection
