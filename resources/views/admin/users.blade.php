@extends('admin/includes/menu')
@section('content')
<link rel="stylesheet" href="/laravel5-learning/public/css/animate.css">
<link rel="stylesheet" href="/laravel5-learning/public/css/bootstrap-table.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<script src="/laravel5-learning/public/js/jquery-3.1.1.min.js"></script>
<script src="/laravel5-learning/public/js/bootstrap-table.min.js"></script>
<script src="/laravel5-learning/public/js/bootstrap-table-pl-PL.min.js"></script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Dodaj nowego użytkownika</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('url' => 'user/add','method'=>'post', 'class' => 'form-horizontal'))!!}
            <div class="form-group">
              {!! Form::label('imie', 'Imie:', ['class' => 'col-lg-2 control-label']) !!}
              <div class="col-lg-10">
                  {!! Form::text('imie', $value = null, ['class' => 'form-control']) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('haslo', 'Haslo:', ['class' => 'col-lg-2 control-label']) !!}
              <div class="col-lg-10">
                  {!! Form::password('haslo',['class' => 'form-control', 'type' => 'password']) !!}
               </div>
            </div>
            <div class="form-group">
              {!! Form::label('select', 'Uprawnienia', ['class' => 'col-lg-2 control-label'] )  !!}
              <div class="col-lg-10">
                  {!!  Form::select('select', ['0' => 'Użytkownik', '1' => 'Administrator'],  '0', ['class' => 'form-control' ]) !!}
              </div>
            </div>
            <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Dodaj', ['class' => 'btn btn-primary pull-right'] ) !!}
            </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista użytkowników
      </h1>
      <ol class="breadcrumb">
        <li><a href="/laravel5-learning/public/admin"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
        <li class="active">Użytkownicy</li>
      </ol>
    </section>

    <!-- Main content -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
           <button class="btn btn-primary btn-social" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Dodaj użytkownika </button>
        </div>
      </div>
      <div class="row">
        <table class="col-md-12" 
        data-toggle="table" 
        data-sort-name="#"
        data-sort-order="asc"
        data-show-columns="true"
        data-search="true"
        data-show-toggle="true"
        data-show-columns="true"
        data-pagination="true">
          <thead> 
            <tr> 
              <th data-field="#" data-sortable="true">#</th> 
              <th data-field="imie" data-sortable="true">Imie</th>
              <th data-field="email" data-sortable="true">Email</th>
              <th data-field="uprawnienia" data-sortable="true">Uprawnienia</th>
              <th data-field="utworzony" data-sortable="true">Utworzony</th>
            </tr>
          </thead><tbody>
            @foreach ($users as $user)            
              <tr> 
                <td scope="row">{{ $user->id }}</td>
                 <td>{{ $user->name }}</td>
                 <td>{{ $user->email }}</td>
                 <td>
                  @if($user->permission == 1)
                  Administrator
                  @elseif($user->permission == 0)
                  Użytkownik
                  @else
                  Blad
                  @endif
                </td>
                <td>{{ $user->created_at }}</td>
              </tr>
            @endforeach
          </tbody> 
      </table>
      
      </div>
    </div>


<script>

$(document).ready(function(){
  function queryParams() {
    return {
        type: 'owner',
        sort: 'updated',
        direction: 'desc',
        per_page: 100,
        page: 1
    };
}
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})});
</script>
  <!-- /.content-wrapper -->
@endsection