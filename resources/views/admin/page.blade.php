@extends('admin/includes/menu')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $pageContent->name }}
        <small> edycja strony</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
<div class="container">
      <div class="row">
    <div class="box box-info collapsed-box">
            <div class="box-header">
              <h3 class="box-title">Parametry strony
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
              <form action="">
            <div class="form-group">
              <label for="pageName">Page name</label>
              <input type="text" class="form-control" id="pageName" placeholder="{{$pageContent->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" @if ($pageContent->active==1) checked
                @endif>
                Aktywny
              </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
            </div>
          </div>
        </div>
        </div>

  <div class="container">
      <div class="row">
    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edytuj strone
                <small>Nie zapomnij zapisac :) </small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                        {{ $pageContent->content }}
                    </textarea>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
@endsection