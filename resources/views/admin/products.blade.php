@extends('admin/includes/menu')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista produktów
      <small>Outlet + regular</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <div class="container" style="padding-right: 65px;">
    <div class="row">
      <div class="box box-info collapsed-box">
        <div class="box-header">
          <h3 class="box-title">Dodaj produkt
          </h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-plus"></i></button>
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="/laravel5-learning/public/product/add" method="post">
                <input type="hidden" name="_token" value=" {{ csrf_token() }} ">

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="productName">Nazwa produktu</label>
                    <input type="text" class="form-control" name="productName">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label" for="productCategory">Kategoria</label>
                    <select id="productCategory" name="productCategory" class="form-control">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="productsCode">Kod</label>
                    <input type="text" class="form-control" id="productsCode">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="productsDesctiption">Opis</label>
                    <input type="text" class="form-control" id="productsDesctiption">
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="priceBrutto">Cena podstawowa</label>
                    <input type="text" class="form-control" id="priceBrutto">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pricePromo">Cena promocyjna</label>
                    <input type="text" class="form-control" id="pricePromo">
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="control-label" for="addPhoto">Dodaj zdjecie</label>
                    <input id="addPhoto" name="addPhoto" class="input-file" type="file">
                  </div>
                  <div class="checkbox col-md-6">
                    <label>
                      <input type="checkbox">
                      Aktywny
                    </label>
                  </div>
                </div>


                <div class="row">
                  <button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">Dodaj produkt</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <!-- Main content -->
          <table class="table table-striped">
            <thead> <tr>
              <th>#</th>
              <th>Name</th>
              <th>Model</th>
              <th>Opis</th>
              <th>Cena promocyjna</th>
              <th>Cena podstawowa</th>
              <th>Aktywny</th>
              <th>Akcja</th>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tbody>
                <tr id="product{{ $product->id }}">
                  <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->seolink }}</td>
                  <td>{{ $product->description }}</td>
                  <td>{{ $product->pricePromo }}</td>
                  <td>{{ $product->priceBrutto }}</td>
                  <td>{{ $product->active }} </td>
                  <td>
                    <button class="btn btn-danger btn-delete" value="{{$product->id}}">Usuń</button>
                    <button class="btn btn-warning open-modal" value="{{$product->id}}">Edytuj</button>
                  </td>
                </tr>
                @endforeach
              </div>


              <!-- MODAL FOR EDITING PRODUCTS -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <h4 class="modal-title" id="myModalLabel">Task Editor</h4>
                    </div>
                    <div class="modal-body">
                      <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">

                        <div class="form-group error">
                          <label for="inputTask" class="col-sm-3 control-label">Task</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control has-error" id="task" name="task" placeholder="Task" value="">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" placeholder="Opis" value="">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                      <input type="hidden" id="product_id" name="product_id" value="0">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script>
$(document).ready(function(){
var url = "/laravel5-learning/public/products";
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('.open-modal').click(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var product_id = $(this).val();

  $.get(url + '/edit/' + product_id, function (data) {
    //success data
    console.log(data);
    $('#product_id').val(data.id);
    $('#task').val(data.name);
    $('#description').val(data.description);
    $('#btn-save').val("update");

    $('#myModal').modal('show');
  })
});

$("#btn-save").click(function (e) {
  var product_id = $('#product_id').val();
  e.preventDefault();
  var formData = {
    id: product_id,
    name: $('#task').val(),
    description: $('#description').val(),
  }
  $.ajax({
    type: "PUT",
    url: url+ '/edit/' + product_id,
    data: formData,
    dataType: 'json',
    success: function (data) {
      console.log(data);
      var product='<tr id="product' + product_id + '"> ';
      product+='<th scope="row">' + product_id + '</th>';
      product+='<td>'+ formData.name +'</td>';
      product+='<td> </td>';
      product+='<td> </td>';
      product+='<td> </td>';
      product+='<td> </td>';
      product+='<td> </td>';
      product+='<td>';
      product+='<button class="btn btn-danger btn-delete" value="' + product_id + '">Usuń</button> ';
      product+='<button class="btn btn-warning open-modal" value="' + product_id + '">Edytuj</button>';
      product+='</td>';
      product+='</tr>';
      console.log(product);
      $("#product" + product_id).replaceWith( product );

      $('#frmTasks').trigger("reset");

      $('#myModal').modal('hide')
    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
});


$('.btn-delete').on('click',function(){
  var product_id = $(this).val();

  swal({
    title: "Jesteś pewien?",
    text: "Nie bedziesz w stanie odzyskac tej pozycji!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Tak, usun to!',
    cancelButtonText: "Nie, anuluj prosze!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm){
      $.ajax({

        type: "DELETE",
        url: url + '/delete/' + product_id,
        success: function (data) {
          console.log(data);

          $("#product" + product_id).remove();
        },
        error: function (data) {
          console.log('Error:', data);
        }
      });
      swal("Usuniete!", "Pozycja zostala usunieta!", "success");
    } else {
      swal("Anulowane", "Pozycja nie zostala usunieta :)", "error");
    }
  });
});
});



          </script>
          <!-- /.content-wrapper -->
          @endsection
