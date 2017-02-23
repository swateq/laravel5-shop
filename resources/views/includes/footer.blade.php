<footer class="footer">
      <div class="container">
        <div class="row">
        	<div class="col-md-3 hidden-sm hidden-xs">
        		<h4>FIRMA</h4>
        		<ul>
        			<li><a href="#">O firmie</a></li>
        			<li><a href="#">Kontakt</a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 col-sm-6 col-xs-6">
        		<h4>SKLEP</h4>
        		<ul>
        			<li><a href="#">Regulamin sklepu</a></li>
        			<li><a href="#">Dostawa i płatność</a></li>
        			<li><a href="#">Warunki zwrotu</a></li>
        			<li><a href="#">Reklamacje</a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 hidden-sm hidden-xs">
        		<select name="places" id="places" class="selectpicker">
                        <option value="0">Wybierz miasto</option>
                        @foreach($sklepy as $sklep)
                        <option value="{{$sklep->id}}" class="shopSelect">{{$sklep->name}}</option>
                        @endforeach
                </select>

                <ul class="showShop">

                </ul>
        	</div>
        	<div class="col-md-3 right-side col-sm-6 col-xs-6">
                        <h4>Skontaktuj się z nami</h5>
                        <p class="phone">(+48) 728 944 751</p>
                        <p class="openhours">pon.-pt. 9:00-17:00</p>

                        <p class="mail">
                            e-mail: <a href="mailto:test@test.test">bok@badura.pl</a>
                        </p>


                        <ul class="mobile-footernav visible-xs">
                            <li><a href="o_firmie">O firmie</a></li>
                            <li><a href="kontakt">Kontakt</a></li>
                            <li><a href="salony">Salony firmowe</a></li>
                        </ul>
                    </div>
        </div>
      </div>
    </footer>
<script>
$(document).ready(function(){
    $('.showShop').html('');
    var url = "/laravel5-learning/public/shops";
    $('select').on('change', function() {
      var shop_id = this.value;
      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       var product_id = $(this).val();

       $.get(url + '/show/' + shop_id, function (data) {

          // console.log(data);
           $('.showShop').html('');
           $('.showShop').append('<li><strong>'+data.name+'</strong></li>');
           $('.showShop').append('<li>'+data.street+'</li>');
           $('.showShop').append('<li>'+data.city+'</li>');
           $('.showShop').append('<li>'+data.phoneNumber+'</li>');
           $('.showShop').append('<li>'+data.email+'</li>');

       })
    })
});
</script>
